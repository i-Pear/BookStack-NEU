<?php

namespace BookStack\Http\Controllers\Auth;

use Activity;
use BookStack\Actions\ActivityType;
use BookStack\Auth\Access\SocialAuthService;
use BookStack\Exceptions\LoginAttemptEmailNeededException;
use BookStack\Exceptions\LoginAttemptException;
use BookStack\Facades\Theme;
use BookStack\Http\Controllers\Controller;
use BookStack\Theming\ThemeEvents;
use CAS_AuthenticationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Redirection paths
     */
    protected $redirectTo = '/';
    protected $redirectPath = '/';
    protected $redirectAfterLogout = '/login';

    protected $socialAuthService;

    /**
     * Create a new controller instance.
     */
    public function __construct(SocialAuthService $socialAuthService)
    {
        $this->middleware('guest', ['only' => ['getLogin', 'login']]);
        $this->middleware('guard:standard,ldap', ['only' => ['login', 'logout']]);

        $this->socialAuthService = $socialAuthService;
        $this->redirectPath = url('/');
        $this->redirectAfterLogout = url('/login');
    }

    public function username()
    {
        return config('auth.method') === 'standard' ? 'email' : 'username';
    }

    /**
     * Get the needed authorization credentials from the request.
     */
    protected function credentials(Request $request)
    {
        return $request->only('username', 'email', 'password');
    }

    /**
     * Show the application login form.
     */
    public function getLogin(Request $request)
    {
        $socialDrivers = $this->socialAuthService->getActiveDrivers();
        $authMethod = config('auth.method');

        if ($request->has('email')) {
            session()->flashInput([
                'email' => $request->get('email'),
                'password' => (config('app.env') === 'demo') ? $request->get('password', '') : ''
            ]);
        }

        // Store the previous location for redirect after login
        $previous = url()->previous('');
        if ($previous && $previous !== url('/login') && setting('app-public')) {
            $isPreviousFromInstance = (strpos($previous, url('/')) === 0);
            if ($isPreviousFromInstance) {
                redirect()->setIntendedUrl($previous);
            }
        }

        return view('auth.login', [
          'socialDrivers' => $socialDrivers,
          'authMethod' => $authMethod,
        ]);
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);
        $username = $request->get($this->username());

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            Activity::logFailedLogin($username);
            return $this->sendLockoutResponse($request);
        }

        try {
            if ($this->attemptLogin($request)) {
                return $this->sendLoginResponse($request);
            }
        } catch (LoginAttemptException $exception) {
            Activity::logFailedLogin($username);
            return $this->sendLoginAttemptExceptionResponse($exception, $request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        Activity::logFailedLogin($username);
        return $this->sendFailedLoginResponse($request);
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        // Authenticate on all session guards if a likely admin
        if ($user->can('users-manage') && $user->can('user-roles-manage')) {
            $guards = ['standard', 'ldap', 'saml2'];
            foreach ($guards as $guard) {
                auth($guard)->login($user);
            }
        }

        Theme::dispatch(ThemeEvents::AUTH_LOGIN, auth()->getDefaultDriver(), $user);
        $this->logActivity(ActivityType::AUTH_LOGIN, $user);
        return redirect()->intended($this->redirectPath());
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $rules = ['password' => 'required|string'];
        $authMethod = config('auth.method');

        if ($authMethod === 'standard') {
            $rules['email'] = 'required|email';
        }

        if ($authMethod === 'ldap') {
            $rules['username'] = 'required|string';
            $rules['email'] = 'email';
        }

        $request->validate($rules);
    }

    /**
     * Send a response when a login attempt exception occurs.
     */
    protected function sendLoginAttemptExceptionResponse(LoginAttemptException $exception, Request $request)
    {
        if ($exception instanceof LoginAttemptEmailNeededException) {
            $request->flash();
            session()->flash('request-email', true);
        }

        if ($message = $exception->getMessage()) {
            $this->showWarningNotification($message);
        }

        return redirect('/login');
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ])->redirectTo('/login');
    }

    public static function showLoginForm()
    {
        return redirect()->route("login.neupass");
    }

    public function redirectToProvider()
    {
        $redirect_url=url("/");

        // Store the previous location for redirect after login
        $previous = url()->previous('');
        if ($previous && $previous !== route("login.neupass")) {
            $isPreviousFromInstance = (strpos($previous, url('/')) === 0);
            // prevent other sites from using our CAS
            if ($isPreviousFromInstance) {
                $redirect_url=$previous;
            }
        }

        return Socialite::driver('neupass')
                        ->redirectUrl(route("login.neupass.callback").'?retUrl='.$redirect_url)
                        ->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        try {
            $user = Socialite::driver('neupass')->user();
        } catch (CAS_AuthenticationException $exception) {
            dump($exception->getMessage());
            return null;
        }

        // do log in here
        $count=(array)DB::selectOne("select count(*) as count from users where stuid=?", [$user->getId()]);
        if ($count['count']===0) {
            $user_id=DB::table('users')->insertGetId([
                'name' => $user->getName(),
                'email' => $user->getId().'@stu.neu.edu.cn',
                'password' => bcrypt($user->getId().env('USER_PASSWORD_SEED')),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'email_confirmed' => 0,
                'slug' => Str::random(150),
                'stuid' => $user->getId()
            ]);
            DB::table('role_user')->insert([
                'user_id' => $user_id,
                'role_id' => setting('registration-role')
            ]);
        }
        $res=$this->guard()->attempt(
            [
                'stuid'=>$user->getId(),
                'password'=>$user->getId().env('USER_PASSWORD_SEED')
            ],
            false
        );
        $request->session()->regenerate();
        $this->clearLoginAttempts($request);

        return redirect($request->get("retUrl"));
    }
}
