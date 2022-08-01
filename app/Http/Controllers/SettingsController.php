<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App;
use App\Http\Requests;
use App\Settings;
use Yajra\Datatables\Datatables;
use DB;
use Input;
use Image;
use App\ImageSettings;
use File;

use App\User;

class SettingsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

     /**
     * settings listing method
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
       if(!checkRole(getUserGrade(1)))
       {
            prepareBlockUserMessage();
            return back();
       }

        $records = Settings::select([ 'title', 
            'key', 'description','slug','id', 'updated_at'])
         ->orderBy('updated_at','desc')->get();

        $data['records']           = $records;

        $data['active_class']       = 'master_settings';
        $data['title']              = getPhrase('settings');
    	return view('mastersettings.settings.list', $data);
    }

   

     /**
     * This method loads the create view
     * @return void
     */
    public function create()
    {	
      if(!checkRole(getUserGrade(1)))
      {
        prepareBlockUserMessage();
        return back();
      }
    	$data['record']         	= FALSE;
    	$data['active_class']       = 'master_settings';
    	
    	$data['title']              = getPhrase('add_setting');
    	return view('mastersettings.settings.add-edit', $data);
    }

    /**
     * This method loads the edit view based on unique slug provided by user
     * @param  [string] $slug [unique slug of the record]
     * @return [view with record]       
     */
    public function edit($slug)
    {
      if(!checkRole(getUserGrade(1)))
      {
        prepareBlockUserMessage();
        return back();
      }

    	$record = Settings::where('slug', $slug)->get()->first();
    	
    	if($isValid = $this->isValidRecord($record))
            return redirect($isValid);

    	$data['record']       		= $record;
    	
    	$data['active_class']       = 'master_settings';
        $data['title']              = getPhrase('edit_settings');
    	return view('mastersettings.settings.add-edit', $data);
    }

    /**
     * Update record based on slug and reuqest
     * @param  Request $request [Request Object]
     * @param  [type]  $slug    [Unique Slug]
     * @return void
     */
    public function update(Request $request, $slug)
    {

      if(!checkRole(getUserGrade(1)))
      {
        prepareBlockUserMessage();
        return back();
      }
        $record                 = Settings::where('slug', $slug)->get()->first();
        
        if($isValid = $this->isValidRecord($record))
            return redirect($isValid);

        $name = $request->key;	
          $this->validate($request, [
       	  'key'        		  => 'bail|required|max:30|unique:settings,key,'.$record->id,
          ]);


        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }


	       $name 					        = $request->key;
       
       /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($name != $record->key)
            $record->slug = $record->makeSlug($name);
    	$record->title                 =$request->title;
        $record->key 			        = $name;
        $record->description 			= $request->description;
         
        $record->save();

        if($request->hasFile('image'))
        {
            $old_image = $record->image;
            $record->image = $this->processUpload($request,'image', true);
            $record->save();
            $this->deleteFile($old_image, IMAGE_PATH_SETTINGS);
        }
       
    	flash('success','record_updated_successfully', 'success');
    	return redirect(URL_SETTINGS_LIST);
    }

    /**
     * This method adds record to DB
     * @param  Request $request [Request Object]
     * @return void
     */
    public function store(Request $request)
    {
     
     if(!checkRole(getUserGrade(1)))
      {
        prepareBlockUserMessage();
        return back();
      }

       $this->validate($request, [
         'key'          	 	=> 'bail|required|max:50|unique:settings,key',
         'title'                => 'bail|required',
         // 'image'                => 'bail|mimes:png,jpg,jpeg|max:2048',
         ]);


       if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }
        
    	$record = new Settings();
        $record->title                  = $request->title;
        $name 					        = $request->key;
        $record->key 					= $name;
        $record->slug 			        = $record->makeSlug($name);
        $record->description 			= $request->description;
        $record->save();
        
        if($request->hasFile('image'))
        {
            $old_image = $record->image;
            $record->image = $this->processUpload($request,'image', true);
            $record->save();
            $this->deleteFile($old_image, IMAGE_PATH_SETTINGS);
        }

        
        flash('success','record_added_successfully', 'success');
    	return redirect(URL_SETTINGS_LIST);
    }

     
   

    /**
     * Delete Record based on the provided slug
     * @param  [string] $slug [unique slug]
     * @return Boolean 
     */
    public function delete($slug)
    {

        if(!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $record = Settings::where('slug', $slug)->first();
        /**
         * Check if any questions are related to this specific topic.
         * If no questions exists, delete this topic else give appropriate message
         */
        if(count($record->getQuestions->all()) > 0)
        {
            //Questions exists with the selected, so done delete the topic
            $response['status'] = 0;
            $response['message'] = getPhrase('this_topic_question');
            return json_encode($response);
        }
        else {
            $record->delete();
            $response['status'] = 1;
            $response['message'] = getPhrase('record_deleted_successfully');
            return json_encode($response);
        }
    }

    public function viewSettings($slug)
    {
        if(!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $record                 = Settings::where('slug', $slug)->get()->first();
        
        if($isValid = $this->isValidRecord($record))
            return redirect($isValid);
        // dd($record);
        $data['settings_data']      = getArrayFromJson($record->settings_data);
        $data['record']             = $record;
        $data['active_class']       = 'master_settings';
        $data['title']              = $record->title;
       
        $data['layout']             = getLayout();

       

    	return view('mastersettings.settings.sub-list', $data);
    }

    public function addSubSettings($slug)
    {


      if(!checkRole(getUserGrade(1)))
      {
        prepareBlockUserMessage();
        return back();
      }
        $record                 = Settings::where('slug', $slug)->get()->first();
        
        if($isValid = $this->isValidRecord($record))
            return redirect($isValid);
        $data['record']				= $record;
        $data['active_class']       = 'master_settings';
        $data['title']              = get_text($record->key);
        
    	return view('mastersettings.settings.sub-list-add-edit', $data);
    }

    public function storeSubSettings(Request $request, $slug)
    {
        
      if(!checkRole(getUserGrade(1)))
      {
        prepareBlockUserMessage();
        return back();
      }

      $record  = Settings::where('slug', $slug)->get()->first();
        
      if($isValid = $this->isValidRecord($record))
        return redirect($isValid);



        $validation_rules['key'] = 'bail|required|max:50';
        $validation_rules['type'] = 'bail|required';

        if($request->type=='file')
        {
            $validation_rules['value'] = 'bail|mimes:png,jpg,jpeg|max:2048';
        }

        if($request->type=='select')
        {
            $validation_rules['value'] = 'bail|required|integer';
        }

    	$this->validate($request, $validation_rules);


       if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

       $settings_data = (array) json_decode($record->settings_data);
       
       $value = '';
     
       $processed_data = (object)$this->processSettingValue($request);
        
       $values = array(
                        'type'=>$request->type, 
                        'value'=>$processed_data->value, 
                        'extra'=>$processed_data->extra,
                        'tool_tip'=>$processed_data->tool_tip
                       );
       $settings_data[$request->key] = $values;
       $record->settings_data = json_encode($settings_data);
      
       $record->save();

       flash('success','record_updated_successfully', 'success');
       return redirect(URL_SETTINGS_VIEW.$record->slug);

    }

    /**
     * This method finds the value of the setting type
     * The value may be of file or any single field entity
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function processSettingValue(Request $request)
    {

        // dd($request);
        $value = '';
        $extra = '';
        $tool_tip = '';

         if($request->type=='text'      || 
            $request->type=='number'    ||
            $request->type=='email'     ||
            $request->type=='textarea'  ||
            $request->type=='checkbox'  
            )

            $value = 0;
        if($request->has('value'))
         $value = $request->value;

        if ($request->type=='file') {
            if($request->hasFile('value'))
                $value = $this->processUpload($request);
        }


        elseif ($request->type=='select') {

          $value = '';
            $extra['total_options'] = $request->total_options;

             dd($extra);
             
            $options = [];
            for($index=0; $index<$request->total_options; $index++)
            {
                $options[$request->option_value[$index]] = $request->option_text[$index];
            }
            
            $extra['options'] = $options;
            $value = $request->option_value[$request->value];
        }

        $tool_tip = $request->tool_tip;
        
        return array('value'=>$value, 'extra'=>$extra, 'tool_tip'=>$tool_tip);
    }


    /**
     * This method verifies if the request is the type of enverionment varable
     * @param  Request $request [description]
     * @return boolean          [description]
     */
    public function isEnvSetting(Request $request)
    {
         $env_keys = array( 'site_title',
                            'system_timezone',
                            'facebook_client_id',
                            'facebook_client_secret',
                            'facebook_redirect_url',
                            'google_client_id',
                            'google_client_secret',
                            'google_redirect_url',
                            'payu_merchant_key',
                            'payu_salt',
                            'payu_working_key',
                            'payu_testmode',
                            'mail_driver',
                            'mail_host',
                            'mail_port',
                            'mail_username',
                            'mail_password',
                            'mail_encryption',
                            'stripe_key',
                            'stripe_secret',
                            'sms_driver',
                            'plivo_auth_id',
                            'plivo_auth_token',
                            'twilio_sid',
                            'twilio_token'
                            );

        foreach ($env_keys as $key => $value) 
        {
            if($request->has($value))            
                return TRUE;
        } 

        return FALSE;       
    }

    /**
     * [prepareEnvData description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function prepareEnvData(Request $request)
    {
        $request_data = Input::all();
        $data = array();

        foreach ($request_data as $key => $value) {
            if($key=='_token' || $key=='_method' || $value=='')
                continue;
            if(isset($value['value']))
            $data[strtoupper($key)] = $value['value'];
        }
        return $data;
    }

    /**
     * This method is used to update the subsettings of the settings module
     * 
     * @param  Request $request [description]
     * @param  [type]  $slug    [description]
     * @return [type]           [description]
     */
    public function updateSubSettings(Request $request, $slug)
    {
         
        /**
         * Check if the request is of env varable
         * if yes, update env file
         */

     
       
     if(!checkRole(getUserGrade(1)))
      {
        prepareBlockUserMessage();
        return back();
      }
      $record                 = Settings::where('slug', $slug)->get()->first();
    
       if($isValid = $this->isValidRecord($record))
        return redirect($isValid);


        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

    $input_data = Input::all();

    
 
    $extra = '';
    
    foreach ($input_data as $key => $value) {

            if($key=='_token' || $key=='_method' || $value=='')
                continue;
            $submitted_value = (object)$value;
            $value = 0;
            if(isset($submitted_value->value))
                $value = $submitted_value->value;
            
             $old_values = json_decode($record->settings_data);
            
            /**
             * For File type of settings, first check if the file is changed or not
             * If not changed just keep the old values as it is
             * If file changed, first upload the new file and delete the old file
             * @var [type]
             */
            if($submitted_value->type=='file')
            {
                if($request->hasFile($key)) {
                    $isNew = false;
                        $value = $this->processUpload($request, $key, $isNew);
                        
                         $this->deleteFile($old_values->$key->value, IMAGE_PATH_SETTINGS);
                }
                else
                {
                    $value = $old_values->$key->value;
                }
            }

            //*** File Answer type end **//

           if($submitted_value->type == 'select')
           {
                $extra = $old_values->$key->extra;
           }
            
            $data[$key] = array('value'=>$value, 'type'=>$submitted_value->type, 'extra'=>$extra, 'tool_tip'=>$submitted_value->tool_tip);
           
        }	 
       
       
       $record->settings_data = json_encode($data);
       if(!env('DEMO_MODE')) {
       $record->save();

        if($this->isEnvSetting($request))
        {

            $data = $this->prepareEnvData($request);
          
            $this->updateEnvironmentFile($data);
        }
       
       // dd($record);
        Settings::loadSettingsModule($record->key);
       (new App\EmailSettings())->getDbSettings();
      }
       flash('success','record_updated_successfully', 'success');
    	return redirect(URL_SETTINGS_VIEW.$record->slug);

    }

    /**
     * [deleteFile description]
     * @param  [type]  $record   [description]
     * @param  [type]  $path     [description]
     * @param  boolean $is_array [description]
     * @return [type]            [description]
     */
    public function deleteFile($record, $path, $is_array = FALSE)
    {
        $imageObject = new ImageSettings();
        $destinationPath      = $imageObject->getSettingsImagePath();
        $files = array();
        $files[] = $destinationPath.$record;
        File::delete($files);
    }

    /**
     * [isValidRecord description]
     * @param  [type]  $record [description]
     * @return boolean         [description]
     */
    public function isValidRecord($record)
    {
        if ($record === null) {

            flash('Ooops...!', getPhrase("page_not_found"), 'error');
            return $this->getRedirectUrl();
        }

        return FALSE;
    }

    /**
     * [getRedirectUrl description]
     * @return [type] [description]
     */
    public function getRedirectUrl()
    {
      return URL_SETTINGS_LIST;
    }

    /**
     * [processUpload description]
     * @param  Request $request [description]
     * @param  string  $sfname  [description]
     * @param  boolean $isNew   [description]
     * @return [type]           [description]
     */
    public function processUpload(Request $request, $sfname='value', $isNew = true)
    {
        
         if ($request->hasFile($sfname)) {
          
          $imageObject = new ImageSettings();
          
          $destinationPath      = $imageObject->getSettingsImagePath();
          
          $random_name = str_random(15);
          $fileName = '';
          if($isNew){
              $path = $_FILES[$sfname]['name'];
          $ext = pathinfo($path, PATHINFO_EXTENSION);

       
              $fileName = $random_name.'.'.$ext; 
              $request->file($sfname)->move($destinationPath, $fileName);
          }
          else {
              
              $path = $_FILES[$sfname]['name'];
        
              $ext = pathinfo($path['value'], PATHINFO_EXTENSION);

            $fileName = $random_name.'.'.$ext;//$request->$sfname['value']->guessClientExtension();
            
            move_uploaded_file($_FILES[$sfname]['tmp_name']['value'], $destinationPath.$fileName);
        }
          
          return $fileName;
 
        }
     }


    /**
     * This method updates the Environment File which contains all master settings
     * @param  array  $data [description]
     * @return [type]       [description]
     */
    public function updateEnvironmentFile($data = array())
    {
      if(count($data)>0) {
       $env = file_get_contents(base_path() . '/.env');
       $env = preg_split('/\s+/', $env);
       
        foreach((array)$data as $key => $value){

                // Loop through .env-data
                foreach($env as $env_key => $env_value){

                    // Turn the value into an array and stop after the first split
                    // So it's not possible to split e.g. the App-Key by accident
                    $entry = explode("=", $env_value, 2);

                    // Check, if new key fits the actual .env-key
                    if($entry[0] == $key){
                        // If yes, overwrite it with the new one
                        $env[$env_key] = $key . "=" . $value;
                    } else {
                        // If not, keep the old one
                        $env[$env_key] = $env_value;
                    }
                }
            }
             $env = implode("\n", $env);
              file_put_contents(base_path() . '/.env', $env);
              return TRUE;
            }
            else
            {
              return FALSE;
            }

    }


    /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_SETTINGS_LIST;
       else
          return false;
    }


}
