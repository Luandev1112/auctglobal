<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

if (env('DB_DATABASE')=="")
{
   Route::get('/', 'InstallatationController@index');
   Route::get('/install', 'InstallatationController@index');
   Route::post('/update-details', 'InstallatationController@updateDetails');
   Route::post('/install', 'InstallatationController@installProject');
}

Route::post('install/register', 'InstallatationController@registerUser');



Route::get('/', function () {
    return redirect(URL_HOME);
});

   
// Route::get('example','HomeController@checkProcess');


Route::get('dashboard','HomeController@index');
Route::get('index','Auth\LoginController@index');

//change theme
Route::get('change-theme/{slug?}','Auth\LoginController@changeTheme');

Route::get('test/images', 'PagesController@imageGallary');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@postLogin')->name('auth.login');

// $this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::get('logout', function(){

    if(Auth::check())
        flash(getPhrase('success'),getPhrase('logged_out_successfully'),'success');

    Auth::logout();
    return redirect(URL_USERS_LOGIN);
})->name('auth.logout');



/*Route::get('fire', function () {
    // dd("hello");
    // this fires the event
    event(new App\Events\EventName(20));
    return "event fired";
});

Route::get('/test', function () {
    // this checks for the event
    return view('bidder/test_live');
    // return view('test');
});*/




// Change Password Routes...
/*$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');*/

Route::get('users/change-password/{slug}', 'Admin\UsersController@changePassword');
Route::patch('users/change-password/{slug}', 'Admin\UsersController@updatePassword');


// Password Reset Routes...
/*$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');
*/

Route::post('users/forgot-password', 'Auth\ForgotPasswordController@resetUsersPassword');


// Registration Routes..
/*$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');
*/



Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
Route::post('register', 'Auth\RegisterController@register')->name('auth.register');



// Social Login Routes..
/*Route::get('login/{driver}', 'Auth\LoginController@redirectToSocial')->name('auth.login.social');
Route::get('{driver}/callback', 'Auth\LoginController@handleSocialCallback')->name('auth.login.social_callback');*/

Route::get('login/{driver}', 'Auth\LoginController@redirectToSocial')->name('auth.login.social');
Route::get('{driver}/callback', 'Auth\LoginController@handleSocialCallback');


// date_default_timezone_set(getSetting('system_timezone','site_settings'));


Route::get('home', 'HomeController@index');

Route::group(['middleware' => ['auth', 'approved'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    


    
    Route::get('/reports/auction-report', 'Admin\ReportsController@auctionReport');
    Route::get('/reports/seller-wise-report', 'Admin\ReportsController@sellerWiseReport');
    
    Route::get('/reports/time-wise-report', 'Admin\ReportsController@timeWiseReport');


    Route::get('/reports/seller-auctions', 'Admin\ReportsController@sellerAuctions');
    Route::post('/reports/seller-auctions', 'Admin\ReportsController@getSellerAuctions');



    Route::resource('site_settings', 'Admin\SiteSettingsController');
    Route::post('site_settings_mass_destroy', ['uses' => 'Admin\SiteSettingsController@massDestroy', 'as' => 'site_settings.mass_destroy']);
    Route::post('site_settings_restore/{id}', ['uses' => 'Admin\SiteSettingsController@restore', 'as' => 'site_settings.restore']);
    Route::delete('site_settings_perma_del/{id}', ['uses' => 'Admin\SiteSettingsController@perma_del', 'as' => 'site_settings.perma_del']);




    Route::resource('auction_settings', 'Admin\AuctionSettingsController');
    Route::post('auction_settings_mass_destroy', ['uses' => 'Admin\AuctionSettingsController@massDestroy', 'as' => 'auction_settings.mass_destroy']);
    Route::post('auction_settings_restore/{id}', ['uses' => 'Admin\AuctionSettingsController@restore', 'as' => 'auction_settings.restore']);
    Route::delete('auction_settings_perma_del/{id}', ['uses' => 'Admin\AuctionSettingsController@perma_del', 'as' => 'auction_settings.perma_del']);


    Route::resource('currency_settings', 'Admin\CurrencySettingsController');
    Route::post('currency_settings_mass_destroy', ['uses' => 'Admin\CurrencySettingsController@massDestroy', 'as' => 'currency_settings.mass_destroy']);
    Route::post('currency_settings_restore/{id}', ['uses' => 'Admin\CurrencySettingsController@restore', 'as' => 'currency_settings.restore']);
    Route::delete('currency_settings_perma_del/{id}', ['uses' => 'Admin\CurrencySettingsController@perma_del', 'as' => 'currency_settings.perma_del']);


    Route::resource('time_settings', 'Admin\TimeSettingsController');
    Route::post('time_settings_mass_destroy', ['uses' => 'Admin\TimeSettingsController@massDestroy', 'as' => 'time_settings.mass_destroy']);
    Route::post('time_settings_restore/{id}', ['uses' => 'Admin\TimeSettingsController@restore', 'as' => 'time_settings.restore']);
    Route::delete('time_settings_perma_del/{id}', ['uses' => 'Admin\TimeSettingsController@perma_del', 'as' => 'time_settings.perma_del']);


    Route::resource('seo_settings', 'Admin\SeoSettingsController');
    Route::post('seo_settings_mass_destroy', ['uses' => 'Admin\SeoSettingsController@massDestroy', 'as' => 'seo_settings.mass_destroy']);
    Route::post('seo_settings_restore/{id}', ['uses' => 'Admin\SeoSettingsController@restore', 'as' => 'seo_settings.restore']);
    Route::delete('seo_settings_perma_del/{id}', ['uses' => 'Admin\SeoSettingsController@perma_del', 'as' => 'seo_settings.perma_del']);


    /*Route::resource('paypals', 'Admin\PaypalsController');
    Route::post('paypals_mass_destroy', ['uses' => 'Admin\PaypalsController@massDestroy', 'as' => 'paypals.mass_destroy']);
    Route::post('paypals_restore/{id}', ['uses' => 'Admin\PaypalsController@restore', 'as' => 'paypals.restore']);
    Route::delete('paypals_perma_del/{id}', ['uses' => 'Admin\PaypalsController@perma_del', 'as' => 'paypals.perma_del']);*/




    
    Route::resource('creates', 'Admin\CreatesController');
    Route::post('creates_mass_destroy', ['uses' => 'Admin\CreatesController@massDestroy', 'as' => 'creates.mass_destroy']);
    Route::post('creates_restore/{id}', ['uses' => 'Admin\CreatesController@restore', 'as' => 'creates.restore']);
    Route::delete('creates_perma_del/{id}', ['uses' => 'Admin\CreatesController@perma_del', 'as' => 'creates.perma_del']);





    Route::resource('social_logins', 'Admin\SocialLoginsController');
    Route::post('social_logins_mass_destroy', ['uses' => 'Admin\SocialLoginsController@massDestroy', 'as' => 'social_logins.mass_destroy']);
    Route::post('social_logins_restore/{id}', ['uses' => 'Admin\SocialLoginsController@restore', 'as' => 'social_logins.restore']);
    Route::delete('social_logins_perma_del/{id}', ['uses' => 'Admin\SocialLoginsController@perma_del', 'as' => 'social_logins.perma_del']);




    Route::get('create_letters/view/{slug}', 'Admin\CreateLettersController@show');
    Route::resource('create_letters', 'Admin\CreateLettersController');

    Route::post('create_letters/create', 'Admin\CreateLettersController@store');
    Route::delete('create_letters/delete/{id}', 'Admin\CreateLettersController@massDestroy');

    Route::post('create_letters_mass_destroy', ['uses' => 'Admin\CreateLettersController@massDestroy', 'as' => 'create_letters.mass_destroy']);
    Route::post('create_letters_restore/{id}', ['uses' => 'Admin\CreateLettersController@restore', 'as' => 'create_letters.restore']);
    Route::delete('create_letters_perma_del/{id}', ['uses' => 'Admin\CreateLettersController@perma_del', 'as' => 'create_letters.perma_del']);

    Route::resource('social_networks', 'Admin\SocialNetworksController');


    

    Route::post('/spatie/media/upload', 'Admin\SpatieMediaController@create')->name('media.upload');
    Route::post('/spatie/media/remove', 'Admin\SpatieMediaController@destroy')->name('media.remove');




    Route::post('csv_parse', 'Admin\CsvImportController@parse')->name('csv_parse');
    Route::post('csv_process', 'Admin\CsvImportController@process')->name('csv_process');

    Route::get('language/{lang}', function ($lang) {
        return redirect()->back()->withCookie(cookie()->forever('language', $lang));
    })->name('language');


});

    
   


      //PERMISSIONS ROUTES
    Route::resource('permissions', 'Admin\PermissionsController');

    Route::post('permissions/create','Admin\PermissionsController@store');
    Route::patch('permissions/edit/{slug}','Admin\PermissionsController@update');
    Route::get('permissions/edit/{slug}', 'Admin\PermissionsController@edit');
    Route::get('permissions/view/{slug}', 'Admin\PermissionsController@show');
    Route::delete('permissions/delete/{id}', 'Admin\PermissionsController@massDestroy');

    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);





    //ROLES ROUTES
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles/create','Admin\RolesController@store');
    Route::patch('roles/edit/{slug}','Admin\RolesController@update');
    Route::get('roles/edit/{slug}', 'Admin\RolesController@edit');
    Route::get('roles/view/{slug}', 'Admin\RolesController@show');
    Route::delete('roles/delete/{id}', 'Admin\RolesController@massDestroy');

    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);



    //USERS ROUTES
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'Admin\UserActionsController');

    Route::post('users/create','Admin\UsersController@store');
    Route::patch('users/edit/{slug}','Admin\UsersController@update');
    Route::get('users/edit/{slug}', 'Admin\UsersController@edit');
    Route::get('users/view/{slug}', 'Admin\UsersController@show');
    Route::delete('users/delete/{id}', 'Admin\UsersController@massDestroy');

    Route::get('users/status/{id}/{status}', 'Admin\UsersController@changeStatus');
    Route::post('users/get-cities','Admin\UsersController@getCities');



    //FAQ CATEGORIES
    Route::resource('faq_categories', 'Admin\FaqCategoriesController');

    Route::post('faq_categories/create','Admin\FaqCategoriesController@store');
    Route::patch('faq_categories/edit/{slug}','Admin\FaqCategoriesController@update');
    Route::get('faq_categories/edit/{slug}', 'Admin\FaqCategoriesController@edit');
    Route::get('faq_categories/view/{slug}', 'Admin\FaqCategoriesController@show');
    Route::delete('faq_categories/delete/{id}', 'Admin\FaqCategoriesController@massDestroy');

    Route::post('faq_categories_mass_destroy', ['uses' => 'Admin\FaqCategoriesController@massDestroy', 'as' => 'faq_categories.mass_destroy']);




    //FAQ QUESTIONS
    Route::resource('faq_questions', 'Admin\FaqQuestionsController');
    Route::post('faq_questions_mass_destroy', ['uses' => 'Admin\FaqQuestionsController@massDestroy', 'as' => 'faq_questions.mass_destroy']);

    Route::post('faq_questions/create','Admin\FaqQuestionsController@store');
    Route::patch('faq_questions/edit/{slug}','Admin\FaqQuestionsController@update');
    Route::get('faq_questions/edit/{slug}', 'Admin\FaqQuestionsController@edit');
    Route::get('faq_questions/view/{slug}', 'Admin\FaqQuestionsController@show');
    Route::delete('faq_questions/delete/{id}', 'Admin\FaqQuestionsController@massDestroy');




    // Language Module
    Route::get('languages/list', 'NativeController@index');
    
     
    Route::get('languages/add', 'NativeController@create');
    Route::post('languages/add', 'NativeController@store');
    Route::get('languages/edit/{slug}', 'NativeController@edit');
    Route::patch('languages/edit/{slug}', 'NativeController@update');
    Route::delete('languages/delete/{slug}', 'NativeController@delete');
     
    Route::get('languages/make-default/{slug}', 'NativeController@changeDefaultLanguage');
    Route::get('languages/update-strings/{slug}', 'NativeController@updateLanguageStrings');
    Route::patch('languages/update-strings/{slug}', 'NativeController@saveLanguageStrings');





    Route::get('internal_notifications/read', 'Admin\InternalNotificationsController@read');
    Route::resource('internal_notifications', 'Admin\InternalNotificationsController');
    Route::post('internal_notifications_mass_destroy', ['uses' => 'Admin\InternalNotificationsController@massDestroy', 'as' => 'internal_notifications.mass_destroy']);




    //CONTENT CATEGORIES
    Route::resource('content_categories', 'Admin\ContentCategoriesController');
    Route::post('content_categories_mass_destroy', ['uses' => 'Admin\ContentCategoriesController@massDestroy', 'as' => 'content_categories.mass_destroy']);

   

    Route::post('content_categories/create','Admin\ContentCategoriesController@store');
    Route::patch('content_categories/edit/{slug}','Admin\ContentCategoriesController@update');
    Route::get('content_categories/edit/{slug}', 'Admin\ContentCategoriesController@edit');
    Route::get('content_categories/view/{slug}', 'Admin\ContentCategoriesController@show');
    Route::delete('content_categories/delete/{id}', 'Admin\ContentCategoriesController@massDestroy');




    //CONTENT TAGS
    Route::post('content_tags_mass_destroy', ['uses' => 'Admin\ContentTagsController@massDestroy', 'as' => 'content_tags.mass_destroy']);
    Route::resource('content_tags', 'Admin\ContentTagsController');

    Route::post('content_tags/create','Admin\ContentTagsController@store');
    Route::patch('content_tags/edit/{slug}','Admin\ContentTagsController@update');
    Route::get('content_tags/edit/{slug}', 'Admin\ContentTagsController@edit');
    Route::get('content_tags/view/{slug}', 'Admin\ContentTagsController@show');
    Route::delete('content_tags/delete/{id}', 'Admin\ContentTagsController@massDestroy');



    //CONTENT PAGES
    Route::resource('content_pages', 'Admin\ContentPagesController');
    Route::post('content_pages_mass_destroy', ['uses' => 'Admin\ContentPagesController@massDestroy', 'as' => 'content_pages.mass_destroy']);

    Route::post('content_pages/create','Admin\ContentPagesController@store');
    Route::patch('content_pages/edit/{slug}','Admin\ContentPagesController@update');
    Route::get('content_pages/edit/{slug}', 'Admin\ContentPagesController@edit');
    Route::get('content_pages/view/{slug}', 'Admin\ContentPagesController@show');
    Route::delete('content_pages/delete/{id}', 'Admin\ContentPagesController@massDestroy');
    


    //SETTINGS
    Route::get('mastersettings/settings/', 'SettingsController@index');
    Route::get('mastersettings/settings/index', 'SettingsController@index');
    Route::get('mastersettings/settings/add', 'SettingsController@create');
    Route::post('mastersettings/settings/add', 'SettingsController@store');
    Route::get('mastersettings/settings/edit/{slug}', 'SettingsController@edit');
    Route::patch('mastersettings/settings/edit/{slug}', 'SettingsController@update');
    Route::get('mastersettings/settings/view/{slug}', 'SettingsController@viewSettings');
    Route::get('mastersettings/settings/add-sub-settings/{slug}', 'SettingsController@addSubSettings');
    Route::post('mastersettings/settings/add-sub-settings/{slug}', 'SettingsController@storeSubSettings');
    Route::patch('mastersettings/settings/add-sub-settings/{slug}', 'SettingsController@updateSubSettings');
     
    //Route::get('mastersettings/settings/getList', [ 'as'   => 'mastersettings.dataTable',
         //'uses' => 'SettingsController@getDatatable']);


    Route::any('mastersettings/settings/getList', [ 'as'   => 'mastersettings.dataTable',
     'uses' => 'SettingsController@getDatatable']);



    //CATEGORIES
    Route::resource('categories', 'Admin\CategoriesController');
    Route::post('categories_mass_destroy', ['uses' => 'Admin\CategoriesController@massDestroy', 'as' => 'categories.mass_destroy']);
    Route::post('categories_restore/{id}', ['uses' => 'Admin\CategoriesController@restore', 'as' => 'categories.restore']);
    Route::delete('categories_perma_del/{id}', ['uses' => 'Admin\CategoriesController@perma_del', 'as' => 'categories.perma_del']);

    Route::post('categories/create','Admin\CategoriesController@store');
    Route::patch('categories/edit/{slug}','Admin\CategoriesController@update');
    Route::get('categories/edit/{slug}', 'Admin\CategoriesController@edit');
    Route::get('categories/view/{slug}', 'Admin\CategoriesController@show');
    Route::delete('categories/delete/{id}', 'Admin\CategoriesController@massDestroy');



    //SUB CATEGORIES
    Route::resource('sub_catogories', 'Admin\SubCatogoriesController');
    Route::post('sub_catogories_mass_destroy', ['uses' => 'Admin\SubCatogoriesController@massDestroy', 'as' => 'sub_catogories.mass_destroy']);
    Route::post('sub_catogories_restore/{id}', ['uses' => 'Admin\SubCatogoriesController@restore', 'as' => 'sub_catogories.restore']);
    Route::delete('sub_catogories_perma_del/{id}', ['uses' => 'Admin\SubCatogoriesController@perma_del', 'as' => 'sub_catogories.perma_del']);

    Route::post('sub_catogories/create','Admin\SubCatogoriesController@store');
    Route::patch('sub_catogories/edit/{slug}','Admin\SubCatogoriesController@update');
    Route::get('sub_catogories/edit/{slug}', 'Admin\SubCatogoriesController@edit');
    Route::get('sub_catogories/view/{slug}', 'Admin\SubCatogoriesController@show');
    Route::delete('sub_catogories/delete/{id}', 'Admin\SubCatogoriesController@massDestroy');



     //TESTIMONIALS
    Route::resource('testmonies', 'Admin\TestmoniesController');

    Route::post('testmonies/create','Admin\TestmoniesController@store');
    Route::patch('testmonies/edit/{slug}','Admin\TestmoniesController@update');
    Route::get('testmonies/edit/{slug}', 'Admin\TestmoniesController@edit');
    Route::get('testmonies/view/{slug}', 'Admin\TestmoniesController@show');
    Route::delete('testmonies/delete/{id}', 'Admin\TestmoniesController@massDestroy');

    Route::post('testmonies_mass_destroy', ['uses' => 'Admin\TestmoniesController@massDestroy', 'as' => 'testmonies.mass_destroy']);
    Route::post('testmonies_restore/{id}', ['uses' => 'Admin\TestmoniesController@restore', 'as' => 'testmonies.restore']);
    Route::delete('testmonies_perma_del/{id}', ['uses' => 'Admin\TestmoniesController@perma_del', 'as' => 'testmonies.perma_del']);



    //EMAIL TEMPLATES
    Route::resource('templates', 'Admin\TemplatesController');
    Route::post('templates/create','Admin\TemplatesController@store');
    Route::post('templates/create','Admin\TemplatesController@store');
    Route::patch('templates/edit/{slug}','Admin\TemplatesController@update');
    Route::get('templates/edit/{slug}', 'Admin\TemplatesController@edit');
    Route::get('templates/view/{slug}', 'Admin\TemplatesController@show');
    Route::delete('templates/delete/{id}', 'Admin\TemplatesController@massDestroy');

    Route::post('templates_mass_destroy', ['uses' => 'Admin\TemplatesController@massDestroy', 'as' => 'templates.mass_destroy']);
    Route::post('templates_restore/{id}', ['uses' => 'Admin\TemplatesController@restore', 'as' => 'templates.restore']);
    Route::delete('templates_perma_del/{id}', ['uses' => 'Admin\TemplatesController@perma_del', 'as' => 'templates.perma_del']);



    //COUNTRIES ROUTES
    Route::resource('countries', 'Admin\CountriesController');
    Route::post('countries_mass_destroy', ['uses' => 'Admin\CountriesController@massDestroy', 'as' => 'countries.mass_destroy']);
    Route::post('countries_restore/{id}', ['uses' => 'Admin\CountriesController@restore', 'as' => 'countries.restore']);
    Route::delete('countries_perma_del/{id}', ['uses' => 'Admin\CountriesController@perma_del', 'as' => 'countries.perma_del']);

    Route::post('countries/create','Admin\CountriesController@store');
    Route::patch('countries/edit/{slug}','Admin\CountriesController@update');
    Route::get('countries/edit/{slug}', 'Admin\CountriesController@edit');
    Route::get('countries/view/{slug}', 'Admin\CountriesController@show');
    Route::delete('countries/delete/{id}', 'Admin\CountriesController@massDestroy');




    //STATES ROUTES
    Route::resource('states', 'Admin\StatesController');
    Route::post('states_mass_destroy', ['uses' => 'Admin\StatesController@massDestroy', 'as' => 'states.mass_destroy']);
    Route::post('states_restore/{id}', ['uses' => 'Admin\StatesController@restore', 'as' => 'states.restore']);
    Route::delete('states_perma_del/{id}', ['uses' => 'Admin\StatesController@perma_del', 'as' => 'states.perma_del']);

    Route::post('states/create','Admin\StatesController@store');
    Route::patch('states/edit/{slug}','Admin\StatesController@update');
    Route::get('states/edit/{slug}', 'Admin\StatesController@edit');
    Route::get('states/view/{slug}', 'Admin\StatesController@show');
    Route::delete('states/delete/{id}', 'Admin\StatesController@massDestroy');




    //CITIES ROUTES
    Route::resource('cities', 'Admin\CitiesController');
    Route::post('cities_mass_destroy', ['uses' => 'Admin\CitiesController@massDestroy', 'as' => 'cities.mass_destroy']);
    Route::post('cities_restore/{id}', ['uses' => 'Admin\CitiesController@restore', 'as' => 'cities.restore']);
    Route::delete('cities_perma_del/{id}', ['uses' => 'Admin\CitiesController@perma_del', 'as' => 'cities.perma_del']);

    Route::post('cities/create','Admin\CitiesController@store');
    Route::patch('cities/edit/{slug}','Admin\CitiesController@update');
    Route::get('cities/edit/{slug}', 'Admin\CitiesController@edit');
    Route::get('cities/view/{slug}', 'Admin\CitiesController@show');
    Route::delete('cities/delete/{id}', 'Admin\CitiesController@massDestroy');
    Route::post('cities/get-states','Admin\CitiesController@getStates');


    //AUCTIONS
    Route::resource('auctions', 'AuctionsController');

    Route::post('auctions/create','AuctionsController@store');
    Route::patch('auctions/edit/{slug}','AuctionsController@update');
    Route::get('auctions/edit/{slug}', 'AuctionsController@edit');
    Route::get('auctions/view/{slug}', 'AuctionsController@show');
    Route::delete('auctions/delete/{id}', 'AuctionsController@massDestroy');
    Route::post('auctions/get-sub-categories', 'AuctionsController@getSubCategories');
    Route::post('auctions/upload-images/{slug}','AuctionsController@uploadImages');
    Route::post('auctions/delete-image/{slug}', 'AuctionsController@deleteImage');

    Route::post('auctions/bid-history', 'AuctionsController@bidHistory');
    Route::post('auctions/send-email-bid', 'AuctionsController@sendEmailtoBidder');


    //MESSENGER
    Route::model('messenger', 'App\MessengerTopic');
    Route::get('messenger/inbox', 'Admin\MessengerController@inbox')->name('messenger.inbox');
    Route::get('messenger/outbox', 'Admin\MessengerController@outbox')->name('messenger.outbox');
    Route::resource('messenger', 'Admin\MessengerController');

    Route::post('messenger/create','Admin\MessengerController@store');

   	Route::post('messenger/edit/{slug}','Admin\MessengerController@update');

    Route::patch('messenger/edit/{slug}','Admin\MessengerController@update');
    Route::get('messenger/edit/{slug}', 'Admin\MessengerController@edit');

    Route::get('messenger/view/{slug}', 'Admin\MessengerController@show');
    Route::delete('messenger/delete/{id}', 'Admin\MessengerController@destroy');


    //SMS Module
    Route::get('sms/index', 'SMSAgentController@index');
    Route::post('sms/send', 'SMSAgentController@sendSMS');


    


    // NOTIFICATIONS 
    Route::get('user/notifications', 'UserNotificationsController@index');
    Route::get('user/notifications/show/{slug}', 'UserNotificationsController@display');


    Route::get('view-auctions', 'AuctionController@index');
    Route::post('view-auctions', 'AuctionController@index');


    Route::get('live-auctions', 'AuctionController@liveAuctions');


    //UPDATE AUCTION STATUS - CRON JOBS
    Route::get('update-auction','LoginController@updateAuctionStatus');
    Route::post('auction/save-bid', 'AuctionController@saveBid');
    Route::get('auction-details/{slug}', 'AuctionController@viewAuction');



    Route::get('live_auction/{slug}', 'AuctionController@liveAuction');
    Route::post('live-info', 'AuctionController@auctionInfo');
    Route::post('save-live-bid', 'AuctionController@saveLiveBid');



    //ADD TO FAVOURITES
    Route::post('auction/add_favourite','AuctionController@addToFavourite');

    //BIDDER FAV AUCTIONS
    Route::get('bidder/fav-auctions', 'BidderController@favAuctions');

    Route::post('bidder/remove-fav-auction', 'BidderController@removeFavAuction');


    //BIDDER PARTICIPATED AUCTIONS
    Route::get('bidder/my-auctions', 'BidderController@myAuctions');

    //BIDDER BOUGHT AUCTIONS
    Route::get('bidder/bought-auctions', 'BidderController@boughtAuctions');

    //BIDDER PAYMENTS
    Route::get('bidder/payments', 'BidderController@paymentsHistory');
    Route::get('bidder/payment-details/{slug}', 'BidderController@paymentDetails');

    //BIDDER AUCTION BID PAY
    Route::get('bidder/bid-payment/{slug}', 'BidderController@bidPaymentConfirm');
    
    //BIDDER AUCTION BUY NOW 
    Route::get('bidder/auction-payment/{slug}', 'BidderController@auctionPaymentConfirm');

    //BIDDER BILLING ADDRESS
    Route::get('billing-address', 'BidderController@billingAddress');
    Route::patch('billing-address', 'BidderController@updateBillingDetails');

    //BIDDER SHIPPING ADDRESS
    Route::get('shipping-address', 'BidderController@shippingAddress');
    Route::patch('shipping-address', 'BidderController@updateShippingDetails');

    //PAGES
    // Route::get('about-us', 'PagesController@index')->name('pages.aboutus');

    Route::post('pages/get-categories-faqs', 'PagesController@getCategoryFaqs');
    Route::get('faqs', 'PagesController@faqs');
    Route::get('contact-us', 'PagesController@contact');
    Route::post('contact-us', 'PagesController@contactUs');
    Route::get('/{slug}', 'PagesController@index');




    //Payments Controller
    Route::post('payments/paynow', 'PaymentsController@paynow');
    Route::post('payments/paypal/status-success','PaymentsController@paypal_success');
    Route::get('payments/paypal/status-cancel', 'PaymentsController@paypal_cancel');

    Route::post('payments/payu/status-success','PaymentsController@payu_success');
    Route::post('payments/payu/status-cancel', 'PaymentsController@payu_cancel');

    Route::post('stripe-confirmation', 'PaymentsController@confirmStripe');

    Route::post('stripe-payment', 'PaymentsController@payStripe');


    //SHOW ALL PAYMENTS TO ADMIN
    Route::get('payments/index', 'PaymentsController@index');
    Route::get('payments/view/{slug}', 'PaymentsController@viewDetails');

    

     //SUBSCRIBER
    Route::post('subscriber/create','SubscribersController@store');