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
	'app_file_contains_header_row' => 'Inneholder fila overskrift rad?',
	'app_csvImport' => 'CSV import',
	'app_csv_file_to_import' => 'CSV fil til importering',
	'app_parse_csv' => 'Analyser CSV',
	'app_import_data' => 'Importer data',
	'app_imported_rows_to_table' => 'Importerte :rows reader til :table tabellen',
	'app_create' => 'Ny',
	'app_save' => 'Lagre',
	'app_edit' => 'Rediger',
	'app_restore' => 'Hent tilbake',
	'app_permadel' => 'Slett permanent',
	'app_all' => 'Alle',
	'app_trash' => 'Søppel',
	'app_view' => 'Vis',
	'app_update' => 'Oppdater',
	'app_list' => 'Liste',
	'app_no_entries_in_table' => 'Ingen elemeter i listen.',
	'app_custom_controller_index' => 'Egendefinert kontroller index.',
	'app_logout' => 'Logg ut',
	'app_add_new' => 'Legg til ny',
	'app_are_you_sure' => 'Er du sikker?',
	'app_back_to_list' => 'Tilbake til listen',
	'app_dashboard' => 'Dashbord',
	'app_delete' => 'Slett',
	'app_delete_selected' => 'Slett valgte',
	'app_category' => 'Kategori',
	'app_categories' => 'Kategorier',
	'app_sample_category' => 'Eksempel kategori',
	'app_questions' => 'Spørsmål',
	'app_question' => 'Spørsmål',
	'app_answer' => 'Svar',
	'app_sample_question' => 'Eksempel spørsmål',
	'app_sample_answer' => 'Eksempel svar',
	'app_faq_management' => 'FAQ håndtering',
	'app_administrator_can_create_other_users' => 'Administrator (kan opprette andre brukere)',
	'app_simple_user' => 'Enkel bruker',
	'app_title' => 'Tittel',
	'app_roles' => 'Roller',
	'app_role' => 'Rolle',
	'app_user_management' => 'Bruker håndtering',
	'app_users' => 'Brukere',
	'app_user' => 'Bruker',
	'app_name' => 'Navn',
	'app_email' => 'Epost',
	'app_password' => 'Passord',
	'app_remember_token' => 'Husk-meg',
	'app_permissions' => 'Rettigheter',
	'app_user_actions' => 'Bruker aksjoner',
	'app_action' => 'Aksjon',
	'app_action_model' => 'Aksjons modell',
	'app_action_id' => 'Aksjon id',
	'app_time' => 'Tid',
	'app_campaign' => 'Kampanje',
	'app_campaigns' => 'Kampanjer',
	'app_description' => 'Beskrivelse',
	'app_valid_from' => 'Gyldig fra',
	'app_valid_to' => 'Gyldig til',
	'app_discount_amount' => 'Avslagsbeløp',
	'app_discount_percent' => 'Avslag i prosent',
	'app_coupons_amount' => 'Kupong beløp',
	'app_coupons' => 'Kuponger',
	'app_code' => 'Kode',
	'app_redeem_time' => 'Innløsningstid',
	'app_coupon_management' => 'Kuponghåndtering',
	'app_time_management' => 'Tidshåndtering',
	'app_projects' => 'Prosjekter',
	'app_reports' => 'Rapporter',
	'app_time_entries' => 'Tidsoppføringer',
	'app_work_type' => 'Arbeidstype',
	'app_work_types' => 'Arbeidstyper',
	'app_project' => 'Prosjekt',
	'app_start_time' => 'Start tid',
	'app_end_time' => 'Slutt tid',
	'app_expense_category' => 'Utgiftskategori',
	'app_expense_categories' => 'Utgiftskategorier',
	'app_expense_management' => 'Utgiftshåndtering',
	'app_expenses' => 'Utgifter',
	'app_expense' => 'Utgift',
	'app_entry_date' => 'Loggføringsdato',
	'app_amount' => 'Beløp',
	'app_income_categories' => 'Inntektskategorier',
	'app_monthly_report' => 'Månedsrapport',
	'app_companies' => 'Firmaer',
	'app_company_name' => 'Firma navn',
	'app_address' => 'Adresse',
	'app_website' => 'Webside',
	'app_contact_management' => 'Kontakt håndering',
	'app_contacts' => 'Kontakter',
	'app_company' => 'Firma',
	'app_first_name' => 'Fornavn',
	'app_last_name' => 'Etternavn',
	'app_phone' => 'Telefon',
	'app_phone1' => 'Telefon 1',
	'app_phone2' => 'Telefon 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Bilde (max 8mb)',
	'app_category_name' => 'Kategorinavn',
	'app_product_management' => 'Produkt håndtering',
	'app_products' => 'Produkter',
	'app_product_name' => 'Produktnavn',
	'app_price' => 'Pris',
	'app_tags' => 'Stikkord',
	'app_tag' => 'Stikkord',
	'app_photo1' => 'Bilde 1',
	'app_photo2' => 'Bilde 2',
	'app_photo3' => 'Bilde 3',
	'app_calendar' => 'Kalender',
	'app_statuses' => 'Statuser',
	'app_task_management' => 'Oppgave håndtering',
	'app_tasks' => 'Oppgaver',
	'app_status' => 'Status',
	'app_attachment' => 'Vedlegg',
	'app_due_date' => 'Tidsfrist',
	'app_assigned_to' => 'Tildelt til',
	'app_assets' => 'Ressurser',
	'app_asset' => 'Ressurs',
	'app_serial_number' => 'Serienummer',
	'app_location' => 'Lokasjon',
	'app_locations' => 'Lokasjoner',
	'app_assigned_user' => 'Tildelt (bruker)',
	'app_notes' => 'Notater',
	'app_assets_history' => 'Ressurs historikk',
	'app_assets_management' => 'Ressurs håndering',
	'app_slug' => 'Slug',
	'app_content_management' => 'Innholds håndtering',
	'app_text' => 'Tekst',
	'app_excerpt' => 'Utdrag',
	'app_featured_image' => 'Hoved bilde',
	'app_pages' => 'Sider',
	'app_axis' => 'Akser',
	'app_show' => 'Vis',
	'app_group_by' => 'Gruppert på',
	'app_chart_type' => 'Graftype',
	'app_create_new_report' => 'Lag ny rapport',
	'app_no_reports_yet' => 'Ingen rapporter sålangt.',
	'app_created_at' => 'Laget den',
	'app_updated_at' => 'Oppdatert den',
	'app_deleted_at' => 'Slettet den',
	'app_reports_x_axis_field' => 'X-akse - vennligst velg en av dato/tid feltene',
	'app_reports_y_axis_field' => 'Y-akse - vennligst velg en av nummerfeltene',
	'app_select_crud_placeholder' => 'Vennligst velg en av dine CRUDs',
	'app_select_dt_placeholder' => 'Vennligst velg en av dato/tid feltene',
	'app_aggregate_function_use' => 'Aggregeringsfunksjon som skal brukes',
	'app_x_axis_group_by' => 'X-akse grupper etter',
	'app_x_axis_field' => 'X-akse felt (dato/tid)',
	'app_y_axis_field' => 'Y-akse felt',
	'app_integer_float_placeholder' => 'Vennligst velt en av heltall/flyttall feltene',
	'app_change_notifications_field_1_label' => 'Send en epost beskjed til bruker',
	'app_change_notifications_field_2_label' => 'Når innlegging av CRUD',
	'app_select_users_placeholder' => 'Vennligst velg en av dine brukere',
	'app_is_created' => 'er laget',
	'app_is_updated' => 'er oppdatert',
	'app_is_deleted' => 'er slettet',
	'app_notifications' => 'Varsler',
	'app_notify_user' => 'Varsle bruker',
	'app_when_crud' => 'Når CRUD',
	'app_create_new_notification' => 'Lag ett nytt varsel',
	'app_stripe_transactions' => 'Stripe transaksjon',
	'app_upgrade_to_premium' => 'Oppgrader til Premium',
	'app_messages' => 'Melding',
	'app_you_have_no_messages' => 'Du har ingen meldinger.',
	'app_all_messages' => 'Alle meldinger',
	'app_new_message' => 'Ny melding',
	'app_outbox' => 'Utboks',
	'app_inbox' => 'Innboks',
	'app_recipient' => 'Mottager',
	'app_subject' => 'Emne',
	'app_message' => 'Melding',
	'app_send' => 'Send',
	'app_reply' => 'Svar',
	'app_calendar_sources' => 'Kalender kilder',
	'app_new_calendar_source' => 'Lag en ny kalender kilde',
	'app_crud_title' => 'Crud tittel',
	'app_crud_date_field' => 'Crud dato felt',
	'app_prefix' => 'Prefiks',
	'app_label_field' => 'Etikettfelt',
	'app_suffix' => 'Suffiks',
	'app_no_calendar_sources' => 'Ingen kalender kilder enda.',
	'app_crud_event_field' => 'Hendelse etikettfelt',
	'app_create_new_calendar_source' => 'Lag en ny kalender kilde',
	'app_edit_calendar_source' => 'Rediger kalender kilder',
	'app_client_management' => 'Klient håndtering',
	'app_client_management_settings' => 'Innstillinger klient håndtering',
	'app_country' => 'Land',
	'app_client_status' => 'Klient status',
	'app_clients' => 'Klienter',
	'app_client_statuses' => 'Klient statuser',
	'app_currencies' => 'Valutaer',
	'app_main_currency' => 'Hoved valuta',
	'app_documents' => 'Dokumenter',
	'app_file' => 'Fil',
	'app_income_source' => 'Inntektskilde',
	'app_income_sources' => 'Inntektskilder',
	'app_fee_percent' => 'Avgift i prosent',
	'app_note_text' => 'Notat tekst',
	'app_client' => 'Klient',
	'app_start_date' => 'Start dato',
	'app_budget' => 'Budsjett',
	'app_project_status' => 'Prosjekt status',
	'app_project_statuses' => 'Prosjekt statuser',
	'app_transactions' => 'Transaksjoner',
	'app_transaction_types' => 'Transaksjonstyper',
	'app_transaction_type' => 'Transaksjonstype',
	'app_transaction_date' => 'Transaksjonsdato',
	'app_currency' => 'Valuta',
	'app_current_password' => 'Gjeldende passord',
	'app_new_password' => 'Nytt passord',
	'app_password_confirm' => 'Nytt passord bekreftelse',
	'app_dashboard_text' => 'Du er nå logget inn!',
	'app_forgot_password' => 'Glemt ditt passord?',
	'app_remember_me' => 'Husk meg',
	'app_login' => 'Logg inn',
	'app_change_password' => 'Endre passord',
	'app_csv' => 'CSV',
	'app_print' => 'Skriv ut',
	'app_excel' => 'Excel',
	'app_copy' => 'Kopier',
	'app_colvis' => 'Kolonne visning',
	'app_pdf' => 'PDF',
	'app_reset_password' => 'Tilbakestill passord',
	'app_reset_password_woops' => '<strong>Oisann!</strong> Det ble problemer med inndata:',
	'app_email_line1' => 'Du mottar denne eposten fordi vi har mottat ett ønske om å tilbakestille passordet på din konto.',
	'app_email_line2' => 'Hvis du ikke forespurte om dette, så trenger du ikke gjøre noe.',
	'app_email_greet' => 'Hallo',
	'app_confirm_password' => 'Bekreft passordet',
	'app_email_regards' => 'Hilsen',
	'app_if_you_are_having_trouble' => 'Hvis du har problemer med å trykke på',
	'app_copy_paste_url_bellow' => 'knapp, kopier og lim inn URLen under inn i din nettleser.',
	'app_please_select' => 'Vennligst velg',
	'app_register' => 'Registrer',
	'app_registration' => 'Registrering',
	'app_not_approved_title' => 'Du er ikke godkjent',
	'app_not_approved_p' => 'Kontoen din er fortsatt ikke godkjent av administrator. Vennligst prøv igjen senere.',
	'app_there_were_problems_with_input' => 'De oppsto problemer med inn-data',
	'app_whoops' => 'Oups!',
	'global_title' => 'E-Auction',
];