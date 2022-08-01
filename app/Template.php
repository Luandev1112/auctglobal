<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Traits\FilterByUser;

/**
 * Class Template
 *
 * @package App
 * @property string $key
 * @property enum $type
 * @property string $subject
 * @property string $from_email
 * @property string $from_name
 * @property text $content
 * @property string $created_by
*/
class Template extends Model
{
    // use SoftDeletes;

    protected $fillable = ['key', 'type', 'subject', 'from_email', 'from_name', 'content'];
    
    
    public static function boot()
    {
        parent::boot();

        Template::observe(new \App\Observers\UserActionsObserver);
    }

    public static $enum_type = ["Content" => "Content", "Header" => "Header", "Footer" => "Footer"];

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCreatedByIdAttribute($input)
    {
        $this->attributes['created_by_id'] = $input ? $input : null;
    }
    
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

     /**
     * [getRecordWithSlug description]
     * @param  [string] $slug [description]
     * @return [array]       [description]
     */
    public static function getRecordWithSlug($slug)
    {
        return Template::where('slug','=',$slug)->first();
    }
    

     /**
     * Common email function to send emails
     * @param  [type] $template [key of the template]
     * @param  [type] $data     [data to be passed to view]
     * @return [type]           [description]
     */
    public function sendEmail($template, $data)
    {   
        $template = Template::where('slug', '=', $template)->first();
        
        $content = \Blade::compileString($this->getTemplate($template));
        $result = $this->render($content, $data);
        
        \Mail::send('emails.template', ['body' => $result], function ($message) use ($template, $data) 
        {
            // $message->from($template->from_email, $template->from_name);
             $message->from(getSetting('contact_email','site_settings'), getSetting('site_title','site_settings'));
            $message->to($data['to_email'])->subject($template->subject);
        });
    }

    /**
     * Returns the template html code by forming header, body and footer
     * @param  [type] $template [description]
     * @return [type]           [description]
     */
    public function getTemplate($template)
    {
        
        $header = Template::where('title', '=', 'header')->first();

        $footer = Template::where('title', '=', 'footer')->first();
           
        $view = \View::make('emails.template', [
                                                'header' => $header->content, 
                                                'footer' => $footer->content,
                                                'body'  => $template->content, 
                                                ]);

        return $view->render();
    }

    /**
     * Prepares the view from string passed along with data
     * @param  [type] $__php  [description]
     * @param  [type] $__data [description]
     * @return [type]         [description]
     */
    public function render($__php, $__data)
    {
        $obLevel = ob_get_level();
        ob_start();
        extract($__data, EXTR_SKIP);
        try {
            eval('?' . '>' . $__php);
        } catch (Exception $e) {
            while (ob_get_level() > $obLevel) ob_end_clean();
            throw $e;
        } catch (Throwable $e) {
            while (ob_get_level() > $obLevel) ob_end_clean();
            throw new FatalThrowableError($e);
        }
        return ob_get_clean();
    }
}
