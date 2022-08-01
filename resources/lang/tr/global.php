<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',			'approved' => 'Approved',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Zaman',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
	'app_create' => 'Oluştur',
	'app_save' => 'Kaydet',
	'app_edit' => 'Düzenle',
	'app_view' => 'Görüntüle',
	'app_update' => 'Güncelle',
	'app_list' => 'Listele',
	'app_no_entries_in_table' => 'Tabloda kayıt bulunamadı',
	'app_custom_controller_index' => 'Özel denetçi dizini.',
	'app_logout' => 'Çıkış yap',
	'app_add_new' => 'Yeni ekle',
	'app_are_you_sure' => 'Emin misiniz?',
	'app_back_to_list' => 'Listeye dön',
	'app_dashboard' => 'Kontrol Paneli',
	'app_delete' => 'Sil',
	'app_delete_selected' => 'Seçileni Sil',
	'app_category' => 'Kategori',
	'app_categories' => 'Kategoriler',
	'app_sample_category' => 'Örnek Kategori',
	'app_questions' => 'Sorular',
	'app_question' => 'Soru',
	'app_answer' => 'Cevap',
	'app_sample_question' => 'Örnek Soru',
	'app_sample_answer' => 'Örnek Cevap',
	'app_faq_management' => 'SSS Yönetimi',
	'app_administrator_can_create_other_users' => 'Yönetici (diğer kullanıcıları oluşturabilir)',
	'app_simple_user' => 'Basit Kullanıcı',
	'app_title' => 'Başlık',
	'app_roles' => 'Roller',
	'app_role' => 'Rol',
	'app_user_management' => 'Kullanıcı Yönetimi',
	'app_users' => 'Kullanıcılar',
	'app_user' => 'Kullanıcı',
	'app_name' => 'Ad',
	'app_email' => 'E-posta',
	'app_password' => 'Şifre',
	'app_remember_token' => 'Beni Hatırla',
	'app_subject' => 'Konu',
	'app_message' => 'Mesaj',
	'app_send' => 'Gönder',
	'app_reply' => 'Cevapla',
	'app_calendar_sources' => 'Takvim kaynağı',
	'app_new_calendar_source' => 'Yeni takvim kaynağı oluştur',
	'app_crud_title' => 'Crud başlığı',
	'app_crud_date_field' => 'Crud tarih alanı',
	'app_prefix' => 'Önek',
	'app_label_field' => 'Etiket alanı',
	'app_suffix' => 'Sonek',
	'app_no_calendar_sources' => 'Henüz takvim kaynağı oluşturulmadı',
	'app_crud_event_field' => 'Olay etiket alanı',
	'app_create_new_calendar_source' => 'Takvim Kaynağı Oluştur',
	'app_edit_calendar_source' => 'Takvim Kaynağını Düzenle',
	'app_client_management' => 'Müşteri yönetimi',
	'app_client_management_settings' => 'Müşteri yönetim ayarları',
	'app_country' => 'Ülke',
	'app_client_status' => 'Müşteri Durumu',
	'app_clients' => 'Müşteriler',
	'app_client_statuses' => 'Müşteri durumları',
	'app_currencies' => 'Kurlar',
	'app_main_currency' => 'Ana kur',
	'app_documents' => 'Döküman',
	'app_file' => 'Dosya',
	'app_income_source' => 'Gelir kaynağı',
	'app_income_sources' => 'Gelir kaynakları',
	'app_fee_percent' => 'Ücret oranı',
	'app_note_text' => 'Not yazısı',
	'app_client' => 'Müşteri',
	'app_start_date' => 'Başlangıç Tarihi',
	'app_budget' => 'Bütçe',
	'app_project_status' => 'Proje durumu',
	'app_project_statuses' => 'Proje durumları',
	'app_transactions' => 'İşlemler',
	'app_transaction_types' => 'İşlem Türleri',
	'app_transaction_type' => 'İşlem türü',
	'app_transaction_date' => 'İşlem tarihi',
	'app_currency' => 'Kur',
	'app_current_password' => 'Geçerli şifreniz',
	'app_new_password' => 'Yeni şifre',
	'app_password_confirm' => 'Yeni şifreyi onayla',
	'app_dashboard_text' => 'Giriş Yaptınız!',
	'app_forgot_password' => 'Şifrenizi mi unuttunuz?',
	'app_remember_me' => 'Beni Hatırla',
	'app_login' => 'Giriş',
	'app_change_password' => 'Şifreyi değiştir',
	'app_csv' => 'CSV',
	'app_print' => 'Yazdır',
	'app_excel' => 'Excel',
	'app_copy' => 'Kopyala',
	'app_colvis' => 'Sütun görünürlüğü',
	'app_pdf' => 'PDF',
	'app_email_greet' => 'Merhaba',
	'app_email_regards' => 'Saygılar',
	'app_confirm_password' => 'Şifreyi onayla',
	'app_if_you_are_having_trouble' => 'tıklamakta sorun yaşıyorsanız',
	'app_please_select' => 'Lütfen seçiniz',
	'app_register' => 'Kaydol',
	'app_registration' => 'Kayıt',
	'app_not_approved_title' => 'Onaylandmadınız',
	'app_not_approved_p' => 'Hesabınız yönetici tarafından henüz onaylanmadı. Lütfen daha sonra tekrar deneyiniz.',
	'app_restore' => 'Geri yükle',
	'app_permadel' => 'Tamamen Sil',
	'app_all' => 'Hepsi',
	'app_trash' => 'Çöp',
	'app_permissions' => 'İzinler',
	'app_user_actions' => 'Kullanıcı hareketleri',
	'app_action' => 'Hareket',
	'app_action_model' => 'Hareket Modeli',
	'app_action_id' => 'Hareket id',
	'app_time' => 'Zaman',
	'app_campaign' => 'Kampanya',
	'app_campaigns' => 'Kampanyalar',
	'app_description' => 'Açıklama',
	'app_valid_from' => 'Zamanından itibaren',
	'app_valid_to' => 'Zamanına kadar',
	'app_discount_amount' => 'İndirim tutarı',
	'app_discount_percent' => 'İndirim yüzdesi',
	'app_coupons_amount' => 'Kupon tutarı',
	'app_coupons' => 'Kuponlar',
	'app_code' => 'Kod',
	'app_redeem_time' => 'Ödeme zamanı',
	'app_coupon_management' => 'Kupon yönetimi',
	'app_time_management' => 'Tarih yönetimi',
	'app_projects' => 'Projeler',
	'app_reports' => 'Raporlar',
	'app_time_entries' => 'Tarih girdileri',
	'app_work_type' => 'Çalışma türü',
	'app_work_types' => 'Çalışma türleri',
	'app_project' => 'Proje',
	'app_start_time' => 'Başlangıç zamanı',
	'app_end_time' => 'Bitiş zamanı',
	'app_expense_category' => 'Gider Kategorisi',
	'app_expense_categories' => 'Gider Kategorileri',
	'app_expense_management' => 'Gider Yönetimi',
	'app_expenses' => 'Giderler',
	'app_expense' => 'Gider',
	'app_entry_date' => 'Giriş tarihi',
	'app_amount' => 'Tutar',
	'app_income_categories' => 'Gelir kategorileri',
	'app_monthly_report' => 'Aylık rapor',
	'app_companies' => 'Şirketler',
	'app_company_name' => 'Şirket adı',
	'app_address' => 'Adres',
	'app_website' => 'Website',
	'app_contact_management' => 'İletişim yönetimi',
	'app_contacts' => 'İrtibatlar',
	'app_company' => 'Şirket',
	'app_first_name' => 'Ad',
	'app_last_name' => 'Soyad',
	'app_phone' => 'Telefon',
	'app_phone1' => 'Telefon 1',
	'app_phone2' => 'Telefon 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Fotoğraf (max 8mb)',
	'app_category_name' => 'Kategori adı',
	'app_product_management' => 'Ürün yönetimi',
	'app_products' => 'Ürünler',
	'app_product_name' => 'Ürün adı',
	'app_price' => 'Fiyat',
	'app_tags' => 'Etiketler',
	'app_tag' => 'Etiket',
	'app_photo1' => 'Fotoğraf 1',
	'app_photo2' => 'Fotoğraf 2',
	'app_photo3' => 'Fotoğraf 3',
	'app_calendar' => 'Takvim',
	'app_statuses' => 'Durumlar',
	'app_task_management' => 'Görev Yönetimi',
	'app_tasks' => 'Görevler',
	'app_status' => 'Durum',
	'app_attachment' => 'Ek',
	'app_due_date' => 'Vade tarihi',
	'app_assigned_to' => 'Atanmış',
	'app_assets' => 'Varlıklar',
	'app_asset' => 'Varlık',
	'app_serial_number' => 'Seri numarası',
	'app_location' => 'Yer',
	'app_locations' => 'Yerler',
	'app_assigned_user' => 'Atanmış (kullanıcı)',
	'app_notes' => 'Notlar',
	'app_assets_history' => 'Varlık geçmişi',
	'app_assets_management' => 'Varlık yönetimi',
	'app_slug' => 'Kısa İsim',
	'app_content_management' => 'İçerik Yönetimi',
	'app_text' => 'Yazı',
	'app_excerpt' => 'Alıntı',
	'app_featured_image' => 'Öne çıkan fotoğraf',
	'app_pages' => 'Sayfalar',
	'app_axis' => 'Eksen',
	'app_show' => 'Göster',
	'app_group_by' => 'Grupla',
	'app_chart_type' => 'Çizelge türü',
	'app_create_new_report' => 'Yeni rapor oluştur',
	'app_no_reports_yet' => 'Henüz rapor yok.',
	'app_created_at' => 'tarihinde oluşturuldu',
	'app_updated_at' => 'tarihinde güncellendi',
	'app_deleted_at' => 'tarihinde silindi',
	'app_reports_x_axis_field' => 'X-ekseni - lütfen tarih/zaman seçimi yapınız',
	'app_reports_y_axis_field' => 'Y-ekseni - lütfen tarih/zaman seçimi yapınız',
	'app_select_crud_placeholder' => 'Lütfen üretilecek rapor alanını seçiniz',
	'app_select_dt_placeholder' => 'Lütfen tarih/zamandan birini seçiniz.',
	'app_aggregate_function_use' => 'Kullanmak için fnoksiyonları toplayınız',
	'app_x_axis_group_by' => 'X-eksenini grupla',
	'app_x_axis_field' => 'X-eksen alanı (tarih/zaman)',
	'app_y_axis_field' => 'Y-eksen alanı',
	'app_integer_float_placeholder' => 'Lütfen alanlardan birini seçiniz',
	'app_change_notifications_field_1_label' => 'Kullanıcılara uyarı mesajı gönder',
	'app_select_users_placeholder' => 'Lütfen kullanıcılarınızdan birini seçiniz',
	'app_is_created' => 'oluşturuldu',
	'app_is_updated' => 'güncellendi',
	'app_is_deleted' => 'silindi',
	'app_notifications' => 'Bildiriler',
	'app_notify_user' => 'Kullanıcıya Bildir',
	'app_create_new_notification' => 'Yeni bildiri oluştur',
	'app_messages' => 'Mesajlar',
	'app_you_have_no_messages' => 'Mesajınız yok',
	'app_all_messages' => 'Tüm mesajlar',
	'app_new_message' => 'Yeni Mesaj',
	'app_outbox' => 'Giden kutusu',
	'app_inbox' => 'Gelen kutusu',
	'app_recipient' => 'Alıcı',
	'app_reset_password' => 'Şifreyi yenile',
	'app_reset_password_woops' => '<strong>Tüh!</strong> input: ile ilgili sorunlar var',
	'app_email_line1' => 'Hesabınızla ilgili şifre yenileme talebi aldık. ',
	'app_email_line2' => 'Şifre yenileme talebinden bulunmadıysanız bu mesajı görmezden geliniz.',
	'app_copy_paste_url_bellow' => 'lütfen üstteki URLyi yeni bir sayfada açınız.',
	'app_stripe_transactions' => 'Stripe Alışverişleri',
	'app_upgrade_to_premium' => 'Premiuma Geçin',
	'app_there_were_problems_with_input' => 'Girdide sorunlar var',
	'app_whoops' => 'Tüh!',
	'app_csvImport' => 'CSV Yükleme',
	'app_csv_file_to_import' => 'Yüklenecek CSV dosyası',
	'app_change_notifications_field_2_label' => 'Kayıt Eklendiğinde',
	'app_when_crud' => 'CRUD Oluşturulurken',
	'app_file_contains_header_row' => 'Dosyada başlık sütunu mevcut mu?',
	'app_parse_csv' => 'Yükle',
	'app_import_data' => 'Veriyi İçeri Al',
	'app_imported_rows_to_table' => ':rows sütunları :table tablosuna eklenmiştir',
	'global_title' => 'E-Auction',
];