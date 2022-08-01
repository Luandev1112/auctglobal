<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use Symfony\Component\Debug\Exception\FatalThrowableError;


use App\User;
use App\Template;

class NewUserRegistration extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    
    protected $user = null;
    protected $user_type=null;
    protected $password=null;

    public function __construct(User $user, $user_type='',$password='')
    {
        $this->user = $user;
        $this->user_type = $user_type;
        $this->password = $password;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }


    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
       /* return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');*/

        

        if ($this->user_type == 'user') {

            $template = Template::where('slug','=','registration')->first();
             
            if ($template) {

            $header = Template::where('title', '=', 'header')->first();
            $footer = Template::where('title', '=', 'footer')->first();
            
            $view = \View::make('emails.template', [
                                                    'header' => $header->content, 
                                                    'footer' => $footer->content,
                                                    'body'  => $template->content, 
                                                    ]);

            $view = $view->render();  
           
            $view = \Blade::compileString($view);    

            

            $data = array(
                        'username'      => $this->user->username,
                        'site_title'    => getSetting('site_title','site_settings'),
                        'user_type'     => ucfirst(getRoleData($this->user->role_id)),
                        'email'         => $this->user->email,
                        'password'      => $this->password,
                        'site_url'      => PREFIX,
                        'date'          => date('Y-m-d')
             );

            $view = $this->render($view, $data);

            
            return (new MailMessage)->view('emails.email',array('view'=>$view));  
            } 

        } else {

            $template = Template::where('slug','=','register_admin_email')->first();
             
            
            if ($template) {
            $header = Template::where('title', '=', 'header')->first();
            $footer = Template::where('title', '=', 'footer')->first();
            
            $view = \View::make('emails.template', [
                                                    'header' => $header->content, 
                                                    'footer' => $footer->content,
                                                    'body'  => $template->content, 
                                                    ]);

            $view = $view->render();  
            // dd(html_entity_decode(strip_tags($view)));

            $view = \Blade::compileString($view);    

            $data = array(
                        'username'      => $this->user->username,
                        'site_title'    => getSetting('site_title','site_settings'),
                        'user_type'     => ucfirst(getRoleData($this->user->role_id)),
                        'site_url'      => PREFIX,
                        'date'=> date('Y-m-d')
                           
            );

            $view = $this->render($view, $data);

           
            return (new MailMessage)->view('emails.email',array('view'=>$view));  
            }
        }        
    }

     /**
     * Database notification to admin -If bidder register through portal
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDatabase($notifiable)
    {
         if ($this->user_type == 'admin') {
               return [
                'title' => 'New User Registered',
                'description' =>  $this->user->getUserTitle().' has been Successfully Registered as '.ucfirst(getRoleData($this->user->role_id)),
                'url' => URL_USERS_VIEW.'/'.$this->user->slug,
                'image' => getProfilePath($this->user->image)
            ];
        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }


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
