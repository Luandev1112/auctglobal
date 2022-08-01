<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\User;
use App\Template;

class UserForgotPassword extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    
    protected $user = null;
    protected $password=null;

    public function __construct(User $user, $password)
    {
        $this->user = $user;
        $this->password  = $password;
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
        $template = Template::where('slug','=','forgot_password')->first();
             
        if ($template) {


            $data = array(
                        'username'      => $this->user->username,
                        'email'         => $this->user->email,
                        'password'      => $this->password,
                        'site_title'    => getSetting('site_title','site_settings'),
                        'date'          => date('Y-m-d'),
                        'site_url'      => PREFIX
                    );


            $header = Template::where('title', '=', 'header')->first();
            $footer = Template::where('title', '=', 'footer')->first();
            
            $view = \View::make('emails.template', [
                                                    'header' => $header->content, 
                                                    'footer' => $footer->content,
                                                    'body'  => $template->content, 
                                                    ]);

            $view = $view->render();  
            

            $view = \Blade::compileString($view);    

            $view = $this->render($view, $data);

            return (new MailMessage)->view('emails.email',array('view'=>$view));  
        }

        /*return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');*/
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
