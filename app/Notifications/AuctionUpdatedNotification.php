<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\User;
use App\Template;

class AuctionUpdatedNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    
    protected $user = null;
    protected $user_type=null;
    protected $auction=null;
    protected $seller_name=null;

    public function __construct(User $user, $user_type,$auction,$seller_name='')
    {
        $this->user             = $user;
        $this->user_type        = $user_type;
        $this->auction    = $auction;
        $this->seller_name = $seller_name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        /*return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');*/

         $template = Template::where('slug','=','auction_updated')->first();
             
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
                        'auction_title' => $this->auction->title,
                        'user'          => ($this->user_type=='seller') ? 'Admin' : $this->seller_name,
                        'site_title'    => getSetting('site_title','site_settings'),
                        'site_url'      => PREFIX,
                        'date'          => date('Y-m-d')
            );

            $view = $this->render($view, $data);

           
            return (new MailMessage)->view('emails.email',array('view'=>$view)); 
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
         if ($this->user_type=='seller') {

               return [
                'title' => 'An Auction Updated by Admin',
                'description' =>  ' Admin has updated an auction '.$this->auction->title,
                'url' => URL_AUCTIONS_VIEW.$this->auction->slug,
                'image' => getAuctionImage($this->auction->image)
            ];
        } else if ($this->user_type=='admin') {

                return [
                'title' => 'An Auction Updated by Seller ',
                'description' =>  ' Seller '.$this->seller_name.' has updated an auction '.$this->auction->title,
                'url' => URL_AUCTIONS_VIEW.$this->auction->slug,
                'image' => getAuctionImage($this->auction->image)
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
