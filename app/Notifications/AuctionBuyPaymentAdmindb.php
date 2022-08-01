<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\User;

class AuctionBuyPaymentAdmindb extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    
    protected $user = null;
    protected $paid_amount = null;
    public function __construct(User $user,$paid_amount)
    {
        $this->user  = $user;
        $this->paid_amount = $paid_amount;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }


    /**
     * Database notification to admin -If bidder register through portal
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDatabase($notifiable)
    {
        $currency   = getSetting('currency_code','site_settings');
       
        return [
            'title'=>'User Paid Auction Amount',
            'description'=>$this->user->username.' has been Successfully Paid Amount   '.$currency.$this->paid_amount,
            'url' => URL_PAYMENT_HISTORY,
             'image' => getProfilePath($this->user->image)
        ];
    
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
}
