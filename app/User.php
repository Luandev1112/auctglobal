<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Hash;

/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property tinyInteger $approved
*/
class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    protected $fillable = ['name', 'email', 'password', 'remember_token', 'approved', 'provider', 'provider_id'];
    
    
    public static function boot()
    {
        parent::boot();

        User::observe(new \App\Observers\UserActionsObserver);
    }
    
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
         return $this->belongsToMany('App\Role', 'role_user');
         
    }
    
    /**
     * [role description]
     * @return [type] [description]
     */
    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
    
    /**
     * [topics description]
     * @return [type] [description]
     */
    public function topics() 
    {
        return $this->hasMany(MessengerTopic::class, 'receiver_id')->orWhere('sender_id', $this->id);
    }

    /**
     * [inbox description]
     * @return [type] [description]
     */
    public function inbox()
    {
        return $this->hasMany(MessengerTopic::class, 'receiver_id');
    }

    /**
     * [outbox description]
     * @return [type] [description]
     */
    public function outbox()
    {
        return $this->hasMany(MessengerTopic::class, 'sender_id');
    }

    /**
     * [internalNotifications description]
     * @return [type] [description]
     */
    public function internalNotifications()
    {
        return $this->belongsToMany(InternalNotification::class)
            ->withPivot('read_at')
            ->orderBy('internal_notification_user.created_at', 'desc')
            ->limit(10);
    }

    /**
     * [sendPasswordResetNotification description]
     * @param  [type] $token [description]
     * @return [type]        [description]
     */
    public function sendPasswordResetNotification($token)
    {
       $this->notify(new ResetPassword($token));
    }

    /**
     * This method will return the user title
     * @return [type] [description]
     */
    public function getUserTitle()
    {
        return ucfirst($this->name);
    }

    /**
     * [getLatestUsers description]
     * @param  integer $limit [description]
     * @return [type]         [description]
     */
    public function getLatestUsers($limit = 5)
    {
        return User::where('role_id','!=',getRoleData('admin'))
                    ->orderBy('id','desc')
                    ->limit($limit)
                    ->get();
    }

    /**
     * [getSellerAuctionsCount description]
     * @return [type] [description]
     */
    public function getSellerAuctionsCount()
    {
        return $this->hasMany(Auction::class,'user_id')->count();
    }

    /**
     * [getBidderFavAuctions description]
     * @return [type] [description]
     */
    public function getBidderFavAuctions() 
    {
        return $this->hasMany(Favouriteauction::class,'user_id')
                    ->join('auctions','favouriteauctions.auction_id','auctions.id')
                    ->select(['favouriteauctions.id as fav_id','auctions.id','auctions.slug','auctions.image','auctions.title','auctions.start_date','auctions.end_date','auctions.reserve_price','auctions.auction_status'])->get();
    }


    /**
     * [getBidderParicipatedAuctions description]
     * @return [type] [description]
     */
    public function getBidderParicipatedAuctions() 
    {
        return $this->hasMany(AuctionBidder::class,'bidder_id')
                    ->join('auctions','auctionbidders.auction_id','auctions.id')
                    ->select(['auctionbidders.*','auctions.slug as auction_slug','auctions.image','auctions.title','auctions.start_date','auctions.end_date','auctions.reserve_price'])->get();
    }

    /**
     * [getBidderBoughtAuctions description]
     * @return [type] [description]
     */
    public function getBidderBoughtAuctions() 
    {
        return $this->hasMany(Payment::class,'user_id')
                    ->join('auctions','payments.auction_id','auctions.id')
                    ->select(['payments.*','auctions.slug','auctions.image','auctions.title','auctions.reserve_price','auctions.buy_now_price'])
                    ->where('payments.payment_status',PAYMENT_STATUS_SUCCESS)
                    ->get();
    }


    /**
     * [getBidderPayments description]
     * @return [type] [description]
     */
    public function getBidderPayments() 
    {
        return $this->hasMany(Payment::class,'user_id')
                    ->where('payments.payment_status',PAYMENT_STATUS_SUCCESS)
                    ->get();
    }

    /**
     * [getTotalBidders description]
     * @return [type] [description]
     */
    public static function getTotalBidders()
    {
        return User::where('role_id',getRoleData('bidder'))->count();
    }

    /**
     * [getTotalSellers description]
     * @return [type] [description]
     */
    public static function getTotalSellers()
    {
        return User::where('role_id',getRoleData('seller'))->count();
    }

    /**
     * [getCompanyLogos description]
     * @return [type] [description]
     */
    public static function getCompanyLogos()
    {
        return User::join('auctions','users.id','auctions.user_id')
                    ->select(['users.id','users.slug','users.username','users.company_logo'])
                    ->where('users.role_id',getRoleData('seller'))
                    ->where('users.approved',1)
                    ->where('users.company_logo','!=',null)
                    ->distinct('users.id')
                    ->get();      
    }

    /**
     * [getBidderWonAuctions description]
     * @return [type] [description]
     */
    public function getBidderWonAuctions() 
    {
        return $this->hasMany(AuctionBidder::class,'bidder_id')
                    ->join('auctions','auctionbidders.auction_id','auctions.id')
                    ->select(['auctionbidders.*','auctions.slug','auctions.image','auctions.title','auctions.start_date','auctions.end_date','auctions.reserve_price'])
                    ->where('auctionbidders.is_bidder_won','Yes')
                    ->get();
    }

    /**
     * [getBillingCountry description]
     * @return [type] [description]
     */
    public function getBillingCountry()
    {
        return $this->belongsTo(Country::class, 'billing_country')->select('countries.title')->first();
    }

    /**
     * [getBillingState description]
     * @return [type] [description]
     */
    public function getBillingState()
    {
        return $this->belongsTo(State::class, 'billing_state')->select('states.state')->first();
    }

    /**
     * [getBillingCity description]
     * @return [type] [description]
     */
    public function getBillingCity()
    {
        return $this->belongsTo(City::class, 'billing_city')->select('cities.city')->first();
    }

    /**
     * [getShippingCountry description]
     * @return [type] [description]
     */
    public function getShippingCountry()
    {
        return $this->belongsTo(Country::class, 'shipping_country')->select('countries.title')->first();
    }

    /**
     * [getShippingState description]
     * @return [type] [description]
     */
    public function getShippingState()
    {
        return $this->belongsTo(State::class, 'shipping_state')->select('states.state')->first();
    }

    /**
     * [getShippingCity description]
     * @return [type] [description]
     */
    public function getShippingCity()
    {
        return $this->belongsTo(City::class, 'shipping_city')->select('cities.city')->first();
    }
}
