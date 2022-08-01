<?php

namespace App\Http\Controllers\Admin;

use App\ContentPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreContentPagesRequest;
use App\Http\Requests\Admin\UpdateContentPagesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ContentPagesController extends Controller
{
    use FileUploadTrait;


     public function __construct()
    {
         $this->middleware('auth');
    }
    
    /**
     * Display a listing of ContentPage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $content_pages = ContentPage::all();

        $data['title']              = getPhrase('pages');
        $data['active_class']       = 'content_management';

        $data['content_pages']      = $content_pages;

        return view('admin.content_pages.index', $data);
    }

    /**
     * Show the form for creating new ContentPage.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $data['title']        = getPhrase('pages');
        $data['active_class'] = 'content_management';
        $data['record']       = FALSE;

        return view('admin.content_pages.add-edit', $data);
    }

    /**
     * Store a newly created ContentPage in storage.
     *
     * @param  \App\Http\Requests\StoreContentPagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

         $this->validate($request, [
         'title'      => 'bail|required|max:50',
         'page_text'   => 'bail|required',
        
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }

        $record = new ContentPage();

        $title = $request->title;

        $record->title = $title;
        $record->slug            = $record->makeSlug($title, TRUE);
        $record->page_text       = $request->page_text;
        $record->status          = $request->status;

        $record->save();
        
        flash('success','record_added_successfully', 'success');
        return redirect(URL_PAGES);
    }


    /**
     * Show the form for editing ContentPage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $data['title']        = getPhrase('edit');
        $data['active_class'] = 'content_management';

        $page = ContentPage::getRecordWithSlug($slug);
        
        if ($isValid = $this->isValidRecord($page))
             return redirect($isValid);
       

        $data['record'] = $page;

        return view('admin.content_pages.add-edit', $data);
    }

    /**
     * Update ContentPage in storage.
     *
     * @param  \App\Http\Requests\UpdateContentPagesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
       
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $record = ContentPage::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($record))
             return redirect($isValid);

        $this->validate($request, [
         'title'      => 'bail|required|max:50',
         'page_text'   => 'bail|required',
        
        ]);

        if ($redirect = $this->check_isdemo()) {
            flash('info','crud_operations_disabled_in_demo', 'info');
            return redirect($redirect);
        }


        $title = $request->title;

        /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($title != $record->title)
            $record->slug = $record->makeSlug($title, TRUE);


        $record->title         = $title;
        $record->page_text     = $request->page_text;
        $record->status        = $request->status;


        $record->save();

        flash('success','record_updated_successfully', 'success');
        return redirect(URL_PAGES);
    }


    /**
     * Display ContentPage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $content_page = ContentPage::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($content_page))
             return redirect($isValid);
         
        $data['title']        = getPhrase('view');
        $data['active_class'] = 'content_management';
        
        $data['content_page'] = $content_page;

        return view('admin.content_pages.show', $data);
    }


    /**
     * Remove ContentPage from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content_page = ContentPage::findOrFail($id);
        $content_page->delete();

        return redirect()->route('admin.content_pages.index');
    }

    /**
     * Delete all selected ContentPage at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }
        
        $page = ContentPage::where('id',$request->id)->first();

        if ($isValid = $this->isValidRecord($page)) {

            $response['status']  = 0;
            $response['message'] = getPhrase('record_not_found');
            return json_encode($response);
        }

        if ($redirect = $this->check_isdemo()) {
            
            $response['status']  = 0;
            $response['message'] = getPhrase('crud_operations_disabled_in_demo');
            return json_encode($response);
        }

        if ($request->id) {

            try {
                  if(!env('DEMO_MODE')) {
                     
                    $entries = ContentPage::where('id', $request->id)->get();

                        foreach ($entries as $entry) {
                            $entry->delete();
                        }

                  }
                $response['status'] = 1;
                $response['message'] = getPhrase('record_deleted_successfully');

            }
            catch ( \Illuminate\Database\QueryException $e) {

                   $response['status'] = 0;
                   if(getSetting('show_foreign_key_constraint','module'))
                    $response['message'] =  $e->errorInfo;
                   else
                    $response['message'] =  getPhrase('this_record_is_in_use_in_other_modules');
            }  

            
        } else {

            $response['status'] = 0;
            $response['message'] = getPhrase('invalid_operation');
        }

        return json_encode($response);
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
      return URL_PAGES;
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_PAGES;
       else
          return false;
    }


}
