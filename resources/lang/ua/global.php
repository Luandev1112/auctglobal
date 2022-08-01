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
	'app_forgot_password' => 'Забули пароль?',
	'app_login' => 'Увійти',
	'app_change_password' => 'Змінити пароль',
	'app_print' => 'Друк',
	'app_copy' => 'Скопіювати',
	'app_pdf' => 'PDF',
	'app_email_greet' => 'Вітаємо',
	'app_email_regards' => 'С повагою',
	'app_confirm_password' => 'Підтвердіть пароль',
	'app_please_select' => 'Будь-ласка, веберіть',
	'app_create' => 'Створити',
	'app_save' => 'Зберегти',
	'app_edit' => 'Редагувати',
	'app_all' => 'Усі',
	'app_trash' => 'Кошик',
	'app_view' => 'Перегляд',
	'app_update' => 'Оновити',
	'app_list' => 'Список',
	'app_no_entries_in_table' => 'Немає даних',
	'app_logout' => 'Вихід',
	'app_add_new' => 'Додати',
	'app_are_you_sure' => 'Ви впевнені?',
	'app_back_to_list' => 'Назад до списку',
	'app_dashboard' => 'Панель управління',
	'app_delete' => 'Видалити',
	'app_delete_selected' => 'Видалити помічені',
	'app_category' => 'Категорія',
	'app_categories' => 'Категорії',
	'app_sample_category' => 'Приклад категорії',
	'app_questions' => 'Запитання',
	'app_question' => 'Запитання',
	'app_answer' => 'Відповідь',
	'app_sample_question' => 'Приклад запитання',
	'app_sample_answer' => 'Приклад відповіді',
	'app_faq_management' => 'Менеджер FAQ',
	'app_users' => 'Користувачі',
	'app_user' => 'Користувач',
	'app_name' => 'Ім\'я',
	'app_email' => 'Email',
	'app_password' => 'Пароль',
	'app_remember_token' => 'Запамятати токен',
	'app_permissions' => 'Дозволи',
	'app_action' => 'Дії',
	'app_time' => 'Час',
	'app_coupons' => 'Купони',
	'app_code' => 'Код',
	'app_client' => 'Клі',
	'app_start_date' => 'Дата початку',
	'app_budget' => 'Бюджет',
	'app_project_status' => 'Статус проекта',
	'app_project_statuses' => 'Статуси проектів',
	'app_transactions' => 'Транзакції',
	'app_transaction_types' => 'Тип транзакцій',
	'app_transaction_type' => 'Тип транзакції',
	'app_transaction_date' => 'Дата транзакції',
	'app_currency' => 'Валюта',
	'app_current_password' => 'Діючий пароль',
	'app_new_password' => 'Новий пароль',
	'app_password_confirm' => 'Новий пароль підтвердження',
	'app_dashboard_text' => 'Ви ввійшли в систему!',
	'app_remember_me' => 'Запам\'ятати мене',
	'app_csv' => 'CSV',
	'app_excel' => 'Excel',
	'app_colvis' => 'Видимість колонок',
	'app_reset_password' => 'Відновити пароль',
	'app_if_you_are_having_trouble' => 'Якщо виникли труднощі, натисніть',
	'app_copy_paste_url_bellow' => 'кнопку, скопіюйте посилання та вставте в адресний рядок браузера',
	'app_register' => 'Реєстрація',
	'app_registration' => 'Реєстрація',
	'app_not_approved_title' => 'Ви не затверджені',
	'app_not_approved_p' => 'Ваш обліковий запис все ще не схвалений адміністратором. Будь ласка, будьте терплячі та спробуйте зайти пізніше.',
	'app_restore' => 'Відновити',
	'app_permadel' => 'Видалити назавжди',
	'app_administrator_can_create_other_users' => 'Адмін (може створювати користувачів)',
	'app_simple_user' => 'Користувач',
	'app_user_management' => 'Менеджер користувачів',
	'app_projects' => 'Проекти',
	'app_reports' => 'Звіти',
	'app_project' => 'Проект',
	'app_end_time' => 'Час закінчення',
	'app_amount' => 'Ціна',
	'app_monthly_report' => 'Місячний звіт',
	'app_companies' => 'Компанії',
	'app_company_name' => 'Назва компанії',
	'app_address' => 'Адреса',
	'app_website' => 'Веб-сайт',
	'app_company' => 'Компанія',
	'app_first_name' => 'Ім\'я',
	'app_last_name' => 'Прізвище',
	'app_phone' => 'Телефон',
	'app_phone1' => 'Телефон 1',
	'app_phone2' => 'Телефон 2',
	'app_skype' => 'Скайп',
	'app_photo' => 'Фото (макс. 8мб)',
	'app_category_name' => 'Назва категорії',
	'app_products' => 'Товари',
	'app_product_name' => 'Назва товару',
	'app_price' => 'Ціна',
	'app_tags' => 'Теги',
	'app_tag' => 'Тег',
	'app_photo1' => 'Фото 1',
	'app_photo2' => 'Фото 2',
	'app_photo3' => 'Фото 3',
	'app_calendar' => 'Календар',
	'app_statuses' => 'Стутус',
	'app_task_management' => 'Менеджер завдань',
	'app_tasks' => 'Завдання',
	'app_status' => 'Статус',
	'app_attachment' => 'Вкладення',
	'app_text' => 'Текст',
	'app_pages' => 'Сторінки',
	'app_create_new_report' => 'Створити новий звіт',
	'app_created_at' => 'Створено',
	'app_updated_at' => 'Оновлено',
	'app_deleted_at' => 'Видалено',
	'app_upgrade_to_premium' => 'Оновити до Преміум',
	'app_messages' => 'Повідомлення',
	'app_you_have_no_messages' => 'У Вас немає повідомлень.',
	'app_all_messages' => 'Всі повідомлення',
	'app_new_message' => 'Нове повідомлення',
	'app_outbox' => 'Відправлені',
	'app_inbox' => 'Отримані',
	'app_recipient' => 'Одержувач',
	'app_subject' => 'Тема',
	'app_message' => 'Повідомлення',
	'app_send' => 'Відправити',
	'app_reply' => 'Відповідь',
	'app_client_management' => 'Управління клієнтами',
	'app_client_management_settings' => 'Налаштування клієнта',
	'app_country' => 'Країна',
	'app_client_status' => 'Статус клієнта',
	'app_clients' => 'Клієнти',
	'app_client_statuses' => 'Статуси клієнтів',
	'app_currencies' => 'Валюти',
	'app_main_currency' => 'Основна валюта',
	'app_documents' => 'Документи',
	'app_file' => 'Файл',
	'app_income_source' => 'Джерело доходу',
	'app_income_sources' => 'Джерела доходів',
	'app_fee_percent' => 'Комісійні відсотки',
	'app_note_text' => 'Текст примітки',
	'app_reset_password_woops' => '<strong>Оце ти видав!</strong> Є проблеми з введенням:',
	'app_email_line1' => 'Ви отримуєте цей електронний лист, оскільки ми отримали запит на відновлення пароля для вашого облікового запису.',
	'app_email_line2' => 'Якщо ви не надіслали запит на відновлення пароля, подальші Ваші дії не потрібні.',
	'app_title' => 'Назва',
	'app_roles' => 'Ролі',
	'app_role' => 'Роль',
	'app_user_actions' => 'Дії користувача',
	'app_action_model' => 'Модель / Сутність Активності',
	'app_action_id' => 'ID Активності',
	'app_campaign' => 'Кампанія',
	'app_campaigns' => 'Кампанії',
	'app_description' => 'Опис',
	'app_valid_from' => 'Діє з',
	'app_valid_to' => 'Діє до',
	'app_discount_amount' => 'Сума знижки',
	'app_discount_percent' => 'Відсоток знижки',
	'app_coupons_amount' => 'Суми купонів',
	'app_redeem_time' => 'Час викупу',
	'app_coupon_management' => 'Управління купонами',
	'app_time_management' => 'Тайм менеджмент',
	'app_time_entries' => 'Записи часу',
	'app_work_type' => 'Тип роботи',
	'app_work_types' => 'Види робіт',
	'app_start_time' => 'Час початку',
	'app_expense_category' => 'Категорія витрат',
	'app_expense_categories' => 'Категорії витрат',
	'app_expense_management' => 'Управління витратами',
	'app_expenses' => 'Витрати',
	'app_expense' => 'Витрата',
	'app_entry_date' => 'Дата вводу',
	'app_income_categories' => 'Категорії доходів',
	'app_contact_management' => 'Управління контактами',
	'app_contacts' => 'Контакты',
	'app_product_management' => 'Управління товарами',
	'app_due_date' => 'Термін сплати',
	'app_assigned_to' => 'Присвоєно',
	'app_assets' => 'Активи',
	'app_asset' => 'Актив',
	'app_serial_number' => 'Серійний номер',
	'app_location' => 'Місцезнаходження',
	'app_locations' => 'Місцезнаходження',
	'app_assigned_user' => 'Призначено (користувач)',
	'app_notes' => 'Примітки',
	'app_assets_history' => 'Історія активів',
	'app_assets_management' => 'Управління активами',
	'app_slug' => 'URL (ЧПУ)',
	'app_content_management' => 'Управління контентом',
	'app_excerpt' => 'Експерт',
	'app_featured_image' => 'Популярні зображення',
	'app_axis' => 'Вісь',
	'app_show' => 'Показати',
	'app_group_by' => 'Групувати за',
	'app_chart_type' => 'Тип діаграми',
	'app_no_reports_yet' => 'Поки немає жодного звіту',
	'app_integer_float_placeholder' => 'Будь ласка виберіть одне з числових полів',
	'app_change_notifications_field_1_label' => 'Надсилати електронне сповіщення Користувачеві',
	'app_change_notifications_field_2_label' => 'При вступі на CRUD',
	'app_select_users_placeholder' => 'Будь ласка, виберіть одного з ваших користувачів',
	'app_is_created' => 'створено',
	'app_is_updated' => 'оновлено',
	'app_is_deleted' => 'видалено',
	'app_notifications' => 'Сповіщення',
	'app_notify_user' => 'Сповістити користувача',
	'app_when_crud' => 'Коли CRUD',
	'app_create_new_notification' => 'Створити нове сповіщення',
	'app_stripe_transactions' => 'Stripe Транзакції',
	'app_calendar_sources' => 'Джерела календаря',
	'app_new_calendar_source' => 'Створення нового джерела для календаря',
	'app_crud_title' => 'Назва CRUD',
	'app_crud_date_field' => 'Поле з типом \"дата\" CRUD',
	'app_prefix' => 'Префікс',
	'app_label_field' => 'Мітка поля',
	'app_suffix' => 'Суфікс',
	'app_no_calendar_sources' => 'Ще немає інформації для календаря.',
	'app_crud_event_field' => 'Мітка поля події',
	'app_create_new_calendar_source' => 'Створити нове джерело календаря',
	'app_edit_calendar_source' => 'Редагувати джерело календаря',
	'app_custom_controller_index' => 'Індивідуальний  контролер.',
	'app_reports_x_axis_field' => 'Ось-Х - будь-ласка виберіть одне з полів дати/часу',
	'app_reports_y_axis_field' => 'Ось-Y - будь-ласка виберіть одне з полів дати/часу',
	'app_select_crud_placeholder' => 'Будь-ласка, виберіть один зі своїх CRUD',
	'app_select_dt_placeholder' => 'Будь-ласка, виберіть одне з полів дати/часу',
	'app_aggregate_function_use' => 'Яку агрегатну функцію використовувати?',
	'app_x_axis_group_by' => 'Ось-Х групувати по',
	'app_x_axis_field' => 'Поле Осі-Х (дата/час)',
	'app_y_axis_field' => 'Поле осі-Y',
	'global_title' => 'E-Auction',
];