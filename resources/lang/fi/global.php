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
	'app_country' => 'Maa',
	'app_client_status' => 'Asiakkaan tila',
	'app_clients' => 'Asiakkaat',
	'app_client_statuses' => 'Asiakkaan tilat',
	'app_currencies' => 'Valuutat',
	'app_main_currency' => 'Päävaluutta',
	'app_documents' => 'Dokumentit',
	'app_file' => 'Tiedosto',
	'app_client' => 'Asiakas',
	'app_start_date' => 'Aloitus pvm',
	'app_budget' => 'Budjetti',
	'app_project_status' => 'Projektin tila',
	'app_project_statuses' => 'Projektien tila',
	'app_currency' => 'Valuutta',
	'app_current_password' => 'Nykyinen salasana',
	'app_new_password' => 'Uusi salasana',
	'app_forgot_password' => 'Unohditko salasanasi?',
	'app_remember_me' => 'Muista minut',
	'app_login' => 'Sisäänkirjaus',
	'app_change_password' => 'Vaihda salasanaa',
	'app_csv' => 'CSV',
	'app_print' => 'Tulosta',
	'app_excel' => 'Excel',
	'app_copy' => 'Kopioi',
	'app_colvis' => 'Sarakkeen näkyvyys',
	'app_pdf' => 'PDF',
	'app_email_greet' => 'Hei',
	'app_email_regards' => 'Terveisin',
	'app_confirm_password' => 'Vahvista salasana',
	'app_transactions' => 'Tapahtumat',
	'app_transaction_types' => 'Tapahtuman tyypit',
	'app_transaction_type' => 'Tapahtuman tyyppi',
	'app_transaction_date' => 'Tapahtuman pvm',
	'app_serial_number' => 'Sarjanumero',
	'app_show' => 'Näytä',
	'app_created_at' => 'Luonti pvm',
	'app_updated_at' => 'Päivitetty pvm',
	'app_deleted_at' => 'Poistettu pvm',
	'app_is_created' => 'on luotu',
	'app_is_updated' => 'on pävitetty',
	'app_is_deleted' => 'on poistettu',
	'app_messages' => 'Viestit',
	'app_you_have_no_messages' => 'Sinulle ei ole viestejä.',
	'app_all_messages' => 'Kaikki Viestit',
	'app_new_message' => 'Uusi viesti',
	'app_outbox' => 'Outbox',
	'app_inbox' => 'Inbox',
	'app_create' => 'Luo uusi',
	'app_save' => 'Tallenna',
	'app_edit' => 'Muuta',
	'app_restore' => 'Palauta',
	'app_all' => 'Kaikki',
	'app_view' => 'Näytä',
	'app_update' => 'Päivitä',
	'app_list' => 'Lista',
	'app_no_entries_in_table' => 'Taulu on tyhjä',
	'app_logout' => 'Uloskirjaus',
	'app_add_new' => 'Lisää uusi',
	'app_are_you_sure' => 'Oletko varma?',
	'app_back_to_list' => 'Takaisin listaan',
	'app_delete' => 'Poista',
	'app_delete_selected' => 'Poista valittu',
	'app_category' => 'Kategoria',
	'app_categories' => 'Kategoriat',
	'app_sample_category' => 'Esimerkki kategoria',
	'app_questions' => 'Kysymykset',
	'app_question' => 'Kysymys',
	'app_answer' => 'Vastaus',
	'app_sample_question' => 'Esimerkki kysymys',
	'app_sample_answer' => 'Esimerkki vastaus',
	'app_faq_management' => 'UKK hallinta',
	'app_roles' => 'Roolit',
	'app_role' => 'Rooli',
	'app_users' => 'Käyttäjät',
	'app_user' => 'Käyttäjä',
	'app_name' => 'Nimi',
	'app_email' => 'Sähköposti',
	'app_password' => 'Salasana',
	'app_permissions' => 'Oikeudet',
	'app_time' => 'Aika',
	'app_projects' => 'Projektit',
	'app_reports' => 'Raportit',
	'app_project' => 'Projekti',
	'app_start_time' => 'Alku aika',
	'app_end_time' => 'Loppu aika',
	'app_expense_category' => 'Kulun Kategoria',
	'app_expense_categories' => 'Kulujen Kategoriat',
	'app_amount' => 'Summa',
	'app_companies' => 'Yritykset',
	'app_company_name' => 'Yrityksen nimi',
	'app_address' => 'Osoite',
	'app_phone' => 'Puhelin',
	'app_phone1' => 'Puhelin 1',
	'app_phone2' => 'Puhelin 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Kuva (8 mt max)',
	'app_products' => 'Tuotteet',
	'app_product_name' => 'Tuotteen nimi',
	'app_price' => 'Hinta',
	'app_photo1' => 'Kuva 1',
	'app_photo2' => 'Kuva 2',
	'app_photo3' => 'Kuva 3',
	'app_calendar' => 'Kalenteri',
	'global_title' => 'E-Auction',
];