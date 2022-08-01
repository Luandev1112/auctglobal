<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',			'approved' => 'Approved',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Zeit',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
	'app_create' => 'Erstellen',
	'app_save' => 'Speichern',
	'app_edit' => 'Bearbeiten',
	'app_view' => 'Betrachten',
	'app_update' => 'Aktualisieren',
	'app_list' => 'Liste',
	'app_no_entries_in_table' => 'Keine Einträge in der Tabelle.',
	'app_custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'Abmelden',
	'app_add_new' => 'Hinzufügen',
	'app_are_you_sure' => 'Sind Sie sicher?',
	'app_back_to_list' => 'Zurück zur Liste',
	'app_dashboard' => 'Dashboard',
	'app_delete' => 'Löschen',
	'app_restore' => 'Wiederherstellen',
	'app_permadel' => 'Permant löschen',
	'app_all' => 'Alle',
	'app_trash' => 'Papierkorb',
	'app_delete_selected' => 'Markierte löschen',
	'app_category' => 'Kategorie',
	'app_categories' => 'Kategorien',
	'app_sample_category' => 'Beispielkategorie',
	'app_questions' => 'Fragen',
	'app_question' => 'Frage',
	'app_answer' => 'Antwort',
	'app_sample_question' => 'Beispielfrage',
	'app_sample_answer' => 'Beispielantwort',
	'app_faq_management' => 'FAQ Verwaltung',
	'app_administrator_can_create_other_users' => 'Administrator (kann andere Benutzer erstellen)',
	'app_simple_user' => 'Einfacher Benutzer',
	'app_title' => 'Titel',
	'app_roles' => 'Rollen',
	'app_role' => 'Rolle',
	'app_user_management' => 'Benutzerverwaltung',
	'app_users' => 'Benutzer',
	'app_user' => 'Benutzer',
	'app_name' => 'Name',
	'app_email' => 'E-Mail',
	'app_password' => 'Passwort',
	'app_remember_token' => 'Remember Token',
	'app_permissions' => 'Zugriffsrechte',
	'app_user_actions' => 'Prokoll',
	'app_action' => 'Action',
	'app_action_model' => 'Action Model',
	'app_action_id' => 'Action ID',
	'app_time' => 'Zeit',
	'app_campaign' => 'Kampagne',
	'app_campaigns' => 'Kampagnen',
	'app_description' => 'Beschreibung',
	'app_valid_from' => 'Gültig von',
	'app_valid_to' => 'Gültig bis',
	'app_discount_amount' => 'Rabattbetrag',
	'app_discount_percent' => 'Rabatt in Prozent',
	'app_coupons_amount' => 'Anzahl Gutscheine',
	'app_coupons' => 'Gutscheine',
	'app_code' => 'Code',
	'app_redeem_time' => 'Eingelöst',
	'app_coupon_management' => 'Gutscheinverwaltung',
	'app_time_management' => 'Zeiterfassung',
	'app_projects' => 'Projekte',
	'app_reports' => 'Berichte',
	'app_time_entries' => 'Zeiterfassungseinträge',
	'app_work_type' => 'Art der Arbeit',
	'app_work_types' => 'Arten der Arbeit',
	'app_project' => 'Projekt',
	'app_start_time' => 'Beginnt am',
	'app_end_time' => 'Endet am',
	'app_expense_category' => 'Asugabenkategorie',
	'app_expense_categories' => 'Ausgabenkategorien',
	'app_expense_management' => 'Ausgabenverwaltung',
	'app_expenses' => 'Ausgaben',
	'app_expense' => 'Ausgabe',
	'app_entry_date' => 'Erfasst am',
	'app_amount' => 'Betrag',
	'app_income_categories' => 'Einnahmenkategorien',
	'app_monthly_report' => 'Monatsbericht',
	'app_companies' => 'Firmen',
	'app_company_name' => 'Firmenname',
	'app_address' => 'Adresse',
	'app_website' => 'Webseite',
	'app_contact_management' => 'Kontaktverwaltung',
	'app_contacts' => 'Kontakte',
	'app_company' => 'Firma',
	'app_first_name' => 'Vorname',
	'app_last_name' => 'Nachname',
	'app_phone' => 'Telefon',
	'app_phone1' => 'Telefon 1',
	'app_phone2' => 'Telefon 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Foto (max. 8 MB)',
	'app_category_name' => 'Kategoriename',
	'app_product_management' => 'Produktverwaltung',
	'app_products' => 'Produkte',
	'app_product_name' => 'Produktname',
	'app_price' => 'Preis',
	'app_tags' => 'Stichwörter',
	'app_tag' => 'Stichwort',
	'app_photo1' => 'Abbildung 1',
	'app_photo2' => 'Abbildung 2',
	'app_photo3' => 'Abbildung 3',
	'app_calendar' => 'Kalender',
	'app_statuses' => 'Stati',
	'app_task_management' => 'Aufgabenplanung',
	'app_tasks' => 'Aufgabe',
	'app_status' => 'Status',
	'app_attachment' => 'Anhang',
	'app_due_date' => 'Frist',
	'app_assigned_to' => 'Zugewiesen zu',
	'app_assets' => 'Geräte',
	'app_asset' => 'Gerät',
	'app_serial_number' => 'Seriennummer',
	'app_location' => 'Standort',
	'app_locations' => 'Standorte',
	'app_assigned_user' => 'Benutzer',
	'app_notes' => 'Notizen',
	'app_assets_history' => 'Verlauf',
	'app_assets_management' => 'Geräteverwaltung',
	'app_slug' => 'Slug',
	'app_content_management' => 'Inhaltsverwaltung',
	'app_text' => 'Text',
	'app_excerpt' => 'Auszug',
	'app_featured_image' => 'Hauptbild',
	'app_pages' => 'Seiten',
	'app_axis' => 'Achse',
	'app_show' => 'Zeige',
	'app_group_by' => 'Gruppiere nach',
	'app_chart_type' => 'Diagrammtyp',
	'app_create_new_report' => 'Erzeuge neuen Bericht',
	'app_no_reports_yet' => 'Keine berichte',
	'app_created_at' => 'Erstellt am',
	'app_updated_at' => 'Aktualisiert am',
	'app_deleted_at' => 'Gelöscht am',
	'app_reports_x_axis_field' => 'X-Achse - bitte wählen sie ein Datums oder Zeitfeld',
	'app_reports_y_axis_field' => 'Y-Achse - bitte wählen sie ein Zahlenfeld',
	'app_select_crud_placeholder' => 'Bitte wählen sie einen CRUD',
	'app_select_dt_placeholder' => 'Bitte wählen sie ein Datums oder Zeitfeld',
	'app_aggregate_function_use' => 'Aggregate Funktion',
	'app_x_axis_group_by' => 'X-Achse gruppieren nach',
	'app_x_axis_field' => 'X-Achsen Feld (Datum/Zeit)',
	'app_y_axis_field' => 'Y-Achsen Feld',
	'app_integer_float_placeholder' => 'Bitte wählen Sie ein Zahlen Feld',
	'app_change_notifications_field_1_label' => 'Sende Benachrichtigung an Benutzer',
	'app_change_notifications_field_2_label' => 'Wenn Eintrag in CRUD',
	'app_select_users_placeholder' => 'Bitte wählen sie einen Benutzer',
	'app_is_created' => 'ist erstellt',
	'app_is_updated' => 'ist aktualisiert',
	'app_is_deleted' => 'ist gelöscht',
	'app_notifications' => 'Benachrichtigungen',
	'app_notify_user' => 'Benachrichtige Benutzer',
	'app_when_crud' => 'Wenn CRUDD',
	'app_create_new_notification' => 'Erstelle Benachrichtigung',
	'app_stripe_transactions' => 'Stripe Transaktionen',
	'app_upgrade_to_premium' => 'Zu Premium heraufstufen',
	'app_messages' => 'Nachrichten',
	'app_you_have_no_messages' => 'Sie haben keine Nachrichten.',
	'app_all_messages' => 'Alle Nachrichten',
	'app_new_message' => 'Neue Nachricht',
	'app_outbox' => 'Gesendet',
	'app_inbox' => 'Posteingang',
	'app_recipient' => 'Empfänger',
	'app_subject' => 'Betreff',
	'app_message' => 'Nachricht',
	'app_send' => 'Senden',
	'app_reply' => 'Antworten',
	'app_calendar_sources' => 'Kalenderquellen',
	'app_new_calendar_source' => 'Erstelle eine neue Kalenderquelle',
	'app_crud_title' => 'Crud Titel',
	'app_crud_date_field' => 'Crud Datumsfeld',
	'app_prefix' => 'Prefix',
	'app_label_field' => 'Beschreibungsfeld',
	'app_suffix' => 'Suffix',
	'app_no_calendar_sources' => 'Keine Kalenderquellen',
	'app_crud_event_field' => 'Ereignis-Beschreibungsfeld',
	'app_create_new_calendar_source' => 'Erstelle neue Kalenderquelle',
	'app_edit_calendar_source' => 'Kalenderquelle bearbeiten',
	'app_client_management' => 'Kundenverwaltung',
	'app_client_management_settings' => 'Kundenverwaltung-Einstellungen',
	'app_country' => 'Land',
	'app_client_status' => 'Kundenstatus',
	'app_clients' => 'Kunden',
	'app_client_statuses' => 'Kundenstati',
	'app_currencies' => 'Währungen',
	'app_main_currency' => 'Hauptwährung',
	'app_documents' => 'Dokumente',
	'app_file' => 'Datei',
	'app_income_source' => 'Einnahmequelle',
	'app_income_sources' => 'Einnahmequellen',
	'app_fee_percent' => 'Gebühren in Prozent',
	'app_note_text' => 'Text der Notiz',
	'app_client' => 'Kunde',
	'app_start_date' => 'Beginnt am',
	'app_budget' => 'Budget',
	'app_project_status' => 'Projektstatus',
	'app_project_statuses' => 'Projektstati',
	'app_transactions' => 'Transaktionen',
	'app_transaction_types' => 'Transaktionstypen',
	'app_transaction_type' => 'Transaktionstyp',
	'app_transaction_date' => 'Transaktionsdatum',
	'app_currency' => 'Währung',
	'app_current_password' => 'Aktuelles Passwort',
	'app_new_password' => 'Neues Passwort',
	'app_password_confirm' => 'Passwort wiederholen',
	'app_dashboard_text' => 'Sie sind angemeldet!',
	'app_forgot_password' => 'Passwort vergessen?',
	'app_remember_me' => 'Anmeldedaten merken',
	'app_login' => 'Anmelden',
	'app_change_password' => 'Passwört ändern',
	'app_csv' => 'CSV',
	'app_print' => 'Drucken',
	'app_excel' => 'Excel',
	'app_copy' => 'Kopieren',
	'app_colvis' => 'Spaltensichtbarkeit',
	'app_pdf' => 'PDF',
	'app_reset_password' => 'Passwort zurücksetzen',
	'app_reset_password_woops' => '<strong>Uuups!</strong> Fehlerhafte Eingabe:',
	'app_email_line1' => 'Sie erhalten diese E-Mail weil wir eine Passwort zurücksetzen Anfrage erhalten haben.',
	'app_email_line2' => 'Wenn sie keine Passwort zurücksetzen Anfrage gesendet haben, brauchen sie nichts unternehmen.',
	'app_email_greet' => 'Hallo',
	'app_email_regards' => 'Grüße',
	'app_confirm_password' => 'Passwort bestätigen',
	'app_if_you_are_having_trouble' => 'Wenn sie Probleme mit dem drücken des',
	'app_copy_paste_url_bellow' => 'Buttons haben, kopieren sie den Link in ihren Browser:',
	'app_please_select' => 'Bitte auswählen',
	'app_register' => 'Registrieren',
	'app_registration' => 'Registrierung',
	'app_not_approved_title' => 'Sie sind nicht freigeschaltet',
	'app_not_approved_p' => 'Ihr Konto wurde noch nicht von einem Administrator freigeschaltet. Bitte gedulden sie sich und versuchen sie es später noch einmal.',
	'app_there_were_problems_with_input' => 'Es gab Probleme mit der Eingabe',
	'app_whoops' => 'Uuups!',
	'app_file_contains_header_row' => 'Datei enthält eine Kopfzeile?',
	'app_csvImport' => 'CSV Importieren',
	'app_csv_file_to_import' => 'Datei für den CSV Import',
	'app_parse_csv' => 'Lese CSV',
	'app_import_data' => 'Daten importieren',
	'app_imported_rows_to_table' => ':rows Zeilen in Tabelle :table importiert',
	'global_title' => 'E-Auction',
];