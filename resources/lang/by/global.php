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
	'app_create' => 'Стварыць',
	'app_save' => 'Захаваць',
	'app_edit' => 'Рэдагаваць',
	'app_restore' => 'Аднавіць',
	'app_permadel' => 'Выдаліць назаўсёды',
	'app_all' => 'Усё',
	'app_trash' => 'Смецце',
	'app_list' => 'Спіс',
	'app_logout' => 'Выйсці',
	'app_add_new' => 'Дадаць новы',
	'app_are_you_sure' => 'Вы ўпэўнены?',
	'app_back_to_list' => 'Назад да спісу',
	'app_delete' => 'Выдаліць',
	'app_category' => 'Катэгорыя',
	'app_categories' => 'Катэгорыі',
	'app_sample_category' => 'Прыклад катэгорыі',
	'app_questions' => 'Пытанні',
	'app_question' => 'Пытанне',
	'app_answer' => 'Адказ',
	'app_sample_question' => 'Прыклад пытання',
	'app_sample_answer' => 'Прыклад адказу',
	'app_title' => 'Загаловак',
	'app_roles' => 'Ролі',
	'app_role' => 'Роля',
	'app_users' => 'Карыстальнікі',
	'app_user' => 'Карыстальнік',
	'app_name' => 'Імя',
	'app_email' => 'Імэйл',
	'app_password' => 'Пароль',
	'app_price' => 'Кошт',
	'app_email_greet' => 'Вітаем',
	'app_register' => 'Рэгістраваць',
	'app_registration' => 'Рэгістрацыя',
	'app_view' => 'Прагляд',
	'app_update' => 'Абнавіць',
	'app_no_entries_in_table' => 'Няма запісаў у табліцы',
	'app_dashboard' => 'Панель',
	'app_delete_selected' => 'Выдаліць абранае',
	'app_user_management' => 'Кіраванне карыстальнікамі',
	'app_address' => 'Адрэса',
	'app_first_name' => 'Імя',
	'app_last_name' => 'Прозвішча',
	'app_phone' => 'Тэлефон',
	'app_created_at' => 'Створана',
	'app_updated_at' => 'Абноўлена',
	'app_deleted_at' => 'Выдалена',
	'app_please_select' => 'Калі ласка, абярыце',
	'app_category_name' => 'Назва катэгорыі',
	'app_product_management' => 'Кіраванне таварамі',
	'app_products' => 'Тавары',
	'app_product_name' => 'Назва тавара',
	'app_content_management' => 'Кіраванне старонкамі',
	'app_text' => 'Тэкст',
	'app_dashboard_text' => 'Вы ўвайшлі ў сістэму!',
	'app_forgot_password' => 'Забылі пароль?',
	'app_remember_me' => 'Памятаць мяне',
	'app_login' => 'Увайсці',
	'app_change_password' => 'Змяніць пароль',
	'app_print' => 'Раздрукаваць',
	'app_description' => 'Апісаннне',
	'app_phone1' => 'Тэлефон 1',
	'app_phone2' => 'Тэлефон 2',
	'app_photo1' => 'Фота1',
	'app_photo2' => 'Фота2',
	'app_photo3' => 'Фота3',
	'app_calendar' => 'Каляндар',
	'app_notes' => 'Зацемки',
	'app_pages' => 'Старонки',
	'app_show' => 'Паказаць',
	'app_group_by' => 'Групаваць па',
	'app_faq_management' => 'Кіраванне FAQ',
	'app_administrator_can_create_other_users' => 'Адміністратар (можа ствараць карыстальнікаў)',
	'app_simple_user' => 'Звычайны карыстальнік',
	'app_remember_token' => 'Запомніць',
	'app_permissions' => 'Дазволы',
	'app_user_actions' => 'Дзеянні карыстальніка',
	'app_action' => 'Дзеянне',
	'app_time' => 'Час',
	'app_campaign' => 'Кампанія',
	'app_campaigns' => 'Кампаніі',
	'app_valid_from' => 'Дата пачатку',
	'app_valid_to' => 'Дата заканчэння',
	'app_discount_amount' => 'Сума зніжкі',
	'app_discount_percent' => 'Працэнт зніжкі',
	'app_redeem_time' => 'Час выкупу',
	'app_website' => 'Сайт',
	'app_contact_management' => 'Кіраванне кантактамі',
	'app_contacts' => 'Кантакты',
	'app_company' => 'Кампанія',
	'app_tags' => 'Цэтлікі',
	'app_tag' => 'Цэтлік',
	'app_statuses' => 'Статусы',
	'app_status' => 'Статус',
	'app_attachment' => 'Далучанае',
	'app_assigned_to' => 'Прызначана',
	'app_axis' => 'Вось',
	'app_is_created' => 'створана',
	'app_is_updated' => 'абноўлена',
	'app_is_deleted' => 'выдалена',
	'app_notifications' => 'Авесткі',
	'app_notify_user' => 'Абвясціць карыстальніка',
	'app_create_new_notification' => 'Стварыць абвестку',
	'app_messages' => 'Паведамленні',
	'app_you_have_no_messages' => 'Вы не маеце паведамленняў',
	'app_all_messages' => 'Усе паведамленні',
	'app_new_message' => 'Новае паведамленне',
	'app_outbox' => 'Зыходныя',
	'app_inbox' => 'Уваходныя',
	'app_recipient' => 'Атрымальнік',
	'app_subject' => 'Тэма',
	'app_message' => 'Паведамленне',
	'app_send' => 'Даслаць',
	'app_reply' => 'Адказаць',
	'app_calendar_sources' => 'Крыніцы каляндара',
	'app_country' => 'Краіна',
	'app_client_status' => 'Статус кліента',
	'app_clients' => 'Кліенты',
	'app_currencies' => 'Валюты',
	'app_main_currency' => 'Галоўная валюта',
	'app_documents' => 'Дакументы',
	'app_file' => 'Файл',
	'app_client' => 'Кліент',
	'app_start_date' => 'Дата пачатку',
	'app_currency' => 'Валюта',
	'app_current_password' => 'Бягучы пароль',
	'app_new_password' => 'Новы пароль',
	'app_password_confirm' => 'Падцверджанне пароля',
	'app_copy' => 'Капіяваць',
	'app_colvis' => 'Бачнасць калонак',
	'app_reset_password' => 'Скінуць пароль',
	'app_email_regards' => 'З павагаю',
	'app_confirm_password' => 'Падцвердзіце пароль',
	'app_custom_controller_index' => 'Карыстацкі індэкс кантролера.',
	'app_action_model' => 'Мадэль дзеяння',
	'app_action_id' => 'Id дзеяння',
	'app_coupons_amount' => 'Сума купонаў',
	'app_coupons' => 'Купоны',
	'app_code' => 'Код',
	'app_coupon_management' => 'Кіраванне куупонамі',
	'app_time_management' => 'Кіраванне часам',
	'app_projects' => 'Праекты',
	'app_reports' => 'Справаздачы',
	'app_companies' => 'Кампаніі',
	'app_company_name' => 'Назва кампаніі',
	'app_skype' => 'Skype',
	'app_photo' => 'Фота (макс 8мб)',
	'app_task_management' => 'Кіраванне задачамі',
	'app_tasks' => 'Задачы',
	'app_due_date' => 'Тэрмін',
	'app_slug' => 'Псеўданім',
	'app_excerpt' => 'Вытрымка',
	'app_featured_image' => 'Спадарожны малюнак',
	'app_chart_type' => 'Тып дыяграмы',
	'app_select_users_placeholder' => 'Калі ласка, абярыце аднаго карыстальніка',
	'app_csv' => 'CSV',
	'app_excel' => 'Excel',
	'app_pdf' => 'PDF',
	'app_if_you_are_having_trouble' => 'Калі ў вас узніклі праблемы, націснуўшы на',
	'app_copy_paste_url_bellow' => 'кнопку, скапіруйце і ўстаўце URL ніжэй у ваш вэб-браўзэр:',
	'app_not_approved_title' => 'Ваш акаўнт не падцверджаны',
	'global_title' => 'E-Auction',
];