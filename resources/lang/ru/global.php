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
	'app_create' => 'Создать',
	'app_save' => 'Сохранить',
	'app_edit' => 'Редактировать',
	'app_restore' => 'Восстановить',
	'app_permadel' => 'Удалить безвозвратно',
	'app_all' => 'Все',
	'app_trash' => 'Удаленные',
	'app_view' => 'Просмотр',
	'app_update' => 'Обновить',
	'app_list' => 'Список',
	'app_no_entries_in_table' => 'Нет данных в таблице',
	'app_logout' => 'Выйти',
	'app_add_new' => 'Добавить новый',
	'app_are_you_sure' => 'Вы уверенны?',
	'app_back_to_list' => 'Вернутся к списку',
	'app_dashboard' => 'Панель управления',
	'app_delete' => 'Удалить',
	'app_delete_selected' => 'Удалить выбранные',
	'app_category' => 'Категория',
	'app_categories' => 'Категории',
	'app_sample_category' => 'Пример категории',
	'app_questions' => 'Вопросы',
	'app_question' => 'Вопрос',
	'app_answer' => 'Ответ',
	'app_sample_question' => 'Пример вопроса',
	'app_sample_answer' => 'Пример ответа',
	'app_faq_management' => 'Управление ЧАВО',
	'app_administrator_can_create_other_users' => 'Администратор (может создавать других пользователей)',
	'app_simple_user' => 'Обычный пользователь',
	'app_title' => 'Заголовок',
	'app_roles' => 'Роли',
	'app_role' => 'Роль',
	'app_user_management' => 'Управление пользователями',
	'app_users' => 'Пользователи',
	'app_user' => 'Пользователь',
	'app_name' => 'Имя',
	'app_email' => 'Электронная почта',
	'app_password' => 'Пароль',
	'app_remember_token' => 'Remember token',
	'app_permissions' => 'Доступы',
	'app_user_actions' => 'Активности пользователя',
	'app_action' => 'Активности',
	'app_action_model' => 'Модель/Сущность Активности',
	'app_action_id' => 'ID Активности',
	'app_time' => 'Время',
	'app_campaign' => 'Кампания',
	'app_campaigns' => 'Кампании',
	'app_description' => 'Описание',
	'app_valid_from' => 'Valid from',
	'app_valid_to' => 'Valid to',
	'app_discount_amount' => 'Сумма скидки',
	'app_discount_percent' => 'Процент скидки',
	'app_coupons_amount' => 'Сумма купонов',
	'app_coupons' => 'Купоны',
	'app_code' => 'Код',
	'app_redeem_time' => 'Время выкупа',
	'app_coupon_management' => 'Управление купонами',
	'app_time_management' => 'Тайм менеджмент',
	'app_projects' => 'Проекты',
	'app_reports' => 'Отчеты',
	'app_time_entries' => 'Записи времени',
	'app_work_type' => 'Тип работы',
	'app_work_types' => 'Тип работ',
	'app_project' => 'Проект',
	'app_start_time' => 'Время начала',
	'app_end_time' => 'Время окончания',
	'app_expense_category' => 'Категория расходов',
	'app_expense_categories' => 'Категории расходов',
	'app_expense_management' => 'Управление расходами',
	'app_expenses' => 'Расходы',
	'app_expense' => 'Расход',
	'app_entry_date' => 'Дата ввода',
	'app_amount' => 'Количество',
	'app_income_categories' => 'Категории доходов',
	'app_monthly_report' => 'Месячный отчет',
	'app_companies' => 'Компании',
	'app_company_name' => 'Имя компании',
	'app_address' => 'Адресс',
	'app_website' => 'Веб сайт',
	'app_contact_management' => 'Управление контактами',
	'app_contacts' => 'Контакты',
	'app_company' => 'Компания',
	'app_first_name' => 'Имя',
	'app_last_name' => 'Фамилия',
	'app_phone' => 'Телефон',
	'app_phone1' => 'Телефон 1',
	'app_phone2' => 'Телефон 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Фото (макс. 8 Мб)',
	'app_category_name' => 'Имя категории',
	'app_product_management' => 'Управление продуктами',
	'app_products' => 'Продукты',
	'app_product_name' => 'Имя продукта',
	'app_price' => 'Цена',
	'app_tags' => 'Тэги',
	'app_tag' => 'Тэг',
	'app_photo1' => 'Фото1',
	'app_photo2' => 'Фото2',
	'app_photo3' => 'Фото3',
	'app_calendar' => 'Календарь',
	'app_statuses' => 'Статусы',
	'app_task_management' => 'Управление задачами',
	'app_tasks' => 'Задачи',
	'app_status' => 'Статус',
	'app_attachment' => 'Вложение',
	'app_due_date' => 'Срок',
	'app_assigned_to' => 'Принадлежит к',
	'app_assets' => 'Активы',
	'app_asset' => 'Актив',
	'app_serial_number' => 'Серийный номер',
	'app_location' => 'Местонахождение',
	'app_locations' => 'Местонахождения',
	'app_assigned_user' => 'Принадлежность пользователю',
	'app_notes' => 'Записки',
	'app_assets_history' => 'История активов',
	'app_assets_management' => 'Управление активами',
	'app_slug' => 'Slug (ЧПУ)',
	'app_content_management' => 'Управление контентом',
	'app_text' => 'Текст',
	'app_excerpt' => 'Эксперт',
	'app_featured_image' => 'Популярные изображения',
	'app_pages' => 'Страницы',
	'app_axis' => 'Оси',
	'app_show' => 'Показать',
	'app_group_by' => 'Сортировать по',
	'app_chart_type' => 'Тип диаграммы',
	'app_create_new_report' => 'Создать новый отчет',
	'app_no_reports_yet' => 'Пока нет ни одного отчета',
	'app_created_at' => 'Время создания',
	'app_updated_at' => 'Время последнего обновления',
	'app_deleted_at' => 'Время удаления',
	'app_reports_x_axis_field' => 'Ось-Х - пожалуйста выберете одно из полей даты/времени',
	'app_reports_y_axis_field' => 'Ось-У - пожалуйста выберете одно из полей даты/времени',
	'app_select_crud_placeholder' => 'Пожалуйста, выберете один из своих CRUD',
	'app_select_dt_placeholder' => 'Пожалуйста, выберете одно из полей даты/времени',
	'app_aggregate_function_use' => 'Какую агрегатную функцию использовать?',
	'app_x_axis_group_by' => 'Ось-Х группировать по',
	'app_x_axis_field' => 'Поле Оси Х (дата/время)',
	'app_y_axis_field' => 'Поле оси У',
	'app_integer_float_placeholder' => 'Пожалуйста выберете одно из числовых полей',
	'app_change_notifications_field_1_label' => 'Отправить уведомление пользователю по электронной почте',
	'app_select_users_placeholder' => 'Пожалуйста выберете одного из своих пользователей',
	'app_is_created' => 'создано',
	'app_is_updated' => 'обновлено',
	'app_is_deleted' => 'удалено',
	'app_notifications' => 'Уведомления',
	'app_notify_user' => 'Уведомить Пользователя',
	'app_create_new_notification' => 'Создать новое уведомление',
	'app_stripe_transactions' => 'Stripe Транзакции',
	'app_upgrade_to_premium' => 'Обновить пакет услуг до Премиум',
	'app_messages' => 'Сообщения',
	'app_you_have_no_messages' => 'У вас нет сообщений',
	'app_all_messages' => 'Все сообщения',
	'app_new_message' => 'Новое сообщение',
	'app_outbox' => 'Отправленные',
	'app_inbox' => 'Входящие',
	'app_recipient' => 'Получатель',
	'app_subject' => 'Тема сообщения',
	'app_message' => 'Сообщение',
	'app_send' => 'Отправить',
	'app_reply' => 'Ответить',
	'app_crud_title' => 'Заголовок CRUD',
	'app_crud_date_field' => 'Поле с типом \"дата\" выбранного CRUD',
	'app_prefix' => 'Префикс',
	'app_suffix' => 'Суффикс',
	'app_client_management' => 'Управление клиентами',
	'app_client_management_settings' => 'Управление клиентами,  настройки',
	'app_country' => 'Страна',
	'app_client_status' => 'Статус клиента',
	'app_clients' => 'Клиенты',
	'app_client_statuses' => 'Клиентские статусы',
	'app_currencies' => 'Валюты',
	'app_main_currency' => 'Основная валюта',
	'app_documents' => 'Документы',
	'app_file' => 'Файл',
	'app_income_source' => 'Источник дохода',
	'app_income_sources' => 'Источники дохода',
	'app_fee_percent' => 'Коэффициент вознаграждения',
	'app_note_text' => 'Текст примечания',
	'app_client' => 'Клиент',
	'app_start_date' => 'Дата начала',
	'app_budget' => 'Бюджет',
	'app_project_status' => 'Статус проекта',
	'app_project_statuses' => 'Статусы проекта',
	'app_transactions' => 'Транзакции',
	'app_transaction_types' => 'Типа транзакций',
	'app_transaction_type' => 'Тип транзакции',
	'app_transaction_date' => 'Дата транзакции',
	'app_currency' => 'Валюта',
	'app_current_password' => 'Текущий пароль',
	'app_new_password' => 'Новый пароль',
	'app_password_confirm' => 'Новый пароль еще раз',
	'app_dashboard_text' => 'Вы вошли в систему !',
	'app_forgot_password' => 'Забыли пароль?',
	'app_remember_me' => 'Запомнить меня',
	'app_login' => 'Войти',
	'app_change_password' => 'Сменить пароль',
	'app_csv' => 'CSV',
	'app_print' => 'Печать',
	'app_excel' => 'Excel',
	'app_copy' => 'Скопировать',
	'app_colvis' => 'Видимость колонок',
	'app_pdf' => 'PDF',
	'app_reset_password' => 'Сброс пароля',
	'app_reset_password_woops' => '<strong>Ой!</strong> Возникли проблемы со следующими подробностями:',
	'app_email_line1' => 'Вы получили это письмо так как поступила заявка на смену пароля для вашего аккаунта',
	'app_email_line2' => 'Если вы не запрашивали смену пароля, просто проигнорируйте это письмо. Ничего делать не нужно.',
	'app_email_greet' => 'Здравствуйте!',
	'app_email_regards' => 'С уважением',
	'app_confirm_password' => 'Подтвердите пароль',
	'app_if_you_are_having_trouble' => 'Если вы испытываете трудности, нажмите',
	'app_copy_paste_url_bellow' => 'кнопку, скопируйте ссылку и вставьте а адресную строку браузера',
	'app_please_select' => 'Пожалуйста, сделайте выбор',
	'app_when_crud' => 'Когда CRUD',
	'app_calendar_sources' => 'Источники календаря',
	'app_new_calendar_source' => 'Создать новый источник календаря',
	'app_label_field' => 'Поле для заголовка',
	'app_no_calendar_sources' => 'Еще нет источников календаря',
	'app_crud_event_field' => 'Поле заголовка мероприятия',
	'app_create_new_calendar_source' => 'Создать новый источник календаря',
	'app_edit_calendar_source' => 'Редактировать источник календаря',
	'app_custom_controller_index' => 'Индивидуальный контроллер',
	'app_registration' => 'Регистрация',
	'app_not_approved_title' => 'Вы не подтвержены',
	'app_not_approved_p' => 'Ваш аккаунт не подтвержден администратором. Пожалуйста, попробуйте войти позже.',
	'app_whoops' => 'Упс!',
	'app_register' => 'Регистрация',
	'app_file_contains_header_row' => 'Файл содержит строку с заголовками столбцов?',
	'app_csvImport' => 'Импорт CSV',
	'app_csv_file_to_import' => 'CSV файл для импорта',
	'app_parse_csv' => 'Спарсить CSV',
	'app_import_data' => 'Импорт данных',
	'global_title' => 'E-Auction',
];