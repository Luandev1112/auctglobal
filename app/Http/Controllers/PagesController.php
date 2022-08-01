<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App;
use App\Http\Requests;

use App\ContentPage;
use Exception;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    public function index($slug='')
    {
      
      if (checkRole(getUserGrade(4))) {

          prepareBlockUserMessage();
          return back();
      }

    	$record = ContentPage::getRecordWithSlug($slug);

    	if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);

        $data['record'] 		= $record;
    	  $data['active_class']   = 'home';
        $data['layout']         = getLayout();
        $data['title']          = $record->title;
        $data['breadcrumb']     = TRUE;
  
        return view('home.pages.index', $data);
    }


    /**
     * [contact description]
     * @return [type] [description]
     */
    public function contact()
    {

     /* if (checkRole(getUserGrade(4))) {

          prepareBlockUserMessage();
          return back();
      }*/

    	  $data['active_class']   = 'home';
        $data['layout']         = getLayout();
        $data['title']          = 'Contact Us';
        $data['breadcrumb']     = TRUE;

        return view('home.pages.contact', $data);
    }

    /**
     * [contactUs description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function contactUs(Request $request)
    {

     /* if (checkRole(getUserGrade(4))) {

          prepareBlockUserMessage();
          return back();
      }*/
      
        $this->validate($request, [
         'name'      => 'bail|required|max:50',
         'contact_email'     => 'bail|required|max:50',
         'subject' => 'bail|required|max:100',
         'message' => 'bail|required|max:200'
        ]);


        if (!env('DEMO_MODE')) {

           try {
                sendEmail('contact_mail_to_admin', array('username'=>$request->name, 'email'=>$request->contact_email, 'subject'=>$request->subject, 'message'=>$request->message, 'to_email' => getSetting('contact_email','site_settings'),'site_url'=>PREFIX, 'date'=>date('Y-m-d')));

                flash('success','email_sent_successfully', 'success');

            } catch(Exception $ex) {
        
                flash('oops...!', $ex->getMessage(), 'error');
            }
        } else {
            flash('info','crud_operations_disabled_in_demo', 'info'); 
        }

        
        
        return redirect(URL_CONTACT_US);
    }

    /**
     * [faqs description]
     * @return [type] [description]
     */
    public function faqs()
    {

      if (checkRole(getUserGrade(4))) {

          prepareBlockUserMessage();
          return back();
      } 

        $faqs = \App\FaqCategory::where('status','Active')->orderBy('id','asc')->get();
        $data['faqs']           = $faqs;

        $route = Route::getFacadeRoot()->current()->uri();
        $data['route'] = $route;

        $data['active_class']   = 'home';
        $data['layout']         = getLayout();
        $data['title']          = 'FAQs';
        $data['breadcrumb']     = TRUE;

        return view('home.pages.faqs', $data);
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
      return PREFIX;
    }



     /**
      * This method returns the faqs based on selected category
      * @param  [type] $request [description]
      * @return [type] array    [description]
      */
     public function getCategoryFaqs(Request $request)
     {
        $category_id = $request->category_id;

        $category_faqs = \App\FaqQuestion::select('id','question_text','answer_text')
                    ->where('category_id','=',$category_id)
                    ->where('status','Active')
                    ->get();

        return json_encode(array('category_faqs'=>$category_faqs));
     }


    public function imageGallary() 
    {
            
        $data['active_class']   = 'home';
        $data['layout']         = getLayout();
        $data['title']          = 'IMAGE GALLARY';
        $data['breadcrumb']     = TRUE;
  
        return view('home.pages.images', $data);
    }

}
