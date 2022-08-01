<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',			'approved' => 'Approved',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Tijdstip',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
	'app_create' => 'Toevoegen',
	'app_save' => 'Opslaan',
	'app_edit' => 'Bewerken',
	'app_view' => 'Bekijken',
	'app_update' => 'Bijwerken',
	'app_list' => 'Lijst',
	'app_no_entries_in_table' => 'Geen inhoud gevonden',
	'app_custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'Logout',
	'app_add_new' => 'Toevoegen',
	'app_are_you_sure' => 'Ben je zeker?',
	'app_back_to_list' => 'Terug naar lijst',
	'app_dashboard' => 'Boordtabel',
	'app_delete' => 'Verwijderen',
	'app_restore' => 'Herstellen',
	'app_permadel' => 'Definitief verwijderen',
	'app_all' => 'Alle',
	'app_trash' => 'Prullenbak',
	'app_delete_selected' => 'Geselecteerde verwijderen',
	'app_category' => 'Categorie',
	'app_categories' => 'Categoriën',
	'app_questions' => 'Vragen',
	'app_question' => 'Vraag',
	'app_answer' => 'Antwoord',
	'app_sample_question' => 'Demo vraag',
	'app_sample_answer' => 'Demo antwoord',
	'app_faq_management' => 'FAQ beheer',
	'app_administrator_can_create_other_users' => 'Beheerder (kan gebruikers toevoegen)',
	'app_simple_user' => 'Gewone gebruiker',
	'app_title' => 'Titel',
	'app_roles' => 'Rollen',
	'app_role' => 'Rol',
	'app_user_management' => 'Gebruikersbeheer',
	'app_users' => 'Gebruikers',
	'app_user' => 'Gebruiker',
	'app_name' => 'Naam',
	'app_email' => 'E-mail',
	'app_password' => 'Paswoord',
	'app_remember_token' => 'Herinneringstoken',
	'app_permissions' => 'Toelatingen',
	'app_user_actions' => 'Gebruikeracties',
	'app_action' => 'Actie',
	'app_action_model' => 'Actie model',
	'app_action_id' => 'Actie id',
	'app_time' => 'Tijdstip',
	'app_campaign' => 'Campagne',
	'app_campaigns' => 'Campagnes',
	'app_description' => 'Omschrijving',
	'app_valid_from' => 'Geldig van',
	'app_valid_to' => 'Geldig tot',
	'app_discount_amount' => 'Bedrag korting',
	'app_discount_percent' => 'Percentage korting',
	'app_coupons_amount' => 'Bedrag coupon',
	'app_coupons' => 'Coupons',
	'app_code' => 'Code',
	'app_redeem_time' => 'Inlevertijd',
	'app_coupon_management' => 'Couponbeheer',
	'app_time_management' => 'Tijdmanagement',
	'app_projects' => 'Projecten',
	'app_reports' => 'Rapporten',
	'app_sample_category' => 'Demo categorie',
	'app_work_type' => 'Soort werk',
	'app_work_types' => 'Soorten werk',
	'app_project' => 'Project',
	'app_start_time' => 'Starttijd',
	'app_end_time' => 'Eindtijd',
	'app_expense_category' => 'Uitgave categorie',
	'app_expense_categories' => 'Uitgave categoriën',
	'app_expense_management' => 'Uitgavebeheer',
	'app_expenses' => 'Uitgaven',
	'app_expense' => 'Uitgave',
	'app_amount' => 'Bedrag',
	'app_income_categories' => 'Inkomst categorieën',
	'app_monthly_report' => 'Maandelijks rapport',
	'app_companies' => 'Bedrijven',
	'app_company_name' => 'Naam bedrijf',
	'app_address' => 'Adres',
	'app_website' => 'Website',
	'app_contact_management' => 'Contactbeheer',
	'app_contacts' => 'Contacten',
	'app_company' => 'Bedrijf',
	'app_first_name' => 'Voornaam',
	'app_last_name' => 'Familienaam',
	'app_phone' => 'Telefoon',
	'app_phone1' => 'Telefoon 1',
	'app_phone2' => 'Teelefoon 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Foto (max. 8mb)',
	'app_category_name' => 'Categorienaam',
	'app_product_management' => 'Productbeheer',
	'app_products' => 'Producten',
	'app_product_name' => 'Productnaam',
	'app_price' => 'Prijs',
	'app_tags' => 'Tags',
	'app_tag' => 'Tag',
	'app_photo1' => 'Foto1',
	'app_photo2' => 'Foto2',
	'app_photo3' => 'Foto3',
	'app_calendar' => 'Kalender',
	'app_statuses' => 'Statuten',
	'app_task_management' => 'Takenbeheer',
	'app_tasks' => 'Taken',
	'app_status' => 'Statuut',
	'app_attachment' => 'Bijlage',
	'app_assigned_to' => 'Toegewezen aan',
	'app_serial_number' => 'Serienummer',
	'app_location' => 'Plaats',
	'app_locations' => 'Plaatsen',
	'app_assigned_user' => 'Toegewezen (gebruiker)',
	'app_notes' => 'Notities',
	'app_please_select' => 'Kies',
	'app_register' => 'Registreer',
	'app_registration' => 'Registratie',
	'app_not_approved_title' => 'Je bent niet toegelaten.',
	'app_not_approved_p' => 'Ja acccount is nog niet goedgekeurd door een administrator. Even geduld en probeer later opnieuw.',
	'app_there_were_problems_with_input' => 'Er waren problemen met de input',
	'app_whoops' => 'Whoops!',
	'app_file_contains_header_row' => 'Bevat het bestand een titelrij ?',
	'app_csvImport' => 'CSV import',
	'app_csv_file_to_import' => 'te importeren CSV bestand',
	'app_parse_csv' => 'CSV bestand parsen',
	'app_import_data' => 'Gegevens importeren',
	'app_imported_rows_to_table' => ':row rijen geïmporteerd in tabel :table',
	'app_time_entries' => 'Tijdingaves',
	'app_entry_date' => 'Ingavedatum',
	'app_colvis' => 'Kolom zichtbaarheid',
	'app_pdf' => 'PDF',
	'app_create_new_calendar_source' => 'Nieuwe kalenderbron',
	'app_edit_calendar_source' => 'Kalenderbronnen bewerken',
	'app_client_management' => 'Klantbeheer',
	'app_client_management_settings' => 'Klantbeheer settings',
	'app_country' => 'Land',
	'app_client_status' => 'Klant status',
	'app_clients' => 'Klanten',
	'app_client_statuses' => 'Klant statuses',
	'app_currencies' => 'Munteenheden',
	'app_main_currency' => 'Hoofdmunteenheid',
	'app_documents' => 'Documenten',
	'app_file' => 'Bestand',
	'app_income_source' => 'Inkomstbron',
	'app_income_sources' => 'Inkomstbronnen',
	'app_fee_percent' => 'Fee percent',
	'app_note_text' => 'Nota tekst',
	'app_client' => 'Klant',
	'app_start_date' => 'Startdatum',
	'app_budget' => 'Budget',
	'app_project_status' => 'Project status',
	'app_project_statuses' => 'Project statuses',
	'app_transactions' => 'Transacties',
	'app_transaction_types' => 'Transactietypes',
	'app_transaction_type' => 'Transactietype',
	'app_transaction_date' => 'Transactiedatum',
	'app_currency' => 'Munteenheid',
	'app_current_password' => 'Huidig paswoord',
	'app_new_password' => 'Nieuw paswoord',
	'app_password_confirm' => 'Bevestiging nieuw paswoord',
	'app_dashboard_text' => 'Je bent ingelogd !',
	'app_forgot_password' => 'Paswoord vergeten ?',
	'app_remember_me' => 'Herinner mij',
	'app_login' => 'Login',
	'app_change_password' => 'Paswoord wijzigen',
	'app_csv' => 'CSV',
	'app_print' => 'Afdrukken',
	'app_excel' => 'Excel',
	'app_copy' => 'Kopiëren',
	'app_upgrade_to_premium' => 'Upgrade naar Premium.',
	'app_messages' => 'Berichten',
	'app_you_have_no_messages' => 'Je hebt geen berichten.',
	'app_all_messages' => 'Alle berichten',
	'app_new_message' => 'Nieuw bericht',
	'app_outbox' => 'Outbox',
	'app_inbox' => 'Inbox',
	'app_recipient' => 'Bestemmeling',
	'app_subject' => 'Onderwerp',
	'app_message' => 'Bericht',
	'app_send' => 'Verzend',
	'app_reply' => 'Antwoord',
	'app_calendar_sources' => 'Kalenderbronnen',
	'app_new_calendar_source' => 'Een nieuwe kalenderbron maken',
	'app_crud_title' => 'Crud titel',
	'app_crud_date_field' => 'Crud datumveld',
	'app_prefix' => 'Prefix',
	'app_label_field' => 'Label veld',
	'app_suffix' => 'Suffix',
	'app_no_calendar_sources' => 'Geen kalenderbronnen beschikbaar',
	'app_crud_event_field' => 'Event label veld',
	'app_due_date' => 'Vervaldatum',
	'app_assets' => 'Activa',
	'app_asset' => 'Activa',
	'app_assets_history' => 'Activa geschiedenis',
	'app_assets_management' => 'Activabeheer',
	'app_slug' => 'Slug',
	'app_content_management' => 'Inhoudbeheer',
	'app_text' => 'Tekst',
	'app_excerpt' => 'Extract',
	'app_featured_image' => 'Feature afbeelding',
	'app_pages' => 'Pagina\'s',
	'app_axis' => 'As',
	'app_show' => 'Toon',
	'app_group_by' => 'Groepeer op',
	'app_chart_type' => 'Grafiektype',
	'app_create_new_report' => 'Maak nieuw rapport',
	'app_no_reports_yet' => 'Nog geen rapporten',
	'app_created_at' => 'Gemaakt op',
	'app_updated_at' => 'Geüpdate op',
	'app_deleted_at' => 'Verwijderd op',
	'app_reports_x_axis_field' => 'X-as - kies één van de datum/tijd velden',
	'app_reports_y_axis_field' => 'Y-as - kies één van de cijfervelden',
	'app_select_crud_placeholder' => 'Kies één van je CRUD\'s',
	'app_select_dt_placeholder' => 'Kies één van de datum/tijd velden',
	'app_aggregate_function_use' => 'Te gebruiken functie ',
	'app_x_axis_group_by' => 'X-as groepeer op',
	'app_x_axis_field' => 'Y-as veld (datum/tijd)',
	'app_y_axis_field' => 'Y-as veld',
	'app_integer_float_placeholder' => 'Kies één van de integer/float velden',
	'app_change_notifications_field_1_label' => 'Zend een e-mail naar Gebruiker',
	'app_change_notifications_field_2_label' => 'Bij een CRUD entry',
	'app_select_users_placeholder' => 'Kies één van je Gebruikers',
	'app_is_created' => 'werd aangemaakt',
	'app_is_updated' => 'werd geüpdate',
	'app_is_deleted' => 'werd verwijderd',
	'app_notifications' => 'Verwittigingen',
	'app_notify_user' => 'Verwittig Gebruiker',
	'app_when_crud' => 'wanneer CRUD',
	'app_create_new_notification' => 'Maak een nieuwe verwittiging aan',
	'app_stripe_transactions' => 'Stripe transacties',
	'app_reset_password' => 'Wachtwoord reset',
	'app_confirm_password' => 'Bevestig wachtwoord',
	'global_title' => 'E-Auction',
];