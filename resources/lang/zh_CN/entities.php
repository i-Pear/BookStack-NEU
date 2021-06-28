<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => '最近创建',
    'recently_created_pages' => '最近创建的页面',
    'recently_updated_pages' => '最近更新的页面',
    'recently_created_chapters' => '最近创建的章节',
    'recently_created_books' => '最近创建的图书',
    'recently_created_shelves' => '最近创建的书架',
    'recently_update' => '最近更新',
    'recently_viewed' => '最近查看',
    'recent_activity' => '近期活动',
    'create_now' => '立刻创建',
    'revisions' => '修订历史',
    'meta_revision' => '版本号 #:revisionCount',
    'meta_created' => '创建于 :timeLength',
    'meta_created_name' => '由 :user 创建于 :timeLength',
    'meta_updated' => '更新于 :timeLength',
    'meta_updated_name' => '由 :user 更新于 :timeLength',
    'meta_owned_name' => '拥有者 :user',
    'entity_select' => '实体选择',
    'images' => '图片',
    'my_recent_drafts' => '我最近的草稿',
    'my_recently_viewed' => '我最近看过',
    'my_most_viewed_favourites' => '我浏览最多的收藏',
    'my_favourites' => '我的收藏',
    'no_pages_viewed' => '您尚未查看任何页面',
    'no_pages_recently_created' => '最近没有页面被创建',
    'no_pages_recently_updated' => '最近没有页面被更新',
    'export' => '导出',
    'export_html' => '网页文件',
    'export_pdf' => 'PDF文件',
    'export_text' => '纯文本文件',
    'export_md' => 'Markdown 文件',

    // Permissions and restrictions
    'permissions' => '权限',
    'permissions_intro' => '本设置优先于每个用户角色本身所具有的权限。',
    'permissions_enable' => '启用自定义权限',
    'permissions_save' => '保存权限',
    'permissions_owner' => '拥有者',

    // Search
    'search_results' => '搜索结果',
    'search_total_results_found' => '共找到了:count个结果',
    'search_clear' => '清除搜索',
    'search_no_pages' => '没有找到相匹配的页面',
    'search_for_term' => '“:term”的搜索结果',
    'search_more' => '更多结果',
    'search_advanced' => '高级搜索',
    'search_terms' => '搜索关键词',
    'search_content_type' => '种类',
    'search_exact_matches' => '精确匹配',
    'search_tags' => '标签搜索',
    'search_options' => '选项',
    'search_viewed_by_me' => '我看过的',
    'search_not_viewed_by_me' => '我没看过的',
    'search_permissions_set' => '权限设置',
    'search_created_by_me' => '我创建的',
    'search_updated_by_me' => '我更新的',
    'search_owned_by_me' => '我拥有的',
    'search_date_options' => '日期选项',
    'search_updated_before' => '在此之前更新',
    'search_updated_after' => '在此之后更新',
    'search_created_before' => '在此之前创建',
    'search_created_after' => '在此之后创建',
    'search_set_date' => '设置日期',
    'search_update' => '只显示更新操作',

    // Shelves
    'shelf' => '书架',
    'shelves' => '书架',
    'x_shelves' => ':count 书架|:count 书架',
    'shelves_long' => '书架',
    'shelves_empty' => '当前未创建书架',
    'shelves_create' => '创建新书架',
    'shelves_popular' => '热门书架',
    'shelves_new' => '新书架',
    'shelves_new_action' => '新书架',
    'shelves_popular_empty' => '最热门的书架',
    'shelves_new_empty' => '最新创建的书架',
    'shelves_save' => '保存书架',
    'shelves_books' => '书籍已在此书架里',
    'shelves_add_books' => '将书籍加入此书架',
    'shelves_drag_books' => '拖动图书将其添加到此书架',
    'shelves_empty_contents' => '这个书架没有分配图书',
    'shelves_edit_and_assign' => '编辑书架以分配图书',
    'shelves_edit_named' => '编辑书架 :name',
    'shelves_edit' => '编辑书架',
    'shelves_delete' => '删除书架',
    'shelves_delete_named' => '删除书架 :name',
    'shelves_delete_explain' => "此操作将删除书架 ':name'。 其中包含的图书不会被删除。",
    'shelves_delete_confirmation' => '您确定要删除此书架吗？',
    'shelves_permissions' => '书架权限',
    'shelves_permissions_updated' => '书架权限已更新',
    'shelves_permissions_active' => '书架权限激活',
    'shelves_copy_permissions_to_books' => '将权限复制到图书',
    'shelves_copy_permissions' => '复制权限',
    'shelves_copy_permissions_explain' => '这会将此书架的当前权限设置应用于其中包含的所有图书。 在激活之前，请确保已保存对此书架权限的任何更改。',
    'shelves_copy_permission_success' => '书架权限复制到图书 :count ',

    // Books
    'book' => '图书',
    'books' => '图书',
    'x_books' => ':count本书',
    'books_empty' => '不存在已创建的书',
    'books_popular' => '热门图书',
    'books_recent' => '最近的书',
    'books_new' => '新书',
    'books_new_action' => '新书',
    'books_popular_empty' => '最受欢迎的图书将出现在这里。',
    'books_new_empty' => '最近创建的图书将出现在这里。',
    'books_create' => '创建图书',
    'books_delete' => '删除图书',
    'books_delete_named' => '删除图书「:bookName」',
    'books_delete_explain' => '这将删除图书「:bookName」。所有的章节和页面都会被删除。',
    'books_delete_confirmation' => '您确定要删除此图书吗？',
    'books_edit' => '编辑图书',
    'books_edit_named' => '编辑图书「:bookName」',
    'books_form_book_name' => '书名',
    'books_save' => '保存图书',
    'books_permissions' => '图书权限',
    'books_permissions_updated' => '图书权限已更新',
    'books_empty_contents' => '本书目前没有页面或章节。',
    'books_empty_create_page' => '创建页面',
    'books_empty_sort_current_book' => '排序当前图书',
    'books_empty_add_chapter' => '添加章节',
    'books_permissions_active' => '有效的图书权限',
    'books_search_this' => '搜索这本书',
    'books_navigation' => '图书导航',
    'books_sort' => '排序图书内容',
    'books_sort_named' => '排序图书「:bookName」',
    'books_sort_name' => '按名称排序',
    'books_sort_created' => '创建时间排序',
    'books_sort_updated' => '按更新时间排序',
    'books_sort_chapters_first' => '章节正序',
    'books_sort_chapters_last' => '章节倒序',
    'books_sort_show_other' => '显示其他图书',
    'books_sort_save' => '保存新顺序',

    // Chapters
    'chapter' => '章节',
    'chapters' => '章节',
    'x_chapters' => ':count个章节',
    'chapters_popular' => '热门章节',
    'chapters_new' => '新章节',
    'chapters_create' => '创建章节',
    'chapters_delete' => '删除章节',
    'chapters_delete_named' => '删除章节「:chapterName」',
    'chapters_delete_explain' => '这将删除名为“:chapterName”的章节。本章节中存在的所有页面也将被删除。',
    'chapters_delete_confirm' => '您确定要删除此章节吗？',
    'chapters_edit' => '编辑章节',
    'chapters_edit_named' => '编辑章节「:chapterName」',
    'chapters_save' => '保存章节',
    'chapters_move' => '移动章节',
    'chapters_move_named' => '移动章节「:chapterName」',
    'chapter_move_success' => '章节移动到「:bookName」',
    'chapters_permissions' => '章节权限',
    'chapters_empty' => '本章目前没有页面。',
    'chapters_permissions_active' => '有效的章节权限',
    'chapters_permissions_success' => '章节权限已更新',
    'chapters_search_this' => '从本章节搜索',

    // Pages
    'page' => '页面',
    'pages' => '页面',
    'x_pages' => ':count个页面',
    'pages_popular' => '热门页面',
    'pages_new' => '新页面',
    'pages_attachments' => '附件',
    'pages_navigation' => '页面导航',
    'pages_delete' => '删除页面',
    'pages_delete_named' => '删除页面“:pageName”',
    'pages_delete_draft_named' => '删除草稿页面“:pageName”',
    'pages_delete_draft' => '删除草稿页面',
    'pages_delete_success' => '页面已删除',
    'pages_delete_draft_success' => '草稿页面已删除',
    'pages_delete_confirm' => '您确定要删除此页面吗？',
    'pages_delete_draft_confirm' => '您确定要删除此草稿页面吗？',
    'pages_editing_named' => '正在编辑页面“:pageName”',
    'pages_edit_draft_options' => '草稿选项',
    'pages_edit_save_draft' => '保存草稿',
    'pages_edit_draft' => '编辑页面草稿',
    'pages_editing_draft' => '正在编辑草稿',
    'pages_editing_page' => '正在编辑页面',
    'pages_edit_draft_save_at' => '草稿保存于 ',
    'pages_edit_delete_draft' => '删除草稿',
    'pages_edit_discard_draft' => '放弃草稿',
    'pages_edit_set_changelog' => '更新说明',
    'pages_edit_enter_changelog_desc' => '输入对您所做更改的简要说明',
    'pages_edit_enter_changelog' => '输入更新说明',
    'pages_save' => '保存页面',
    'pages_title' => '页面标题',
    'pages_name' => '页面名',
    'pages_md_editor' => '编者',
    'pages_md_preview' => '预览',
    'pages_md_insert_image' => '插入图片',
    'pages_md_insert_link' => '插入实体链接',
    'pages_md_insert_drawing' => '插入图表',
    'pages_not_in_chapter' => '本页面不在某章节中',
    'pages_move' => '移动页面',
    'pages_move_success' => '页面已移动到「:parentName」',
    'pages_copy' => '复制页面',
    'pages_copy_desination' => '复制目的地',
    'pages_copy_success' => '页面复制完成',
    'pages_permissions' => '页面权限',
    'pages_permissions_success' => '页面权限已更新',
    'pages_revision' => '修订',
    'pages_revisions' => '页面修订',
    'pages_revisions_named' => '“:pageName”页面修订',
    'pages_revision_named' => '“:pageName”页面修订',
    'pages_revision_restored_from' => '从 #:id; :summary 恢复',
    'pages_revisions_created_by' => '创建者',
    'pages_revisions_date' => '修订日期',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => '修订 #:id',
    'pages_revisions_numbered_changes' => '修改 #:id ',
    'pages_revisions_changelog' => '更新说明',
    'pages_revisions_changes' => '说明',
    'pages_revisions_current' => '当前版本',
    'pages_revisions_preview' => '预览',
    'pages_revisions_restore' => '恢复',
    'pages_revisions_none' => '此页面没有修订',
    'pages_copy_link' => '复制链接',
    'pages_edit_content_link' => '编辑内容',
    'pages_permissions_active' => '有效的页面权限',
    'pages_initial_revision' => '初始发布',
    'pages_initial_name' => '新页面',
    'pages_editing_draft_notification' => '您正在编辑在 :timeDiff 内保存的草稿.',
    'pages_draft_edited_notification' => '此后，此页面已经被更新，建议您放弃此草稿。',
    'pages_draft_edit_active' => [
        'start_a' => ':count位用户正在编辑此页面',
        'start_b' => '用户“:userName”已经开始编辑此页面',
        'time_a' => '自页面上次更新以来',
        'time_b' => '在最近:minCount分钟',
        'message' => ':time，:start。注意不要覆盖对方的更新！',
    ],
    'pages_draft_discarded' => '草稿已丢弃，编辑器已更新到当前页面内容。',
    'pages_specific' => '具体页面',
    'pages_is_template' => '页面模板',

    // Editor Sidebar
    'page_tags' => '页面标签',
    'chapter_tags' => '章节标签',
    'book_tags' => '图书标签',
    'shelf_tags' => '书架标签',
    'tag' => '标签',
    'tags' =>  '标签',
    'tag_name' =>  '标签名称',
    'tag_value' => '标签值 (Optional)',
    'tags_explain' => "添加一些标签以更好地对您的内容进行分类。\n您可以为标签分配一个值，以进行更深入的组织。",
    'tags_add' => '添加另一个标签',
    'tags_remove' => '删除此标签',
    'attachments' => '附件',
    'attachments_explain' => '上传一些文件或附加一些链接显示在您的网页上。这些在页面的侧边栏中可见。',
    'attachments_explain_instant_save' => '这里的更改将立即保存。',
    'attachments_items' => '附加项目',
    'attachments_upload' => '上传文件',
    'attachments_link' => '附加链接',
    'attachments_set_link' => '设置链接',
    'attachments_delete' => '您确定要删除此附件吗？',
    'attachments_dropzone' => '删除文件或点击此处添加文件',
    'attachments_no_files' => '尚未上传文件',
    'attachments_explain_link' => '如果您不想上传文件，则可以附加链接，这可以是指向其他页面的链接，也可以是指向云端文件的链接。',
    'attachments_link_name' => '链接名',
    'attachment_link' => '附件链接',
    'attachments_link_url' => '链接到文件',
    'attachments_link_url_hint' => '网站或文件的网址',
    'attach' => '附加',
    'attachments_insert_link' => '将附加链接添加到页面',
    'attachments_edit_file' => '编辑文件',
    'attachments_edit_file_name' => '文件名',
    'attachments_edit_drop_upload' => '删除文件或点击这里上传并覆盖',
    'attachments_order_updated' => '附件顺序已更新',
    'attachments_updated_success' => '附件信息已更新',
    'attachments_deleted' => '附件已删除',
    'attachments_file_uploaded' => '附件上传成功',
    'attachments_file_updated' => '附件更新成功',
    'attachments_link_attached' => '链接成功附加到页面',
    'templates' => '模板',
    'templates_set_as_template' => '设置为模板',
    'templates_explain_set_as_template' => '您可以将此页面设置为模板，以便在创建其他页面时利用其内容。 如果其他用户对此页面具有查看权限，则将可以使用此模板。',
    'templates_replace_content' => '替换页面内容',
    'templates_append_content' => '附加到页面内容',
    'templates_prepend_content' => '追加到页面内容',

    // Profile View
    'profile_user_for_x' => '来这里:time了',
    'profile_created_content' => '已创建内容',
    'profile_not_created_pages' => ':userName尚未创建任何页面',
    'profile_not_created_chapters' => ':userName尚未创建任何章节',
    'profile_not_created_books' => ':userName尚未创建任何图书',
    'profile_not_created_shelves' => ':userName 尚未创建任何书架',

    // Comments
    'comment' => '评论',
    'comments' => '评论',
    'comment_add' => '添加评论',
    'comment_placeholder' => '在这里评论',
    'comment_count' => '{0} 无评论|[1,*] :count条评论',
    'comment_save' => '保存评论',
    'comment_saving' => '正在保存评论...',
    'comment_deleting' => '正在删除评论...',
    'comment_new' => '新评论',
    'comment_created' => '评论于 :createDiff',
    'comment_updated' => '更新于 :updateDiff (:username)',
    'comment_deleted_success' => '评论已删除',
    'comment_created_success' => '评论已添加',
    'comment_updated_success' => '评论已更新',
    'comment_delete_confirm' => '您确定要删除这条评论？',
    'comment_in_reply_to' => '回复 :commentId',

    // Revision
    'revision_delete_confirm' => '您确定要删除此修订版吗？',
    'revision_restore_confirm' => '您确定要恢复到此修订版吗？恢复后原有内容将会被替换。',
    'revision_delete_success' => '修订删除',
    'revision_cannot_delete_latest' => '无法删除最新版本。'
];
