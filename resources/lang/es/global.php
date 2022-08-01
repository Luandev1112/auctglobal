<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',			'approved' => 'Approved',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Hora',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
	'app_create' => 'Crear',
	'app_save' => 'Guardar',
	'app_edit' => 'Editar',
	'app_view' => 'Ver',
	'app_update' => 'Actualizar',
	'app_list' => 'Listar',
	'app_no_entries_in_table' => 'Sin valores en la tabla',
	'app_custom_controller_index' => 'Índice del controlador personalizado (index).',
	'app_logout' => 'Salir',
	'app_add_new' => 'Agregar',
	'app_are_you_sure' => 'Estás seguro?',
	'app_back_to_list' => 'Regresar a la lista?',
	'app_dashboard' => 'Panel de control',
	'app_delete' => 'Eliminar',
	'app_restore' => 'Restaurar',
	'app_permadel' => 'Borrar permanentemente',
	'app_all' => 'Todos',
	'app_trash' => 'Papelera',
	'app_delete_selected' => 'Eliminar seleccionado',
	'app_category' => 'Categoría',
	'app_categories' => 'Categorías',
	'app_title' => 'Título',
	'app_roles' => 'Roles',
	'app_role' => 'Rol',
	'app_user_management' => 'Administración de usuarios',
	'app_users' => 'Usuarios',
	'app_user' => 'Usuario',
	'app_name' => 'Nombre',
	'app_email' => 'Correo',
	'app_password' => 'Contraseña',
	'app_remember_token' => 'Recordar token',
	'app_permissions' => 'Permisos',
	'app_client' => 'Cliente',
	'app_current_password' => 'Contraseña actual',
	'app_new_password' => 'Contraseña nueva',
	'app_password_confirm' => 'Confirmación de contraseña nueva',
	'app_dashboard_text' => 'Ha iniciado sesión',
	'app_forgot_password' => 'Olvidó su contraseña?',
	'app_remember_me' => 'Recuérdame',
	'app_login' => 'Iniciar sesión',
	'app_copy' => 'Copiar',
	'app_reset_password' => 'Restablecer contraseña',
	'app_email_greet' => 'Hola',
	'app_confirm_password' => 'Confirma la contraseña',
	'app_please_select' => 'Por favor seleccione',
	'app_questions' => 'Preguntas',
	'app_question' => 'Pregunta',
	'app_answer' => 'Respuesta',
	'app_project' => 'Proyecto',
	'app_expenses' => 'Gastos',
	'app_expense' => 'Gasto',
	'app_amount' => 'Cantidad',
	'app_address' => 'Dirección',
	'app_contacts' => 'Contactos',
	'app_first_name' => 'Nombre',
	'app_last_name' => 'Apellido',
	'app_phone' => 'Teléfono',
	'app_category_name' => 'Nombre de categoría',
	'app_products' => 'Productos',
	'app_product_name' => 'Nombre de producto',
	'app_price' => 'Precio',
	'app_tag' => 'Etiqueta',
	'app_photo1' => 'Foto 1',
	'app_photo2' => 'Foto 2',
	'app_photo3' => 'Foto 3',
	'app_calendar' => 'Calendario',
	'app_tasks' => 'Tareas',
	'app_status' => 'Estado',
	'app_messages' => 'Mensajes',
	'app_you_have_no_messages' => 'No tienes mensajes.',
	'app_all_messages' => 'Todos los mensajes',
	'app_new_message' => 'Nuevo mensaje',
	'app_change_password' => 'Cambiar contraseña',
	'app_csv' => 'CSV',
	'app_print' => 'Imprimir',
	'app_excel' => 'Excel',
	'app_colvis' => 'Visibilidad de columnas',
	'app_pdf' => 'PDF',
	'app_register' => 'Registro',
	'app_registration' => 'Registración',
	'app_not_approved_p' => 'La cuenta no ha sido aprobada por el Administrador. Por favor, sea paciente e intentelo nuevamente.',
	'app_whoops' => 'Whoops!',
	'app_serial_number' => 'Número de serie',
	'app_text' => 'Texto',
	'app_show' => 'Mostrar',
	'app_sample_category' => 'Categoria de ejemplo',
	'app_sample_question' => 'Pregunta de ejemplo',
	'app_sample_answer' => 'Respuesta de ejemplo',
	'app_user_actions' => 'Acciones de Usuario (Traza)',
	'app_action' => 'Acciones',
	'app_description' => 'Descripcion',
	'app_valid_from' => 'Valido Desde',
	'app_valid_to' => 'Valido Hasta',
	'app_discount_amount' => 'Cantidad Descuento',
	'app_discount_percent' => 'Descuento Percentil',
	'app_coupons_amount' => 'Cantidad de Cupones',
	'app_coupons' => 'Cupones',
	'app_code' => 'Codigo',
	'app_redeem_time' => 'Tiempo Redencion',
	'app_coupon_management' => 'Administracion de Cupones',
	'app_time_management' => 'Administracion de Tiempo',
	'app_projects' => 'Proyectos',
	'app_reports' => 'Reportes',
	'app_time_entries' => 'Registros de Tiempos',
	'app_work_type' => 'Tipo de Trabajo',
	'app_start_time' => 'Tiempo de Inicio',
	'app_end_time' => 'Tiempo Finalizacion',
	'app_expense_category' => 'Tipo de Gasto',
	'app_expense_management' => 'Administracion de Gastos',
	'app_entry_date' => 'Fecha de Ingreso',
	'app_monthly_report' => 'Reporte Mensual',
	'app_companies' => 'Compañías',
	'app_company_name' => 'Nombre de la Compañía',
	'app_website' => 'Sitio Web',
	'app_contact_management' => 'Administracion de Contactos',
	'app_company' => 'Compañía',
	'app_photo' => 'Foto (max 8mb)',
	'app_product_management' => 'Administracion de Producto',
	'app_tags' => 'Etiquetas',
	'app_statuses' => 'Estatus',
	'app_task_management' => 'Administracion de Tareas',
	'app_attachment' => 'Archivo Adjunto',
	'app_due_date' => 'Fecha Vencimiento',
	'app_assigned_to' => 'Asignado a',
	'app_assets' => 'Activos',
	'app_asset' => 'Activo',
	'app_location' => 'Ubicacion',
	'app_locations' => 'Lugar',
	'app_assigned_user' => 'Asignado a (Usuario)',
	'app_notes' => 'Notas',
	'app_assets_history' => 'Movimientos de Inventario',
	'app_assets_management' => 'Inventario Administracion',
	'app_group_by' => 'Agrupar por',
	'app_chart_type' => 'Tipo de Grafica',
	'app_create_new_report' => 'Crear Nuevo Reporte',
	'app_no_reports_yet' => 'Aun Sin reportes',
	'app_created_at' => 'Creado el',
	'app_updated_at' => 'Actualizado el',
	'app_deleted_at' => 'Eliminado el',
	'app_outbox' => 'Bandeja de salida',
	'app_inbox' => 'Bandeja de entrada',
	'app_recipient' => 'Destinatario',
	'app_subject' => 'Asunto',
	'app_message' => 'Mensaje',
	'app_send' => 'Enviar',
	'app_reply' => 'Responder',
	'app_country' => 'País',
	'app_file' => 'Archivo',
	'app_income_source' => 'Fuente de Ingresos',
	'app_income_sources' => 'Fuente de Egresos',
	'app_budget' => 'Presupuesto',
	'app_currency' => 'Moneda',
	'app_email_regards' => 'Saludos',
	'app_import_data' => 'Importar datos',
	'app_faq_management' => 'Administración de Preguntas Frecuentes',
	'app_administrator_can_create_other_users' => 'Administrador (puede crear otros usuarios)',
	'app_simple_user' => 'Usuario Simple',
	'app_action_model' => 'Modelo de Acción',
	'app_action_id' => 'ID de Acción',
	'app_time' => 'Hora',
	'app_campaign' => 'Campaña',
	'app_campaigns' => 'Campañas',
	'app_work_types' => 'Tipos de Trabajo',
	'app_expense_categories' => 'Tipos de Gasto',
	'app_income_categories' => 'Tipo de Ingreso',
	'app_phone1' => 'Teléfono 1',
	'app_phone2' => 'Teléfono 2',
	'app_content_management' => 'Administración de Contenido',
	'app_excerpt' => 'Extracto',
	'app_featured_image' => 'Imagen Destacada',
	'app_pages' => 'Paginas',
	'app_axis' => 'Eje',
	'app_reports_x_axis_field' => 'eje-x por favor escoja uno de los campos de fecha/hora',
	'app_reports_y_axis_field' => 'eje-y por favor escoja uno de los campos numéricos',
	'app_select_crud_placeholder' => 'Por favor seleccione uno de sus CRUDs',
	'app_select_dt_placeholder' => 'Por favor seleccione uno de los campos de fecha/hora',
	'app_aggregate_function_use' => 'Agregue función a utilizar',
	'app_x_axis_group_by' => 'eje-x agrupar por',
	'app_x_axis_field' => 'eje-x campo (fecha/hora)',
	'app_y_axis_field' => 'eje-y campo',
	'app_integer_float_placeholder' => 'Por favor seleccione uno de los campos entero/flotante',
	'app_change_notifications_field_1_label' => 'Enviar notificación al usuario por email',
	'app_change_notifications_field_2_label' => 'Cuando se ingrese en CRUD',
	'app_select_users_placeholder' => 'Por favor seleccione uno de sus Usuarios',
	'app_is_created' => 'es creado',
	'app_is_updated' => 'es actualizado',
	'app_is_deleted' => 'es borrado',
	'app_notifications' => 'Notificaciones',
	'app_notify_user' => 'Notificar Usuario',
	'app_when_crud' => 'Cuando CRUD',
	'app_create_new_notification' => 'crear nueva Notificacion',
	'app_upgrade_to_premium' => 'Actualizar a Premium',
	'app_calendar_sources' => 'Fuentes de Calendario',
	'app_new_calendar_source' => 'Crear una nueva fuente de calendario',
	'app_crud_title' => 'Título del CRUD',
	'app_crud_date_field' => 'Campo fecha del CRUD',
	'app_prefix' => 'Prefijo',
	'app_label_field' => 'Etiqueta del campo',
	'app_suffix' => 'Sufijo',
	'app_no_calendar_sources' => 'Sin fuentes de calendario aun.',
	'app_crud_event_field' => 'Etiqueta de campo de evento',
	'app_create_new_calendar_source' => 'Crear nueva fuente de Calendario',
	'app_edit_calendar_source' => 'Editar fuente de Calendario',
	'app_client_management' => 'Administración de clientes',
	'app_client_management_settings' => 'Configuración de administración de clientes',
	'app_client_status' => 'Estado del Cliente',
	'app_clients' => 'Clientes',
	'app_client_statuses' => 'Estados del Cliente',
	'app_currencies' => 'Monedas',
	'app_main_currency' => 'Moneda principal',
	'app_documents' => 'Documents',
	'app_not_approved_title' => 'No estas aprobado',
	'app_there_were_problems_with_input' => 'Hubo problemas con esta entrada',
	'app_csvImport' => 'Importación CSV',
	'app_csv_file_to_import' => 'Archivo CSV a importar',
	'app_parse_csv' => 'CSV ni o',
	'app_imported_rows_to_table' => 'Importación de :rows líneas a la tabla :table',
	'app_if_you_are_having_trouble' => 'Si estás teniendo problemas dale click a ',
	'app_skype' => 'Skype',
	'app_start_date' => 'Fecha inicio',
	'app_project_status' => 'Estado del proyecto',
	'app_transactions' => 'Operaciones',
	'app_fee_percent' => 'Porcentaje de tarifa',
	'app_note_text' => 'Nota de texto',
	'app_project_statuses' => 'Estados del proyecto',
	'app_transaction_types' => 'Tipos de operación',
	'app_transaction_type' => 'Tipo de operación',
	'app_transaction_date' => 'Fecha de operación',
	'app_reset_password_woops' => '<strong>¡Ups!</strong> Hubo problemas con la entrada:',
	'app_copy_paste_url_bellow' => 'botón, copiar y pegar la siguiente URL en tu navegador',
	'app_file_contains_header_row' => '¿El archivo contiene fila de encabezado?',
	'app_stripe_transactions' => 'Transacciones con Stripe',
	'app_email_line1' => 'Estás recibiendo este mensaje porque alguien solicitó restablecer la contraseña de esta cuenta.',
	'app_email_line2' => 'Si no solicitado el restablecimiento de tu contraseña no es necesario que hagas nada.',
	'global_title' => 'E-Auction',
];