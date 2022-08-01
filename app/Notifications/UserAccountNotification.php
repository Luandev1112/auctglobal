<?php

namespace App\Notifications;


use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\User;
use App\Template;

class UserAccountNotification extends Notification
{
    use Queueable;



    /**
     * Create a new notification instance.
     *
     * @return void
     */
    
    protected $user = null;
    protected $account_status=null;

    public function __construct(User $user,$account_status)
    {
        $this->user  = $user;
        $this->account_status = $account_status;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
       
        $template = Template::where('slug','=','user_account_status')->first();
             
            
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
                        'account_status'=> $this->account_status,
                        'site_url'      => PREFIX,
                        'date'          => date('Y-m-d')

                      
            );

          
            $view = $this->render($view, $data);
           
            
            return (new MailMessage)->view('emails.email',array('view'=>$view));    

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
