<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',			'approved' => 'Approved',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Idő',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
	'app_create' => 'Létrehozás',
	'app_save' => 'Mentés',
	'app_edit' => 'Szerkesztés',
	'app_view' => 'Megtekintés',
	'app_update' => 'Frissítés',
	'app_list' => 'Lista',
	'app_no_entries_in_table' => 'Nincs bejegyzés a táblában',
	'app_logout' => 'Kijelentkezés',
	'app_add_new' => 'Új hozzáadása',
	'app_are_you_sure' => 'Biztosan így legyen?',
	'app_back_to_list' => 'Vissza a listához',
	'app_dashboard' => 'Vezérlőpult',
	'app_delete' => 'Törlés',
	'app_custom_controller_index' => 'Egyedi vezérlő index.',
	'app_restore' => 'Visszaállítás',
	'app_permadel' => 'Végleges törlés',
	'app_all' => 'Összes',
	'app_trash' => 'Törlés',
	'app_delete_selected' => 'Kijelölt(ek) törlése',
	'app_category' => 'Kategória',
	'app_categories' => 'Kategóriák',
	'app_sample_category' => 'Minta kategória',
	'app_questions' => 'Kérdések',
	'app_question' => 'Kérdés',
	'app_answer' => 'Válasz',
	'app_sample_question' => 'Minta kérdés',
	'app_sample_answer' => 'Minta válasz',
	'app_faq_management' => 'GYIK kezelése',
	'app_administrator_can_create_other_users' => 'Admin (létrehozhat felhasználókat)',
	'app_simple_user' => 'Felhasználó',
	'app_title' => 'Cím',
	'app_roles' => 'Szerepkörök',
	'app_role' => 'Szerepkör',
	'app_user_management' => 'Felhasználók kezelése',
	'app_users' => 'Felhasználók',
	'app_user' => 'Felhasználó',
	'app_name' => 'Név',
	'app_email' => 'Email',
	'app_password' => 'Jelszó',
	'app_permissions' => 'Jogosultságok',
	'app_user_actions' => 'Tevékenységek',
	'app_action' => 'Tevékenység',
	'app_time' => 'Idő',
	'app_description' => 'Leírás',
	'app_coupons' => 'Kupon',
	'app_code' => 'Kód',
	'app_projects' => 'Projektek',
	'app_reports' => 'Jelentések',
	'app_project' => 'Projekt',
	'app_start_time' => 'Kezdés ideje',
	'app_end_time' => 'Befejezés ideje',
	'app_companies' => 'Cégek',
	'app_company_name' => 'Cég neve',
	'app_address' => 'Cím',
	'app_website' => 'Honlap',
	'app_contacts' => 'Kapcsolatok',
	'app_company' => 'Cég',
	'app_first_name' => 'Vezetéknév',
	'app_last_name' => 'Keresztnév',
	'app_phone' => 'Telefonszám',
	'app_phone1' => 'Telefonszám 1',
	'app_phone2' => 'Telefonszám 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Kép (max 8mb)',
	'app_category_name' => 'Kategória neve',
	'app_product_management' => 'Termékek kezelése',
	'app_products' => 'Termékek',
	'app_product_name' => 'Termék neve',
	'app_price' => 'Ár',
	'app_tags' => 'Címkék',
	'app_tag' => 'Címke',
	'app_photo1' => 'Kép1',
	'app_photo2' => 'Kép2',
	'app_photo3' => 'Kép3',
	'app_calendar' => 'Naptár',
	'app_statuses' => 'Állapotok',
	'app_coupon_management' => 'Kuponok kezelése',
	'app_time_management' => 'Idő kezelése',
	'app_expense_category' => 'Kiadás kategória',
	'app_expense_categories' => 'Kiadás kategóriák',
	'app_expense_management' => 'Kiadások kezelése',
	'app_expenses' => 'Kiadások',
	'app_expense' => 'Kiadás',
	'app_entry_date' => 'Bejegyzés kelte',
	'app_amount' => 'Összeg',
	'app_income_categories' => 'Bevétel kategória',
	'app_monthly_report' => 'Havi jelentés',
	'app_contact_management' => 'Kapcsolatok kezelése',
	'app_task_management' => 'Feladatok kezelése',
	'app_tasks' => 'Feladatok',
	'app_status' => 'Állapot',
	'app_attachment' => 'Csatolmány',
	'app_due_date' => 'Határidő',
	'app_assigned_to' => 'Felelős',
	'app_currency' => 'Pénznem',
	'app_current_password' => 'Jelenlegi jelszó',
	'app_new_password' => 'Új jelszó',
	'app_password_confirm' => 'Új jelszó újra',
	'app_dashboard_text' => 'Sikeresen bejelentkezett!',
	'app_forgot_password' => 'Elfelejtette a jelszavát?',
	'app_remember_me' => 'Emlékezz rám',
	'app_login' => 'Bejelentkezés',
	'app_change_password' => 'Jelszó megváltoztatása',
	'app_csv' => 'CSV',
	'app_print' => 'Nyomtatás',
	'app_excel' => 'Excel',
	'app_copy' => 'Másolás',
	'app_colvis' => 'Oszlop láthatósága',
	'app_pdf' => 'PDF',
	'app_reset_password' => 'Jelszó törlése',
	'app_reset_password_woops' => '<strong>Hoppá!</strong> Hiba volt a bevitt adatokban:',
	'app_email_line1' => 'Azért kapta ezt az emailt, mivel  egy kérést kaptunk a fiókja jelszavának a törlésére.',
	'app_email_line2' => 'Ha nem Ön kezdeményezte, akkor kérjük, hagyja figyelmen kívül ezt az emailt.',
	'app_email_greet' => 'Üdvözlöm!',
	'app_email_regards' => 'Üdvözlettel',
	'app_confirm_password' => 'Jelszó megerősítése',
	'app_if_you_are_having_trouble' => 'Ha valamiért nem tudna rákattintani ',
	'app_copy_paste_url_bellow' => 'a gombra, akkor másolja be a böngészőjébe az alábbi URL-t:',
	'app_please_select' => 'Válasszon',
	'app_register' => 'Regisztráció',
	'app_registration' => 'Regisztráció',
	'app_not_approved_title' => 'Nincs jóváhagyva',
	'app_not_approved_p' => 'Az adminisztrátor még nem hagyta jóvá a fiókját. Kérjük, várjon türelemmel és próbálja meg később újra.',
	'app_there_were_problems_with_input' => 'Hiba volt a bevitt adatokban',
	'app_whoops' => 'Hoppá!',
	'app_csvImport' => 'CSV importálás',
	'app_csv_file_to_import' => 'Importálandó CSV fájl',
	'app_parse_csv' => 'CSV elemzés',
	'app_remember_token' => 'Emlékezzen a tokenre',
	'app_action_id' => 'Tevékenység id',
	'app_campaign' => 'Kampány',
	'app_campaigns' => 'Kampányok',
	'app_valid_from' => 'Érvényesség kezdete',
	'app_valid_to' => 'Érvényesség vége',
	'app_discount_amount' => 'Kedvezmény összege',
	'app_discount_percent' => 'Kedvezmény százaléka',
	'app_coupons_amount' => 'Kupon mennyisége',
	'app_redeem_time' => 'Beváltás ideje',
	'app_time_entries' => 'Időbejegyzések',
	'app_work_type' => 'Munka típusa',
	'app_work_types' => 'Munka típusok',
	'app_assets' => 'Eszközök',
	'app_asset' => 'Eszköz',
	'app_serial_number' => 'Sorozatszám',
	'app_location' => 'Helyszín',
	'app_locations' => 'Helyszínek',
	'app_assigned_user' => 'Felelős (felhasználó)',
	'app_notes' => 'Megjegyzés',
	'app_assets_history' => 'Előzmények',
	'app_assets_management' => 'Eszközök kezelése',
	'app_slug' => 'Link',
	'app_content_management' => 'Tartalom kezelése',
	'app_text' => 'Szöveg',
	'app_excerpt' => 'Kivonat',
	'app_featured_image' => 'Kiemelt kép',
	'app_pages' => 'Oldalak',
	'app_axis' => 'Tengely',
	'app_show' => 'Mutat',
	'app_group_by' => 'Csoportosítás',
	'app_chart_type' => 'Grafikon típusa',
	'app_create_new_report' => 'Új jelentés',
	'app_no_reports_yet' => 'Nincsenek jelentések.',
	'app_created_at' => 'Létrehozva',
	'app_updated_at' => 'Frissítve',
	'app_deleted_at' => 'Törölve',
	'app_reports_x_axis_field' => 'X tengely - válasszon egy dátum/idő mezőt',
	'app_reports_y_axis_field' => 'Y tengely - válasszon egy szám mezőt',
	'app_select_crud_placeholder' => 'Válassza ki valamelyik CRUD-ot',
	'app_select_dt_placeholder' => 'Válassza ki valamelyik dátum/idő mezőt',
	'app_aggregate_function_use' => 'Összegző funkció használata',
	'app_x_axis_group_by' => 'X tengely csoportosítás',
	'app_x_axis_field' => 'X tengely mező (dátum/idő)',
	'app_y_axis_field' => 'Y tengely mező',
	'app_is_created' => 'létrehozva',
	'app_is_updated' => 'frissítve',
	'app_is_deleted' => 'törölve',
	'app_notifications' => 'Megjegyzések',
	'app_notify_user' => 'Felhasználó értesítése',
	'app_create_new_notification' => 'Új értesítés',
	'app_stripe_transactions' => 'Stripe tranzakciók',
	'app_upgrade_to_premium' => 'Frissítés Prémiumra',
	'app_messages' => 'Üzenetek',
	'app_you_have_no_messages' => 'Nincsenek üzenetek.',
	'app_all_messages' => 'Összes üzenet',
	'app_new_message' => 'Új üzenet',
	'app_outbox' => 'Kimenő',
	'app_inbox' => 'Bejövő',
	'app_recipient' => 'Címzett',
	'app_subject' => 'Tárgy',
	'app_message' => 'Üzenet',
	'app_send' => 'Küldés',
	'app_reply' => 'Válasz',
	'app_calendar_sources' => 'Naptár forrása',
	'app_new_calendar_source' => 'Naptár forrás létrehozása',
	'app_crud_title' => 'Crud címe',
	'app_crud_date_field' => 'Crud dátum mező',
	'app_prefix' => 'Előtag',
	'app_label_field' => 'Címke mező',
	'app_suffix' => 'Utótag',
	'app_no_calendar_sources' => 'Nincs naptár',
	'app_crud_event_field' => 'Esemény címke mező',
	'app_create_new_calendar_source' => 'Új naptár forrás létrehozása',
	'app_edit_calendar_source' => 'Szerkesztés',
	'app_client_management' => 'Ügyfelek kezelése',
	'app_client_management_settings' => 'Ügyfelek kezelése beállítások',
	'app_country' => 'Ország',
	'app_client_status' => 'Ügyfél állapota',
	'app_clients' => 'Ügyfelek',
	'app_client_statuses' => 'Ügyfél állapotai',
	'app_currencies' => 'Pénznemek',
	'app_main_currency' => 'Elsődleges pénznem',
	'app_documents' => 'Dokumentumok',
	'app_file' => 'Fájl',
	'app_income_source' => 'Bevételi forrás',
	'app_income_sources' => 'Bevételi források',
	'app_fee_percent' => 'Díj százalék',
	'app_note_text' => 'Megjegyzés szöveg',
	'app_client' => 'Ügyfél',
	'app_start_date' => 'Kezdés dátuma',
	'app_budget' => 'Költségvetés',
	'app_project_status' => 'Projekt állapota',
	'app_project_statuses' => 'Projekt állapotai',
	'app_transactions' => 'Tranzakciók',
	'app_transaction_types' => 'Tranzakció típusok',
	'app_transaction_type' => 'Tranzakció típus',
	'app_transaction_date' => 'Tranzakció dátum',
	'app_file_contains_header_row' => 'Tartalmaz a fájl fejléc sort?',
	'app_import_data' => 'Adatok importálása',
	'app_imported_rows_to_table' => ':rows sor importálva a :table táblába',
	'app_integer_float_placeholder' => 'Válasszon egy integer/float mezőt.',
	'app_change_notifications_field_1_label' => 'Email értesítő küldése felhasználónak',
	'app_change_notifications_field_2_label' => 'Amikor belép a CRUD',
	'app_select_users_placeholder' => 'Válasszon ki egy felhasználót',
	'app_when_crud' => 'Amikor CRUD',
	'app_action_model' => 'Tevékenység model',
	'global_title' => 'E-Auction',
];