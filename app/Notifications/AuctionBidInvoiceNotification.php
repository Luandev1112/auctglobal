<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;


use App\User;
use App\Template;

class AuctionBidInvoiceNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    

    protected $user = null;
    protected $user_type=null;
    protected $details  =null;

    public function __construct(User $user, $user_type,$details)
    {
        $this->user       = $user;
        $this->user_type  = $user_type;
        $this->details    = $details;
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
       
        if ($this->user_type=='bidder') {   

            $template = Template::where('slug','=','admin_send_email_invoice_to_bidder')->first();
                 
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

                $data = $this->details;

                $view = $this->render($view, $data);

               
                return (new MailMessage)->view('emails.email',array('view'=>$view)); 
            }  

        } elseif ($this->user_type=='admin') {

            $template = Template::where('slug','=','auction_bid_invoice_sent_to_bidder')->first();
                 
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

                $data = $this->details;

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
        if ($this->user_type=='bidder') {

            return [
                'title'       => 'Auction Invoice sent by Admin',
                'description' => 'Admin has sent an Invoice '.$this->details['auction_title'],
                'url'         => URL_BIDDER_AUCTIONS,
                'image'       => getAuctionImage($this->details['image'])
            ];

        } elseif ($this->user_type=='admin') {

            return [
                'title'       => 'Auction invoice to sent to bidder',
                'description' => 'Invoice has been sent to bidder '.$this->details['auction_title'],
                'url'         => URL_AUCTIONS_VIEW.$this->details['auction_slug'],
                'image'       => getAuctionImage($this->details['image'])
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
