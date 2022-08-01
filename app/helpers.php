<?php 

/**
 * Flash Helper
 * @param  string|null  $title
 * @param  string|null  $text
 * @return void
 */


function flash($title = null, $text = null, $type='info')
{
    $flash = app('App\Http\Flash');

    if (func_num_args() == 0) {
        return $flash;
    }
    return $flash->$type($title, $text);
}

/**
 * This method returns the role name or role ID based on the type of parameter passed
 * It returns ID if role name is supplied
 * It returns Name if ID is passed
 * @param  [type] $type [description]
 * @return [type]       [description]
 */
 function getRoleData($type)
 {
    
     if(is_numeric($type))
     {
        /**
         * Return the Role Name as the type is numeric
         */
        return App\Role::where('id','=',$type)->first()->name;
        
     }

     //Return Role Id as the type is role name
     return App\Role::where('name','=',$type)->first()->id;

 }


 function checkRole($roles)
 {
     if(Entrust::hasRole($roles))
        return TRUE;
    return FALSE;
 }


 /**
 * This method fetches the specified key in the type of setting
 * @param  [type] $key          [description]
 * @param  [type] $setting_type [description]
 * @return [type]               [description]
 */
function getSetting($key, $setting_type)
{
    return App\Settings::getSetting($key, $setting_type);
}


/**
 * Language Helper
 * @param  string|null  $phrase
 * @return string
 */
function getPhrase($key = null)
{
  
    $phrase = app('App\Language');

    if (func_num_args() == 0) {
        return '';
    }

    return  $phrase::getPhrase($key); 
}


/**
 * This method is used to return the default validation messages
 * @param  string $key [description]
 * @return [type]      [description]
 */
function getValidationMessage($key='required')
{
    $message = '<p ng-message="required">'.getPhrase('this_field_is_required').'</p>';    
    
    if($key === 'required')
        return $message;

        switch($key)
        {
          case 'minlength' : $message = '<p ng-message="minlength">'
                                        .getPhrase('the_text_is_too_short')
                                        .'</p>';
                                        break;
          case 'maxlength' : $message = '<p ng-message="maxlength">'
                                        .getPhrase('the_text_is_too_long')
                                        .'</p>';
                                        break;
          case 'pattern' : $message   = '<p ng-message="pattern">'
                                        .getPhrase('invalid_input')
                                        .'</p>';
                                        break;
            case 'image' : $message   = '<p ng-message="validImage">'
                                        .getPhrase('please_upload_valid_image_type')
                                        .'</p>';
                                        break;
          case 'email' : $message   = '<p ng-message="email">'
                                        .getPhrase('please_enter_valid_email')
                                        .'</p>';
                                        break;
                                       
          case 'number' : $message   = '<p ng-message="number">'
                                        .getPhrase('please_enter_valid_number')
                                        .'</p>';
                                        break;

          case 'confirmPassword' : $message   = '<p ng-message="compareTo">'
                                        .getPhrase('password_and_confirm_password_does_not_match')
                                        .'</p>';
                                        break;
           case 'password' : $message   = '<p ng-message="minlength">'
                                        .getPhrase('the_password_is_too_short')
                                        .'</p>';
                                        break;
           case 'phone' : $message   = '<p ng-message="minlength">'
                                        .getPhrase('please_enter_valid_phone_number')
                                        .'</p>';
                                        break;
        }
    return $message;
}


/**
 * This method identifies if the url contains the specific string
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
 function urlHasString($str)
 {
    $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
     if (strpos($url, $str)) 
        return TRUE;
    return FALSE;
                
 }


function getUserGrade($grade = 2)
 {
     switch ($grade) {
         case 1:
             return ['admin'];
             break; 
        case 2:
             return ['bidder'];
             break;
        case 3:
             return ['seller'];
            break;     
        case 4:
             return ['admin', 'seller'];
             break;
        case 5:
             return ['admin','bidder'];
             break;    
        case 6:
             return ['seller','bidder'];
             break;
        case 7:
             return ['admin','seller','bidder'];
             break;
            
     }
 }

 /**
 * This method returns the user based on the sent userId, 
 * If no userId is passed returns the current logged in user
 * @param  [type] $user_id [description]
 * @return [type]          [description]
 */
 function getUserRecord($user_id = 0)
 {
    if($user_id)
     return (new App\User())->where('id','=',$user_id)->first();
    return Auth::user();
 }


  /**
  * Returns the appropriate layout based on the user logged in
  * @return [type] [description]
  */
 function getLayout()
 {
    $layout = 'layouts.home';
    if (checkRole(getUserGrade(1)))
        $layout  = 'layouts.app';
    elseif (checkRole(['seller']))
        $layout  = 'layouts.seller';


    return $layout;
 }


/**
 * This method returns the role of the currently logged in user
 * @return [type] [description]
 */
 function getRole($user_id = 0)
 {
  
    if($user_id)
        return getUserRecord($user_id)->roles()->first()->name;
    else {
        $roles = Auth::user()->roles()->first();
      if ($roles)
        return $roles->name;
    }
    return redirect('logout');
 }

 /**
 * Returns the user record with the matching slug.
 * If slug is empty, it will return the currently logged in user
 * @param  string $slug [description]
 * @return [type]       [description]
 */
function getUserWithSlug($slug='')
{
    if($slug)
     return App\User::where('slug', $slug)->get()->first();
    return Auth::user();
}


/**
 * Returns the predefined Regular Expressions for validation purpose
 * @param  string $key [description]
 * @return [type]      [description]
 */
function getRegexPattern($key='name')
{
    $phone_regx = getSetting('phone_number_expression', 'site_settings');
    $pattern = array(
                    'name' =>  '/(^[A-Za-z0-9-., ]+$)+/', 
                    'email' => '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',
                    'phone'=>$phone_regx,
                    'price'=> '/^((([0-9]*)[\.]([0-9]{2}))|([0-9]*))$/',
                    'numbers'=> '/^([0-9]*)$/'
                    );
    return $pattern[$key];
}


/**
 * This method will send the random color to use in graph
 * The random color generation is based on the number parameter 
 * As the border and bgcolor need to be same, 
 * We are maintainig number parameter to send the same value for bgcolor and background color
 * @param  string  $type   [description]
 * @param  integer $number [description]
 * @return [type]          [description]
 */
 function getColor($type = 'background',$number = 777) {

    $hash = md5('color'.$number); // modify 'color' to get a different palette
    $color = array(
        hexdec(substr($hash, 0, 2)), // r
        hexdec(substr($hash, 2, 2)), // g
        hexdec(substr($hash, 4, 2))); //b
    if($type=='border')
    return 'rgba('.$color[0].','.$color[1].','.$color[2].',1)';
    return 'rgba('.$color[0].','.$color[1].','.$color[2].',0.2)';
}


/**
 * This method returns the path of the user image based on the type
 * It verifies wether the image is exists or not, 
 * if not available it returns the default image based on type
 * @param  string $image [Image name present in DB]
 * @param  string $type  [Type of the image, the type may be thumb or profile, 
 *                       by default it is thumb]
 * @return [string]      [returns the full qualified path of the image]
 */
function getProfilePath($image = '', $type = 'thumb')
{
    $obj = app('App\ImageSettings');
    $path = '';
    
    if($image=='') {
        if($type=='profile')
            return PREFIX.$obj->getDefaultProfilePicPath();
        return PREFIX.$obj->getDefaultprofilePicsThumbnailpath();
    }
  

    if($type == 'profile')
        $path = $obj->getProfilePicsPath();
    else
        $path = $obj->getProfilePicsThumbnailpath();
    $imageFile = $path.$image;

    if (File::exists($imageFile)) {
        return PREFIX.$imageFile;
    }

    if($type=='profile')
        return PREFIX.$obj->getDefaultProfilePicPath();
    return PREFIX.$obj->getDefaultprofilePicsThumbnailpath();

}


/**
 * This method returns the path of the user image based on the type
 * It verifies wether the image is exists or not, 
 * if not available it returns the default image based on type
 * @param  string $image [Image name present in DB]
 * @param  string $type  [Type of the image, the type may be thumb or profile, 
 *                       by default it is thumb]
 * @return [string]      [returns the full qualified path of the image]
 */
function getCompanyLogo($image = '', $type = 'thumb')
{
    $obj = app('App\ImageSettings');
    $path = '';
    
    if($image=='') {
        if($type=='logo')
            return PREFIX.$obj->getDefaultCompanyLogoPath();
        return PREFIX.$obj->getDefaultCompanyLogoThumbnailpath();
    }
  

    if($type == 'logo')
        $path = $obj->getCompanyLogoPath();
    else
        $path = $obj->getCompanyLogoThumbnailpath();
    $imageFile = $path.$image;

    if (File::exists($imageFile)) {
        return PREFIX.$imageFile;
    }

    if($type=='logo')
        return PREFIX.$obj->getDefaultCompanyLogoPath();
    return PREFIX.$obj->getDefaultCompanyLogoThumbnailpath();

}


/**
 * Active class Helper
 * @param  string|null  $phrase
 * @return string
 */
function isActive($active_class = '', $value = '')
{

    $value = isset($active_class) ? ($active_class == $value) ? 'active' : '' : '';
    if($value)
        return "class = ".$value;
    return $value; 
}



/**
 * Bidder Active class Helper
 * @param  string|null  $phrase
 * @return string
 */
function bidderActive($active_class = '', $value = '')
{
 
    $value = isset($active_class) ? ($active_class == $value) ? 'active isactive' : '' : '';
    if($value)
        return "class = ".$value;
    return $value; 
}



 /**
  * Common method to send user restriction message for invalid attempt 
  * @return [type] [description]
  */
 function prepareBlockUserMessage()
 {
    flash('Ooops..!', 'you_have_no_permission_to_access', 'error');
     return '';
 }

 /**
  * Common method to send user restriction message for invalid attempt 
  * @return [type] [description]
  */
 function pageNotFound()
 {
    flash('Ooops..!', 'page_not_found', 'error');
     return '';
 }
 
 

 function getArrayFromJson($jsonData)
{
    $result = array();
    if($jsonData)
    {
        foreach(json_decode($jsonData) as $key=>$value)
            $result[$key] = $value;
    }
    return $result;
}


function prepareArrayFromString($string='', $delimeter = '|')
{
  
    return explode($delimeter, $string);
}

 function isEligible($slug)
 {
     if(!checkRole(getUserGrade(1)))
     {
        if(!validateUser($slug)) 
        {
          prepareBlockUserMessage();
          return FALSE;
        }
     }
     return TRUE;
 }

function validateUser($slug)
 {

    $user = \Auth::user();

    if (!$user)
      return redirect(URL_USERS_LOGIN);
    else if($slug == $user->slug)
        return TRUE;

    return FALSE;
 }


 /**
 * This method returns the settings for the selected key
 * @param  string $type [description]
 * @return [type]       [description]
 */
function getSettings($type='')
{
    if($type=='lms')
        return json_decode((new App\LmsSettings())->getSettings());
    
    if($type=='subscription')
        return json_decode((new App\SubscriptionSettings())->getSettings());
    
    if($type=='general')
        return json_decode((new App\GeneralSettings())->getSettings());

    if($type=='email'){

        $dta = json_decode((new App\EmailSettings())->getSettings());
        return $dta;
      }
   
   if($type=='attendance')
        return json_decode((new App\AttendanceSettings())->getSettings());

}


/**
 * Returns the random hash unique code
 * @return [type] [description]
 */
function getHashCode()
{
  return bin2hex(openssl_random_pseudo_bytes(20));
}


/**
 * This method returns the path of the logo of the bank
 * It verifies whether the image is exists or not, 
 * if not available it returns the default image based on type
 * @param  string $image [Image name present in DB]
 * @param  string $type  [Type of the image, the type may be thumb or profile, 
 *                       by default it is thumb]
 * @return [string]      [returns the full qualified path of the image]
 */
function getBankLogosPath($image = '', $type = 'thumb')
{
    $obj = app('App\ImageSettings');
    $path = '';
    
    if($image=='') {
        if($type=='bank')
            return PREFIX.$obj->getDefaultProfilePicPath();
        return PREFIX.$obj->getDefaultprofilePicsThumbnailpath();
    }
  

    if($type == 'bank')
        $path = $obj->getBankLogosPath();
    else
        $path = $obj->getBankLogosThumbnailpath();
    $imageFile = $path.$image;

    if (File::exists($imageFile)) {
        return PREFIX.$imageFile;
    }

    if($type=='bank')
        return PREFIX.$obj->getDefaultProfilePicPath();
    return PREFIX.$obj->getDefaultprofilePicsThumbnailpath();

}



/**
 * This method returns the path of the property image
 * It verifies whether the image is exists or not, 
 * if not available it returns the default image based on type
 * @param  string $image [Image name present in DB]
 * @param  string $type  [Type of the image, the type may be thumb or profile, 
 *                       by default it is thumb]
 * @return [string]      [returns the full qualified path of the image]
 */
function getAuctionImage($image = '', $type = 'thumb')
{
    $obj = app('App\ImageSettings');
    $path = '';
    
    if($image=='') {
        if($type=='auction')
            return PREFIX.$obj->getDefaultAuctionImagePath();
        return PREFIX.$obj->getDefaultAuctionImageThumbnailpath();
    }
  

    if($type == 'auction')
        $path = $obj->getAuctionImagePath();
    else
        $path = $obj->getAuctionImageThumbnailpath();
    $imageFile = $path.$image;

    if (File::exists($imageFile)) {
        return PREFIX.$imageFile;
    }

    if($type=='auction')
        return PREFIX.$obj->getDefaultAuctionImagePath();
    return PREFIX.$obj->getDefaultAuctionImageThumbnailpath();

}




function activeinactive()
{
   return array('Active'   => getPhrase('active'),
                'Inactive' => getPhrase('inactive'));
   
}


function auctionstatusoptions()
{
   return array('new'   => getPhrase('new'),
                'open'  => getPhrase('open'),
                'suspended' => getPhrase('suspended'),
                'closed'    => getPhrase('closed')
              );
   
}


function adminstatusoptions()
{
   return array('pending'   => getPhrase('pending'),
                'approved'  => getPhrase('approved'),
                'rejected'  => getPhrase('rejected'));
}

function templatetypes()
{
   return array('Content'   => getPhrase('content'),
                'Header' => getPhrase('header'),
                'Footer'=> getPhrase('footer')
              );
   
}


function pricebidoptions()
{
  return array('applicable'  => getPhrase('applicable'),
            'not_applicable' => getPhrase('not_applicable'));
}

function yesnooptions()
{
  return array('Yes'  => getPhrase('yes'),
              'No'    => getPhrase('no'));
  
}

function bidderstatusoptions()
{
  return array('pending' => getPhrase('pending'),
              'approved' => getPhrase('approved'),
              'rejected' => getPhrase('rejected')
            );
  
}


if ( ! function_exists('clean_text'))
{
  function clean_text($string) 
  {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9\_]/', '', $string); // Removes special chars.
  }
}

if ( ! function_exists('get_text'))
{
  function get_text($string) 
  {
    $string = str_replace('_', ' ', $string); // Replaces hyphen with space.
    return ucwords($string);
  }
}


 function setDescriptionLimit($description)
{
    $string = strip_tags($description);

    $charlength = 50;

    if (strlen($string) > $charlength ) {

        // truncate string
        $stringCut = substr($string, 0, $charlength);

        // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
    }
    return $string;
}


/**
 * This is a common method to send emails based on the requirement
 * The template is the key for template which is available in db
 * The data part contains the key=>value pairs 
 * That would be replaced in the extracted content from db
 * @param  [type] $template [description]
 * @param  [type] $data     [description]
 * @return [type]           [description]
 */
 function sendEmail($template, $data)
 {
    return (new App\Template())->sendEmail($template, $data);
 }

 /**
 * Sends the default Currency set for the project
 * @return [type] [description]
 */
function getCurrencyCode()
{
  return getSetting('currency_code','site_settings') ;
}

/**
 * Returns the max records per page
 * @return [type] [description]
 */
function getRecordsPerPage()
{
  return RECORDS_PER_PAGE;
}




/**
 * This method returns the path of the bidder signature
 * It verifies whether the image is exists or not, 
 * if not available it returns the default image based on type
 * @param  string $image [Image name present in DB]
 * @param  string $type  [Type of the image, the type may be thumb or profile, 
 *                       by default it is thumb]
 * @return [string]      [returns the full qualified path of the image]
 */
function getBidderSignature($image = '', $type = 'thumb')
{
    $obj = app('App\ImageSettings');
    $path = '';
    
    if($image=='') {
       return NULL;
    }
  
    if($type == 'signature')
        $path = $obj->getBidSignaturesPath();
    else
        $path = $obj->getBidSignaturesThumbnailpath();
    $imageFile = $path.$image;

    if (File::exists($imageFile)) {
        return PREFIX.$imageFile;
    }

    return NULL;
}


/**
 * This method returns the path of the bidder signature
 * It verifies whether the image is exists or not, 
 * if not available it returns the default image based on type
 * @param  string $image [Image name present in DB]
 * @param  string $type  [Type of the image, the type may be thumb or profile, 
 *                       by default it is thumb]
 * @return [string]      [returns the full qualified path of the image]
 */
function getBidderDocumentPath($image = '')
{
    if($image=='') {
       return UPLOADS.'public/img-example.jpg';
    }

    $imageFile = BIDDER_DOCUMENTS_UPLOADS.$image;

    if (File::exists($imageFile)) {
        return GET_BIDDER_DOCUMENTS_PATH.$image;
    }

    return UPLOADS.'public/img-example.jpg';
}

/**
 * [accountstatus description]
 * @return [type] [description]
 */
function accountstatus()
{
   return array(1   => getPhrase('approve'),
                0 => getPhrase('disapprove'));
   
}

/**
 * [getAuctionDaysLeft description]
 * @param  [type] $start_date [description]
 * @param  [type] $end_date   [description]
 * @return [type]             [description]
 */
function getAuctionDaysLeft($start_date, $end_date)
{
    if ($start_date && $end_date) {

        $startDate = DateTime::createFromFormat('Y-m-d H:i:s',$start_date);
        $endDate   = DateTime::createFromFormat('Y-m-d H:i:s',$end_date);

        $difference = $startDate->diff($endDate);

        $years   = $difference->y;
        $months  = $difference->m;
        $days    = $difference->d;
        $hours   = $difference->h;
        $minutes = $difference->i;
        $seconds = $difference->s;
        


        //years
        //months
        //days
        //hours
        //minutes
        
        if ($years>0)
          return $years>1 ? $years.' years left' : $years.' year left';
        elseif ($years<=0 && $months>0)
          return $months>1 ? $months.' months left' : $months.' month left';
        elseif ($years<=0 && $months<=0 && $days>0)
          return $days>1 ? $days.' days left' : $days.' day left';
        elseif ($years<=0 && $months<=0 && $days<=0 && $hours>0)
          return $hours>1 ? $hours.' hours left' : $hours.' hour left';
        elseif ($years<=0 && $months<=0 && $days<=0 && $hours<=0 && $minutes>0)
          return $minutes>1 ? $minutes.' mins left' : $minutes.' min '.$seconds.' sec left';

        else
          return null;
    } else 
        return null;
}


/**
 * [bidpayment description]
 * @param  [type] $ab_id [description]
 * @return [type]        [description]
 */
function bidpayment($ab_id)
{
    $result=false;

    $auctionbidder = App\AuctionBidder::getRecord($ab_id);

    if (($auctionbidder)) {
      $today = date('Y-m-d H:i:s');

      if ($auctionbidder->is_admin_sent_email=='Yes' && $auctionbidder->is_bidder_paid!='Yes' &&  strtotime($today)<=strtotime($auctionbidder->pay_end_datetime)) {
          $result = true;
      }

      //check any bidder already paid 
      $bid_payment = App\Payment::where('ab_id',$ab_id)
                                ->where('payment_status',PAYMENT_STATUS_SUCCESS)
                                ->get();
      if (count($bid_payment))
        $result = false;
    }

    return $result;
}


/**
 * [checkBillingAddress description]
 * @return [type] [description]
 */
function checkBillingAddress()
{
   $user = \Auth::user();
   if ($user->billing_country && $user->billing_state && $user->billing_city && $user->billing_name && $user->billing_email && $user->billing_phone && $user->billing_address)
      return true;
   else
      return false;
}

/**
 * [checkShippingAddress description]
 * @return [type] [description]
 */
function checkShippingAddress()
{
   $user = \Auth::user();
   if ($user->shipping_country && $user->shipping_state && $user->shipping_city && $user->shipping_name && $user->shipping_email && $user->shipping_phone && $user->shipping_address)
      return true;
   else
      return false;
}

/**
 * [getActiveTheme description]
 * @return [type] [description]
 */
function getActiveTheme()
{
    $theme = getSetting('theme_color','site_settings');


    $selected_theme = \Request::cookie('selected_theme'); 
    if (isset($selected_theme)) {
        $theme = $selected_theme;
    }


    if (!$theme) {
        $theme = 'one.css';
    }

    return $theme;
}