<?php

$base1 = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
 $base1 .= '://'.$_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
  $base = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
 $base .= '://'.$_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);


 // $base =  '/';

define('PREFIX1', $base1.'public/');
define('BASE_PATH', $base.'/');
define('PREFIX', $base);


define('ADMINLTE', PREFIX1.'adminlte/');


define('BOOTSTRAP_ADMINLTE', ADMINLTE.'bootstrap/');
define('CSS_BOOTSTRAP_ADMINLTE', BOOTSTRAP_ADMINLTE.'css/');

define('CSS_ADMINLTE',ADMINLTE.'css/');
define('CSS_ADMINLTE_ONLINE', CSS_ADMINLTE.'online/');


define('SKINS_CSS_ADMINLTE',CSS_ADMINLTE.'skins/');

define('JS_ADMINLTE',ADMINLTE.'js/');
define('JS_ADMINLTE_ONILNE',JS_ADMINLTE.'online/');


define('PLUGINS_ADMINLTE',ADMINLTE.'plugins/');

define('PAGINATE_RECORDS',9);

define('CSS', PREFIX1.'css/');
define('JS', PREFIX1.'js/');

define('JS_ADMIN', JS.'admin/js/');
define('CSS_ADMIN', JS.'admin/css/');

define('FONTAWSOME', PREFIX1.'font-awesome/css/');
define('IMAGES', PREFIX1.'images/');
define('AJAXLOADER', IMAGES.'ajax-loader.svg');
define('AJAXLOADER_FADEIN_TIME', 100);
define('AJAXLOADER_FADEOUT_TIME', 100);


define('HOME_AJAXLOADER_FADEIN_TIME', 1000);
define('HOME_AJAXLOADER_FADEOUT_TIME', 1000);

define('RECORDS_PER_PAGE', '8');
define('OWNER_ROLE_ID', '1');
define('USER_ROLE_ID', '2');


define('UPLOADS', PREFIX1.'uploads/');
define('IMAGE_PATH_SETTINGS', UPLOADS.'settings/');



define('PAYMENT_STATUS_CANCELLED', 'cancelled');
define('PAYMENT_STATUS_SUCCESS', 'success');
define('PAYMENT_STATUS_PENDING', 'pending');
define('PAYMENT_RECORD_MAXTIME', '30');//TIME IN MINUTES


define('PAYMENT_FOR_BIDDING','bidding');
define('PAYMENT_FOR_BUY_AUCTION','buy_auction');



define('HOME', PREFIX1.'home/');
define('CSS_HOME',HOME.'css/');
define('CSS_HOME_ONLINE',CSS_HOME.'online/');

define('JS_HOME',HOME.'js/');
define('JS_HOME_ONLINE',JS_HOME.'online/');

define('FONTS_HOME',HOME.'fonts/');
define('FONTS_HOME_ONLINE',FONTS_HOME.'online/');

define('IMAGES_HOME',HOME.'images/');

//alertify
define('ALERTIFY', HOME.'alertifyjs/');

//LIVE AUCTION
define('LIVE_AUCTION', HOME.'liveauction/');



define('URL_HOME', PREFIX.'index');



define('URL_USERS_REGISTER', PREFIX.'register');
define('URL_USERS_LOGIN', PREFIX.'login');
define('URL_FORGOT_PASSWORD', PREFIX.'users/forgot-password');

define('URL_FACEBOOK_LOGIN', PREFIX.'auth/facebook');
define('URL_GOOGLE_LOGIN', PREFIX.'auth/google');



define('AUCTION_IMAGES_PATH', 'public/uploads/auctions/');
define('AUCTION_IMAGES_THUMBPATH','public/uploads/auctions/thumbnail/');

define('USER_IMAGES_PATH', 'public/uploads/users/');
define('USER_IMAGES_THUMBPATH','public/uploads/users/thumbnail/');

define('USER_IMAGES_PATH_URL', PREFIX.'public/uploads/users/');
define('USER_IMAGES_THUMBPATH_URL',PREFIX.'public/uploads/users/thumbnail/');


define('AUCTION_IMAGES_PATH_URL', PREFIX.'public/uploads/auctions/');
define('AUCTION_IMAGES_THUMBPATH_URL',PREFIX.'public/uploads/auctions/thumbnail/');

define('AUCTION_THUMB_IMAGE_DEFAULT_URL',PREFIX.'public/uploads/auctions/thumbnail/default.png');



define('SELLER_LOGO_PATH', 'public/uploads/company-logos/');
define('SELLER_LOGO_THUMB_PATH','public/uploads/company-logos/thumbnail/');


define('SELLER_LOGO_PATH_URL', PREFIX.'public/uploads/company-logos/');
define('SELLER_LOGO_THUMB_PATH_URL', PREFIX.'public/uploads/company-logos/thumbnail/');



//PERMISSIONS MODULE
define('URL_PERMISSIONS', PREFIX.'permissions');
define('URL_PERMISSIONS_ADD', PREFIX.'permissions/create');
define('URL_PERMISSIONS_EDIT', PREFIX.'permissions/edit');
define('URL_PERMISSIONS_VIEW', PREFIX.'permissions/view');
define('URL_PERMISSIONS_DELETE', PREFIX.'permissions/delete');


//ROLES MODULE
define('URL_ROLES', PREFIX.'roles');
define('URL_ROLES_ADD', PREFIX.'roles/create');
define('URL_ROLES_EDIT', PREFIX.'roles/edit');
define('URL_ROLES_VIEW', PREFIX.'roles/view');
define('URL_ROLES_DELETE', PREFIX.'roles/delete');


//CATEGORIES MODULE
define('URL_CATEGORIES', PREFIX.'categories');
define('URL_CATEGORIES_ADD', PREFIX.'categories/create');
define('URL_CATEGORIES_EDIT', PREFIX.'categories/edit');
define('URL_CATEGORIES_VIEW', PREFIX.'categories/view');
define('URL_CATEGORIES_DELETE', PREFIX.'categories/delete');


//SUB CATEGORIES MODULE
define('URL_SUB_CATEGORIES', PREFIX.'sub_catogories');
define('URL_SUB_CATEGORIES_ADD', PREFIX.'sub_catogories/create');
define('URL_SUB_CATEGORIES_EDIT', PREFIX.'sub_catogories/edit');
define('URL_SUB_CATEGORIES_VIEW', PREFIX.'sub_catogories/view');
define('URL_SUB_CATEGORIES_DELETE', PREFIX.'sub_catogories/delete');




//LOCATIONS MODULE
define('URL_COUNTRIES', PREFIX.'countries');
define('URL_COUNTRIES_ADD', PREFIX.'countries/create');
define('URL_COUNTRIES_EDIT', PREFIX.'countries/edit');
define('URL_COUNTRIES_VIEW', PREFIX.'countries/view');
define('URL_COUNTRIES_DELETE', PREFIX.'countries/delete');


define('URL_STATES', PREFIX.'states');
define('URL_STATES_ADD', PREFIX.'states/create');
define('URL_STATES_EDIT', PREFIX.'states/edit');
define('URL_STATES_VIEW', PREFIX.'states/view');
define('URL_STATES_DELETE', PREFIX.'states/delete');


define('URL_CITIES', PREFIX.'cities');
define('URL_CITIES_ADD', PREFIX.'cities/create');
define('URL_CITIES_EDIT', PREFIX.'cities/edit');
define('URL_CITIES_VIEW', PREFIX.'cities/view');
define('URL_CITIES_DELETE', PREFIX.'cities/delete');
define('URL_GET_STATES', PREFIX.'cities/get-states');



//FAQS CATEGORIES
define('URL_FAQ_CATEGORIES', PREFIX.'faq_categories');
define('URL_FAQ_CATEGORIES_ADD', PREFIX.'faq_categories/create');
define('URL_FAQ_CATEGORIES_EDIT', PREFIX.'faq_categories/edit');
define('URL_FAQ_CATEGORIES_VIEW', PREFIX.'faq_categories/view');
define('URL_FAQ_CATEGORIES_DELETE', PREFIX.'faq_categories/delete');


//FAQ QUESTIONS
define('URL_FAQ_QUESTIONS', PREFIX.'faq_questions');
define('URL_FAQ_QUESTIONS_ADD', PREFIX.'faq_questions/create');
define('URL_FAQ_QUESTIONS_EDIT', PREFIX.'faq_questions/edit');
define('URL_FAQ_QUESTIONS_VIEW', PREFIX.'faq_questions/view');
define('URL_FAQ_QUESTIONS_DELETE', PREFIX.'faq_questions/delete');


//LANGUAGES MODULE
define('GOOGLE_TRANSLATE_LANGUAGES_LINK', 'https://cloud.google.com/translate/docs/languages');
define('URL_LANGUAGES_LIST', PREFIX.'languages/list');
define('URL_LANGUAGES_ADD', PREFIX.'languages/add');
define('URL_LANGUAGES_EDIT', PREFIX.'languages/edit');
define('URL_LANGUAGES_UPDATE_STRINGS', PREFIX.'languages/update-strings/');
define('URL_LANGUAGES_DELETE', PREFIX.'languages/delete');
define('URL_LANGUAGES_MAKE_DEFAULT', PREFIX.'languages/make-default/');
 


//PAGES
define('URL_PAGES', PREFIX.'content_pages');
define('URL_PAGES_ADD', PREFIX.'content_pages/create');
define('URL_PAGES_EDIT', PREFIX.'content_pages/edit');
define('URL_PAGES_VIEW', PREFIX.'content_pages/view');
define('URL_PAGES_DELETE', PREFIX.'content_pages/delete');


//SETTINGS MODULE
define('URL_SETTINGS_LIST', PREFIX.'mastersettings/settings');
define('URL_SETTINGS_VIEW', PREFIX.'mastersettings/settings/view/');
define('URL_SETTINGS_ADD', PREFIX.'mastersettings/settings/add');
define('URL_SETTINGS_EDIT', PREFIX.'mastersettings/settings/edit/');
define('URL_SETTINGS_DELETE', PREFIX.'mastersettings/settings/delete/');
define('URL_SETTINGS_GETLIST', PREFIX.'mastersettings/settings/getList/');
define('URL_SETTINGS_ADD_SUBSETTINGS', PREFIX.'mastersettings/settings/add-sub-settings/');


//TESTIMONIALS
define('URL_TETSIMONIALS', PREFIX.'testmonies');
define('URL_TETSIMONIALS_ADD', PREFIX.'testmonies/create');
define('URL_TETSIMONIALS_EDIT', PREFIX.'testmonies/edit');
define('URL_TETSIMONIALS_VIEW', PREFIX.'testmonies/view');
define('URL_TETSIMONIALS_DELETE', PREFIX.'testmonies/delete');


//EMAIL TEMPLATES MODULE
define('URL_EMAIL_TEMPLATES', PREFIX.'templates');
define('URL_EMAIL_TEMPLATES_ADD', PREFIX.'templates/create');
define('URL_EMAIL_TEMPLATES_EDIT', PREFIX.'templates/edit');
define('URL_EMAIL_TEMPLATES_DELETE', PREFIX.'templates/delete/');


//USERS MODULE
define('URL_USERS', PREFIX.'users');
define('URL_USERS_ADD', PREFIX.'users/create');
define('URL_USERS_EDIT', PREFIX.'users/edit');
define('URL_USERS_VIEW', PREFIX.'users/view');
define('URL_USERS_DELETE', PREFIX.'users/delete');
define('URL_USERS_CHANGE_PASSWORD', PREFIX.'users/change-password/');
define('URL_USERS_STATUS', PREFIX.'users/status');
define('URL_GET_CITIES',PREFIX.'users/get-cities');
define('URL_LOGOUT', PREFIX.'logout');





//AUCTIONS
define('URL_LIST_AUCTIONS', PREFIX.'auctions');
define('URL_AUCTIONS_ADD', PREFIX.'auctions/create');
define('URL_AUCTIONS_EDIT', PREFIX.'auctions/edit');
define('URL_AUCTIONS_VIEW', PREFIX.'auctions/view/');
define('URL_AUCTIONS_DELETE', PREFIX.'auctions/delete/');
define('URL_AUCTIONS_GETLIST', PREFIX.'auctions/getList/');
define('URL_GET_AUCTION_SUB_CATEGORIES', PREFIX.'auctions/get-sub-categories');
define('URL_AUCTIONS_UPLOAD_IMAGES', PREFIX.'auctions/upload-images/');
define('URL_AUCTIONS_DELETE_IMAGES', PREFIX.'auctions/delete-image/');



//NEWS LETTER
define('URL_ADD_SUBSCRIBER', PREFIX.'subscriber/create');
define('URL_LIST_NEWS_LETTER', PREFIX.'admin/create_letters');
define('URL_NEWS_LETTER_ADD', PREFIX.'admin/create_letters/create');
define('URL_NEWS_LETTER_VIEW', PREFIX.'admin/create_letters/view');
define('URL_NEWS_LETTER_DELETE', PREFIX.'auctions/create_letters/delete');


//MESSENGER MODULE
define('URL_MESSENGER', PREFIX.'messenger');
define('URL_MESSENGER_ADD', PREFIX.'messenger/create');
define('URL_MESSENGER_EDIT', PREFIX.'messenger/edit');
define('URL_MESSENGER_VIEW', PREFIX.'messenger/view');
define('URL_MESSENGER_DELETE', PREFIX.'messenger/delete');
define('URL_MESSENGER_INBOX', PREFIX.'messenger/inbox');
define('URL_MESSENGER_OUTBOX', PREFIX.'messenger/outbox');

//SMS
define('URL_SEND_SMS', PREFIX.'sms/index');
define('URL_SEND_SMS_NOW', PREFIX.'sms/send');

define('URL_USER_NOTIFICATIONS', PREFIX.'user/notifications');
define('URL_USER_NOTIFICATIONS_VIEW', PREFIX.'user/notifications/show/');
define('URL_GET_SELLER_AUCTIONS', PREFIX.'admin/reports/seller-auctions');


//SHOW PAYMENT HISTORY TO ADMIN
define('URL_PAYMENT_HISTORY', PREFIX.'payments/index');
define('URL_PAYMENT_DETAILS', PREFIX.'payments/view');

define('URL_CONTACT_US', PREFIX.'contact-us');
define('URL_FAQS', PREFIX.'faqs');
define('URL_GET_CATEGORY_FAQS', PREFIX.'pages/get-categories-faqs');
define('URL_HOME_AUCTIONS',PREFIX.'view-auctions');
define('URL_HOME_GET_AUCTIONS',PREFIX.'get-auctions');
define('URL_HOME_AUCTION_DETAILS',PREFIX.'auction-details');


//live auctions
define('URL_LIVE_AUCTIONS',PREFIX.'live-auctions');



//Add auctions to fav auctions
define('URL_ADD_FAVAUCTION', PREFIX.'auction/add_favourite');

//Bidder fav auctions
define('URL_USERS_FAV_AUCTIONS', PREFIX.'bidder/fav-auctions');
define('URL_USERS_REMOVE_FAV_AUCTION', PREFIX.'bidder/remove-fav-auction');



//Bidder participated auctions
define('URL_BIDDER_AUCTIONS', PREFIX.'bidder/my-auctions');

//Bidder bought auctions
define('URL_BIDDER_BOUGHT_AUCTIONS', PREFIX.'bidder/bought-auctions');

//bidder billing address
define('URL_USER_BILLING_ADDRESS', PREFIX.'billing-address');

//bidder shipping address
define('URL_USER_SHIPPING_ADDRESS', PREFIX.'shipping-address');

//Bidder payments
define('URL_BIDDER_PAYMENTS', PREFIX.'bidder/payments');
define('URL_BIDDER_PAYMENT_DETAILS', PREFIX.'bidder/payment-details');


define('URL_DASHBOARD',PREFIX.'dashboard');
define('URL_SAVE_BID', PREFIX.'auction/save-bid');
define('URL_BID_HISTORY', PREFIX.'auctions/bid-history');
define('URL_BID_EMAIL_NOTIFICATION', PREFIX.'auctions/send-email-bid');

//BID PAYMENT CONFIRMATION
define('URL_BID_PAYMENT_CONFIRM', PREFIX.'bidder/bid-payment');
//BUY NOW AUCTION PAYMENT CONFIRMATION
define('URL_BID_AUCTION_PAYMENT', PREFIX.'bidder/auction-payment');


//PAYMENT URLS
define('URL_PAYNOW', PREFIX.'payments/paynow');
define('URL_PAYPAL_PAYMENT_SUCCESS', PREFIX.'payments/paypal/status-success');
define('URL_PAYPAL_PAYMENT_CANCEL', PREFIX.'payments/paypal/status-cancel');
define('URL_PAYU_PAYMENT_SUCCESS', PREFIX.'payments/payu/status-success');
define('URL_PAYU_PAYMENT_CANCEL', PREFIX.'payments/payu/status-cancel');

define('URL_STRIPE_PAYMENT_CONFIRMATION', PREFIX.'stripe-confirmation');

define('URL_STRIPE_PAYMENT', PREFIX.'stripe-payment');
define('CRON_URL_AUCTION_STATUS', PREFIX.'update-auction');


//THEME
define('CHANGE_THEME', PREFIX.'change-theme');

//INSTALL
define('URL_INSTALL_SYSTEM', PREFIX.'install');
define('URL_UPDATE_INSTALLATATION_DETAILS', PREFIX.'update-details');
define('URL_FIRST_USER_REGISTER', PREFIX.'install/register');


define('DOWNLOAD_EMPTY_DATA_DATABASE', PREFIX.'public/downloads/database/install.sql');
define('DOWNLOAD_SAMPLE_DATA_DATABASE', PREFIX.'public/downloads/database/install_dummy_data.sql');

define('URL_TEST', PREFIX.'fire');




define('URL_LIVE_AUCTION', PREFIX.'live_auction');
define('URL_LIVE_AUCTION_INFO', PREFIX.'live-info');
define('URL_SAVE_LIVE_AUCTION_BID', PREFIX.'save-live-bid');