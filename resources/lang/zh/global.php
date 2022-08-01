<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',			'approved' => 'Approved',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Time',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
		'faq-management' => [		'title' => 'FAQ Management',		'fields' => [		],	],
		'faq-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Category',		],	],
		'faq-questions' => [		'title' => 'Questions',		'fields' => [			'category' => 'Category',			'question-text' => 'Question',			'answer-text' => 'Answer',		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [			'text' => 'Text',			'link' => 'Link',			'users' => 'Users',		],	],
		'content-management' => [		'title' => 'Content management',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Category',			'slug' => 'Slug',		],	],
		'content-tags' => [		'title' => 'Tags',		'fields' => [			'title' => 'Tag',			'slug' => 'Slug',		],	],
		'content-pages' => [		'title' => 'Pages',		'fields' => [			'title' => 'Title',			'category-id' => 'Categories',			'tag-id' => 'Tags',			'page-text' => 'Text',			'excerpt' => 'Excerpt',			'featured-image' => 'Featured image',		],	],
		'settings' => [		'title' => 'Settings',		'fields' => [		],	],
		'site-settings' => [		'title' => 'Site settings',		'fields' => [			'site-title' => 'Site title',			'admin-email' => 'Admin email',			'your-copyright-message' => 'Your copyright message',			'delete-auctions-older-than' => 'Delete auctions older than',			'created-by' => 'Created by',			'results-shown-per-page' => 'Results shown per page',			'users-confirmation-method' => 'Users confirmation method',			'default-country' => 'Default country',			'default-language' => 'Default language',		],	],
		'auction-settings' => [		'title' => 'Auction settings',		'fields' => [			'allow-custom-increments' => 'Allow custom increments',			'hours-until-auction-ends-count-down' => 'Hours until auction ends count down',			'enable-featured-items' => 'Enable featured items',			'enable-auctions-auto-extension' => 'Enable auctions auto extension',			'extend-auction-by' => 'Extend auction by',			'during-the-last' => 'During the last',			'activate-picture-gallery' => 'Activate picture gallery',			'max-number-of-pictures' => 'Max number of pictures',			'max-pictures-size' => 'Max pictures size',			'thumbnails-size' => 'Thumbnails size',			'created-by' => 'Created by',			'bidder-privacy' => 'Activate Bidder Privacy?',		],	],
		'currency-settings' => [		'title' => 'Currency settings',		'fields' => [			'site-currency' => 'Site currency',			'money-format' => 'Money format',			'decimal-digits' => 'Decimal digits',			'symbol-position' => 'Symbol position',			'created-by' => 'Created by',		],	],
		'time-settings' => [		'title' => 'Time settings',		'fields' => [			'date-format' => 'Date format',			'time-zone' => 'Time zone',			'created-by' => 'Created by',		],	],
		'seo-settings' => [		'title' => 'Seo settings',		'fields' => [			'meta-description-tag' => 'Meta description tag',			'meta-keywords-tag' => 'Meta keywords tag',			'created-by' => 'Created by',		],	],
		'fee-settings' => [		'title' => 'Fee settings',		'fields' => [		],	],
		'payment-gateways' => [		'title' => 'Payment gateways',		'fields' => [		],	],
		'paypal' => [		'title' => 'Paypal',		'fields' => [			'is-enabled' => 'Enable/Disable',			'paypal-email-address' => 'Paypal email address',			'mode' => 'Mode',			'created-by' => 'Created by',		],	],
		'categories' => [		'title' => 'Categories',		'fields' => [		],	],
		'category' => [		'title' => 'Category',		'fields' => [			'category' => 'Category',			'created-by' => 'Created by',		],	],
		'sub-catogories' => [		'title' => 'Sub catogories',		'fields' => [			'category' => 'Category ',			'sub-category' => 'Sub category',			'created-by' => 'Created by',		],	],
		'auctions' => [		'title' => 'Auctions',		'fields' => [		],	],
		'create' => [		'title' => 'Create',		'fields' => [			'title' => 'Title',			'category' => 'Category id',			'sub-category' => 'Sub category ',			'description' => 'Description',			'start-date' => 'Start date',			'end-date' => 'End date',			'minimum-bid' => 'Minimum bid',			'reserve-price' => 'Reserve price',			'buy-now-price' => 'Buy now price',			'bid-increment' => 'Bid increment',			'shipping-conditions' => 'Shipping conditions',			'international-shipping' => 'International shipping',			'shipping-terms' => 'Shipping terms',			'make-featured' => 'Make featured',			'status' => 'Status',			'created-by' => 'Created by',			'user' => 'Seller ID',			'images' => 'Images',		],	],
		'testmonies' => [		'title' => 'Testmonies',		'fields' => [		],	],
		'testmony' => [		'title' => 'Testmony',		'fields' => [			'user' => 'User id',			'testmony' => 'Testmony',			'status' => 'Status',			'created-by' => 'Created by',		],	],
		'social-logins' => [		'title' => 'Social logins',		'fields' => [			'facebook-client-id' => 'Facebook client id',			'facebook-client-secret' => 'Facebook client secret',			'facebook-redirect-url' => 'Facebook redirect url',			'facebook-login-enable' => 'Facebook login enable',			'google-client-id' => 'Google client id',			'google-client-secret' => 'Google client secret',			'google-redirect-url' => 'Google redirect url',			'google-login-enable' => 'Google login enable ?',			'created-by' => 'Created by',		],	],
		'email-settings' => [		'title' => 'Email settings',		'fields' => [		],	],
		'templates' => [		'title' => 'Templates',		'fields' => [			'key' => 'Key',			'type' => 'Type',			'subject' => 'Subject',			'from-email' => 'From email',			'from-name' => 'From name',			'content' => 'Content',			'created-by' => 'Created by',		],	],
		'news-letter' => [		'title' => 'News letter',		'fields' => [		],	],
		'create-letter' => [		'title' => 'Create letter',		'fields' => [			'to' => 'To',			'title' => 'Title',			'message' => 'Message',			'created-by' => 'Created by',		],	],
		'social-networks' => [		'title' => 'Social networks',		'fields' => [		],	],
		'location-master' => [		'title' => 'Location master',		'fields' => [		],	],
		'countries' => [		'title' => 'Countries',		'fields' => [			'shortcode' => 'Shortcode',			'title' => 'Title',			'created-by' => 'Created by',		],	],
		'states' => [		'title' => 'States',		'fields' => [			'state' => 'State',			'country' => 'Country',			'created-by' => 'Created by',		],	],
		'cities' => [		'title' => 'Cities',		'fields' => [			'city' => 'City',			'country' => 'Country',			'state' => 'State',			'created-by' => 'Created by',		],	],
	'app_create' => '新增',
	'app_save' => '儲存',
	'app_edit' => '編輯',
	'app_restore' => '還原',
	'app_permadel' => '永久刪除',
	'app_all' => '所有',
	'app_trash' => '垃圾箱',
	'app_view' => '檢視',
	'app_update' => '更新',
	'app_list' => '列表',
	'app_no_entries_in_table' => '沒有紀錄',
	'app_logout' => '登出',
	'app_add_new' => '新增',
	'app_are_you_sure' => '確定?',
	'app_back_to_list' => '返回',
	'app_dashboard' => '管理區',
	'app_delete' => '刪除',
	'app_delete_selected' => '刪除選擇',
	'app_category' => '類別',
	'app_categories' => '類別',
	'app_sample_category' => '示範類別',
	'app_questions' => '問題',
	'app_question' => '問題',
	'app_answer' => '答案',
	'app_sample_question' => '示範問題',
	'app_sample_answer' => '示範答案',
	'app_faq_management' => '常見問題管理',
	'app_administrator_can_create_other_users' => '系統管理員(可以新增其他用戶)',
	'app_simple_user' => '普通用戶',
	'app_roles' => '角式',
	'app_role' => '角式',
	'app_user_management' => '會友管理',
	'app_users' => '會友',
	'app_user' => '會友',
	'app_name' => '名稱',
	'app_email' => '電子郵件',
	'app_password' => '密碼',
	'app_permissions' => '權限',
	'app_user_actions' => '用戶操作',
	'app_action' => '操作',
	'app_time' => '時間',
	'app_campaign' => '運動',
	'app_campaigns' => '運動',
	'app_description' => '簡介',
	'app_edit_calendar_source' => '編輯日曆來源',
	'app_client_management' => '客戶管理',
	'app_client_management_settings' => '客戶管理設定',
	'app_country' => '國家',
	'app_client_status' => '客戶狀態',
	'app_clients' => '客戶',
	'app_client_statuses' => '客戶狀態',
	'app_currencies' => '貨幣',
	'app_main_currency' => '主要貨幣',
	'app_documents' => '文件',
	'app_file' => '檔案',
	'app_income_source' => '收入來源',
	'app_income_sources' => '收入來源',
	'app_fee_percent' => '費用百分比',
	'app_note_text' => '注意文本',
	'app_client' => '客戶',
	'app_start_date' => '開始日期',
	'app_budget' => '預算',
	'app_project_status' => '項目狀態',
	'app_project_statuses' => '項目狀態',
	'app_transactions' => '交易',
	'app_transaction_types' => '交易類別',
	'app_transaction_type' => '交易類別',
	'app_transaction_date' => '交易日期',
	'app_currency' => '貨幣',
	'app_current_password' => '現時密碼',
	'app_new_password' => '新密碼',
	'app_password_confirm' => '新確認密碼',
	'app_dashboard_text' => '您已經登入!',
	'app_forgot_password' => '忘記密碼?',
	'app_remember_me' => '記住我',
	'app_login' => '登入',
	'app_change_password' => '更改密碼',
	'app_csv' => 'CSV',
	'app_print' => '列印',
	'app_excel' => 'Excel',
	'app_copy' => '複制',
	'app_pdf' => 'PDF',
	'app_reset_password' => '重設密碼',
	'app_reset_password_woops' => '<strong>噢!</strong> 錯誤輸入...',
	'app_email_line1' => '您收到此電子郵件是因為我們收到了您的帳戶的密碼重設請求。',
	'app_email_line2' => '如果您沒有要求重設密碼，則不需要採取進一步的操作。',
	'app_email_greet' => '您好',
	'app_confirm_password' => '確認密碼',
	'app_if_you_are_having_trouble' => '如果您在遇到問題, 請點擊',
	'app_please_select' => '請選擇',
	'app_register' => '註冊',
	'app_registration' => '註冊',
	'app_not_approved_title' => '您未獲授權',
	'app_not_approved_p' => '您的帳戶尚未獲批。 請耐心等待，稍後再試。',
	'app_there_were_problems_with_input' => '輸入錯誤',
	'app_whoops' => '噢!',
	'app_csvImport' => 'CSV匯入',
	'app_csv_file_to_import' => 'CSV檔案匯入',
	'app_parse_csv' => '貼上CSV',
	'app_import_data' => '匯入數據',
	'app_imported_rows_to_table' => '已匯入:rows數據',
	'app_valid_from' => '有效期從',
	'app_valid_to' => '有效期至',
	'app_discount_amount' => '折扣（固定）',
	'app_discount_percent' => '折扣（百分比）',
	'app_coupons_amount' => '優惠劵面值',
	'app_coupons' => '優惠劵',
	'app_code' => '編號',
	'app_redeem_time' => '換領時間',
	'app_coupon_management' => '優惠劵管理',
	'app_time_management' => '時間管理',
	'app_reports' => '報表',
	'app_work_type' => '工作類型',
	'app_work_types' => '工作類型',
	'app_project' => '項目',
	'app_start_time' => '開始時間',
	'app_end_time' => '結束時間',
	'app_expense_category' => '支出分類',
	'app_expense_categories' => '支出分類',
	'app_expense_management' => '支出管理',
	'app_expenses' => '支出',
	'app_expense' => '支出',
	'app_entry_date' => '輸入日期',
	'app_amount' => '數',
	'app_income_categories' => '收入類別',
	'app_monthly_report' => '月結單',
	'app_companies' => '公司',
	'app_company_name' => '公司名稱',
	'app_address' => '地址',
	'app_website' => '網站',
	'app_contact_management' => '聯絡管理',
	'app_contacts' => '聯絡',
	'app_company' => '公司',
	'app_first_name' => '名字',
	'app_last_name' => '姓氏',
	'app_phone' => '電話',
	'app_phone1' => '圖片1',
	'app_phone2' => '圖片2',
	'app_skype' => 'Skype',
	'app_photo' => '照片（8mb或以下）',
	'app_category_name' => '分類名稱',
	'app_product_management' => '產品管理',
	'app_products' => '產品',
	'app_product_name' => '產品名稱',
	'app_price' => '價錢',
	'app_tags' => '標籤',
	'app_tag' => '標籤',
	'app_photo1' => '圖片1',
	'app_photo2' => '圖片2',
	'app_photo3' => '圖片3',
	'app_calendar' => '日曆',
	'app_statuses' => '狀態',
	'app_task_management' => '任務管理',
	'app_tasks' => '任務',
	'app_status' => '狀態',
	'app_attachment' => '附件',
	'app_due_date' => '限期',
	'app_assigned_to' => '分配給',
	'app_assets' => '資產',
	'app_asset' => '資產',
	'app_serial_number' => '序號',
	'app_location' => '位置',
	'app_locations' => '位置',
	'app_assigned_user' => '分配（用戶）',
	'app_notes' => '筆記',
	'app_assets_history' => '資產歷史',
	'app_assets_management' => '資產管理',
	'app_slug' => '人性化連結',
	'app_content_management' => '文章管理',
	'app_text' => '文字',
	'app_excerpt' => '內容',
	'app_featured_image' => '圖片',
	'app_pages' => '頁',
	'app_show' => '顯示',
	'app_create_new_report' => '新增報告',
	'app_no_reports_yet' => '沒有報告',
	'app_created_at' => '新增日期：',
	'app_updated_at' => '修改日期：',
	'app_deleted_at' => '刪除日期：',
	'app_change_notifications_field_1_label' => '寄出通知',
	'app_select_users_placeholder' => '請選擇其中一個用戶',
	'app_is_created' => '新增版面',
	'app_is_updated' => '修改版面',
	'app_is_deleted' => '刪除版面',
	'app_notifications' => '通知',
	'app_notify_user' => '通知用戶',
	'app_create_new_notification' => '新增通知',
	'app_stripe_transactions' => 'Stripe交易',
	'app_upgrade_to_premium' => '升级至高級版',
	'app_messages' => '訊息',
	'app_you_have_no_messages' => '您沒有任何訊息!',
	'app_all_messages' => '所有訊息',
	'app_new_message' => '新訊息',
	'app_outbox' => '寄件夾',
	'app_inbox' => '收件夾',
	'app_recipient' => '收件者',
	'app_subject' => '主旨',
	'app_message' => '訊息',
	'app_send' => '寄出',
	'app_reply' => '回覆',
	'app_calendar_sources' => '日曆來源',
	'app_new_calendar_source' => '新增日曆來源',
	'app_create_new_calendar_source' => '新增日曆來源',
	'global_title' => 'E-Auction',
];