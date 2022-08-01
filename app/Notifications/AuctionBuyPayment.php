<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use Symfony\Component\Debug\Exception\FatalThrowableError;

use App\User;
use App\Template;
use App\Payment;

class AuctionBuyPayment extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    
    protected $user             = null;
    protected $auction          = null;
    protected $payment_record   = null;
    protected $user_type        = null;

    public function __construct(User $user, $auction, $payment_record, $user_type)
    {
        $this->user             = $user;
        $this->auction          = $auction;
        $this->payment_record   = $payment_record; 
        $this->user_type        = $user_type;
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
         $user       = $this->user;
        $auction    = $this->auction;
        $payment    = $this->payment_record;
        $currency   = getSetting('currency_code','site_settings');

       
        $billing_country    = '';
        $billing_state      = '';
        $billing_city       = '';
        $shipping_country   = '';
        $shipping_state     = '';
        $shipping_city      = '';

        

        if (count($payment->getBillingCountry())) {
            $billing_country = $payment->getBillingCountry()->title;
        }
        if (count($payment->getBillingState())) {
            $billing_state = $payment->getBillingState()->state;
        }
        if (count($payment->getBillingCity())) {
            $billing_city = $payment->getBillingCity()->city;
        }


        if (count($payment->getShippingCountry())) {
            $shipping_country = $payment->getShippingCountry()->title;
        }
        if (count($payment->getShippingState())) {
            $shipping_state = $payment->getShippingState()->state;
        }
        if (count($payment->getShippingCity())) {
            $shipping_city = $payment->getShippingCity()->city;
        }

        
       $data = array(
                        'user_name'     => $user->username,
                        'currency'      => $currency,
                        'amount'        => $payment->paid_amount,
                        'auction_title' => $auction->title,
                        'date'          => date('Y-m-d'),
                        'user_name'     => $user->username,
                        'email'         => $user->email,
                        'phone'         => $user->phone,
                        'auction_title' => $auction->title,
                        'currency'      => $currency,
                        'reserve_price' => $auction->reserve_price,
                        'start_date'    => $auction->start_date,
                        'end_date'      => $auction->end_date,
                        'payment_gateway' => ucfirst($payment->payment_gateway),
                        'payment_for'     => get_text($payment->payment_for),
                        'currency'        => $currency,
                        'paid_amount'     => $payment->paid_amount,
                        'payment_status'  => ucfirst($payment->payment_status),
                        'transaction_id'  => $payment->transaction_id,
                        'billing_name'    => $payment->billing_name,
                        'billing_email'   => $payment->billing_email,
                        'billing_phone'   => $payment->billing_phone,
                        'billing_country' => $billing_country,
                        'billing_state'   => $billing_state,
                        'billing_city'    => $billing_city,
                        'billing_address' => $payment->billing_address,
                        'shipping_name'   => $payment->shipping_name,
                        'shipping_email'  => $payment->shipping_email,
                        'shipping_phone'  => $payment->shipping_phone,
                        'shipping_country' => $shipping_country,
                        'shipping_state'   => $shipping_state,
                        'shipping_city'    => $shipping_city,
                        'shipping_address' => $payment->shipping_address,
                        'site_title'    => getSetting('site_title','site_settings'),
                        'site_url'      => PREFIX
                           
            );



         if ($this->user_type == 'user') {

            $template = Template::where('slug','=','user_bought_auction')->first();
             
            
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

            $view = $this->render($view, $data);

            return (new MailMessage)->view('emails.email',array('view'=>$view));  

            } 

        } elseif ($this->user_type == 'admin') {

            $template = Template::where('slug','=','user_paid_auction_amount_admin')->first();
             
            
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
        $currency   = getSetting('currency_code','site_settings');

         if ($this->user_type == 'admin') {
               return [
                'title' => 'User Paid Auction Amount',
                'description' =>  $this->user['user']->getUserTitle().' has been Successfully Paid Amount '.$currency.$this->user['payment_record']->paid_amount,
                'url' => URL_PAYMENT_HISTORY,
                'image' => getProfilePath($this->user['user']->image)
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
