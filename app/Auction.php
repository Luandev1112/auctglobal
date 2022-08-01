<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

// use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Traits\FilterByUser;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

use App\Category;
use App\SubCatogory;
use App\AuctionBidder;
use App\Payment;
use DB;
/**
 * Class Create
 *
 * @package App
 * @property string $title
 * @property string $category
 * @property string $sub_category
 * @property text $description
 * @property string $start_date
 * @property string $end_date
 * @property decimal $minimum_bid
 * @property decimal $reserve_price
 * @property decimal $buy_now_price
 * @property decimal $bid_increment
 * @property string $shipping_conditions
 * @property tinyInteger $international_shipping
 * @property text $shipping_terms
 * @property tinyInteger $make_featured
 * @property enum $status
 * @property string $created_by
 * @property string $user
*/
class Auction extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = ['title', 'description', 'start_date', 'end_date', 'minimum_bid', 'reserve_price', 'buy_now_price', 'bid_increment', 'shipping_conditions', 'international_shipping', 'shipping_terms', 'make_featured', 'auction_status', 'admin_status' , 'category_id', 'sub_category_id', 'created_by_id', 'user_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Auction::observe(new \App\Observers\UserActionsObserver);
    }

    public static $enum_status = ["new" => "New", "open" => "Open", "suspended" => "Suspended", "closed" => "Closed"];

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCategoryIdAttribute($input)
    {
        $this->attributes['category_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setSubCategoryIdAttribute($input)
    {
        $this->attributes['sub_category_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setStartDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['start_date'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['start_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getStartDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setEndDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['end_date'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['end_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getEndDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setMinimumBidAttribute($input)
    {
        $this->attributes['minimum_bid'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setReservePriceAttribute($input)
    {
        $this->attributes['reserve_price'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setBuyNowPriceAttribute($input)
    {
        $this->attributes['buy_now_price'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setBidIncrementAttribute($input)
    {
        $this->attributes['bid_increment'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCreatedByIdAttribute($input)
    {
        $this->attributes['created_by_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setUserIdAttribute($input)
    {
        $this->attributes['user_id'] = $input ? $input : null;
    }
    
    /**
     * [category description]
     * @return [type] [description]
     */
    public function category()
    {
        // return $this->belongsTo(Category::class, 'category_id')->withTrashed();
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    /**
     * [sub_category description]
     * @return [type] [description]
     */
    public function sub_category()
    {
        // return $this->belongsTo(SubCatogory::class, 'sub_category_id')->withTrashed();
        return $this->belongsTo(SubCatogory::class, 'sub_category_id');
    }
    
    /**
     * [created_by description]
     * @return [type] [description]
     */
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
    
    /**
     * [user description]
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    /**
     * [getActiveCategoryOptions description]
     * @return [type] [description]
     */
    public static function getActiveCategoryOptions()
    {
        return Category::where('status','Active')->get()->pluck('category','id');
    }

    /**
     * [getCategoryOptions description]
     * @return [type] [description]
     */
    public static function getCategoryOptions()
    {
        return Category::get()->pluck('category','id');
    }

    /**
     * [getSellerOptions description]
     * @return [type] [description]
     */
    public static function getSellerOptions()
    {
        return \App\User::get()->where('role_id',getRoleData('seller'))->pluck('username','id');
    }


    /**
     * [getRecordWithSlug description]
     * @param  [string] $slug [description]
     * @return [array]       [description]
     */
    public static function getRecordWithSlug($slug)
    {
        return Auction::where('slug','=',$slug)->first();
    }


     /**
     * This method returns the overall completed, pending, live and cancelled auctions as summary
     * @return [type] [description]
     */
    public function getAuctionsStatisticsCount($user_type='',$user_id='')
    {
        $data = [];
        if ($user_type!='' && $user_id!='') {

            if ($user_type=='seller') {

            $data['new_count']          = Auction::where('auction_status','=','new')->where('user_id','=',$user_id)->count();
            $data['opened_count']       = Auction::where('auction_status','=','open')->where('user_id','=',$user_id)->count();
            $data['suspended_count']    = Auction::where('auction_status','=','suspended')->where('user_id','=',$user_id)->count();

            $data['closed_count']    = Auction::where('auction_status','=','closed')->where('user_id','=',$user_id)->count();

            } elseif ($user_type == 'bidder') {

                 /*$data['success_count']   = Auction::join('bidders','bidders.auction_id','auctions.id')
                                            ->where('auctions.auction_status','=','completed')
                                            ->where('bidders.user_id','=',$user_id)->count();

               
                $data['cancelled_count']    = Auction::join('bidders','bidders.auction_id','auctions.id')
                                            ->where('auctions.auction_status','=','cancelled')
                                            ->where('bidders.user_id','=',$user_id)->count();

                $data['pending_count']      = Auction::join('bidders','bidders.auction_id','auctions.id')
                                            ->where('auctions.auction_status','=','pending')
                                            ->where('bidders.user_id','=',$user_id)->count();*/

            }

        } else {

            $data['new_count']       = Auction::where('auction_status','=','new')->count();
            $data['opened_count']    = Auction::where('auction_status','=','open')->count();
            $data['suspended_count'] = Auction::where('auction_status','=','suspended')->count();
            $data['closed_count']       = Auction::where('auction_status','=','closed')->count();
        }

        return $data;
    }
        
    /**
     * [getSellerAuctionsStatistics description]
     * @return [type] [description]
     */
    public function getSellerAuctionsStatistics()
    {
       
        $result = Auction::join('users', 'auctions.user_id', '=', 'users.id')
            ->select(DB::raw('count(auctions.id) as total'), 'users.id')
            ->groupBy('users.id')
            ->get();


        
        
        return $result;
    }


     /**
     * This method returns the list of auction images associated to an auction
     * @return [type] [description]
     */
    public function getAuctionImages()
    {
        return $this->hasMany('App\AuctionImages');
    }

    /**
     * [getHomeLatestAuctions description]
     * @return [type] [description]
     */
    public static function getHomeLatestAuctions()
    {
       
         //which are live now
         return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price'])
                        ->where('auctions.admin_status','approved')
                        ->where('auctions.auction_status','open')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->where('auctions.start_date','<=',NOW())
                        ->where('auctions.end_date','>=',NOW())
                        /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                        ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->orderBy('auctions.id','desc')
                        ->limit(8)
                        ->get();                
    }

    /**
     * [getHomeUpcomingAuctions description]
     * @return [type] [description]
     */
    public static function getHomeUpcomingAuctions()
    {

        return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->join('countries','users.country_id','countries.id')
                        ->join('states','users.state_id','states.id')
                        ->join('cities','users.city_id','cities.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status','auctions.created_at','users.slug as user_slug','users.username','countries.title as country','states.state','cities.city'])
                        ->where('auctions.admin_status','approved')
                        ->where('auctions.start_date','<=',NOW())
                        ->where('auctions.end_date','>=',NOW())
                        /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                        ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->where(function ($query) {
                        $query->where('auctions.auction_status', '=', 'open')
                              ->orWhere('auctions.auction_status', '=', 'new');
                        })
                        ->orderByRaw('RAND()')->take(6)
                        ->get();
                        
    }



    public static function getHomeLiveAuctions()
    {
        //which are sold / auction amount paid - 
        $payment_auctions=Payment::where('payment_status','=','success')
                                    ->pluck('auction_id')
                                    ->toArray();
       
        return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->join('countries','users.country_id','countries.id')
                        ->join('states','users.state_id','states.id')
                        ->join('cities','users.city_id','cities.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status',
                                  'auctions.created_at','auctions.live_auction_date',
                                  'auctions.live_auction_start_time',
                                  'auctions.live_auction_end_time',
                                  'users.slug as user_slug','users.username',
                                  'countries.title as country','states.state','cities.city'])
                        ->where('auctions.admin_status','approved')
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->whereNotIn('auctions.id',$payment_auctions)
                        ->whereDate ('auctions.live_auction_date','=',DATE('Y-m-d'))//correct
                        ->where(function ($query) {
                        $query->whereTime('auctions.live_auction_start_time', '<=', DATE('H:i:s'))
                              ->orWhereTime('auctions.live_auction_start_time', '>=', DATE('H:i:s'));
                        })//correct-happening now,gonna happen today
                        // ->whereTime('auctions.live_auction_start_time', '<=', DATE('H:i:s'))//correct
                        ->whereTime('auctions.live_auction_end_time', '>=', DATE('H:i:s'))//correct
                        /*->where('auctions.start_date','<=',NOW())
                        ->where('auctions.end_date','>=',NOW())*/
                        /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                        ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                        ->where(function ($query) {
                        $query->where('auctions.auction_status', '=', 'open')
                              ->orWhere('auctions.auction_status', '=', 'new');
                        })
                        // ->orderBy('auctions.id','desc')->take(6)
                        ->orderByRaw('RAND()')->take(6)
                        ->get();
                        
    }



    /**
     * [getHomeFeaturedAuctions description]
     * @param  string $limit [description]
     * @return [type]        [description]
     */
    public static function getHomeFeaturedAuctions($limit='')
    {
        //which are live and upcoming
        return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status'])
                        ->where('auctions.make_featured',1)
                        ->where('auctions.admin_status','approved')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->where('auctions.start_date','<=',NOW())
                        ->where('auctions.end_date','>=',NOW())
                        /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                        ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->where(function ($query) {
                        $query->where('auctions.auction_status', '=', 'open')
                              ->orWhere('auctions.auction_status', '=', 'new');
                        })
                        ->orderBy('auctions.id','desc')
                        ->limit($limit)
                        ->get();
    }

    /**
     * [getHomeBuyNowAuctions description]
     * @param  string $limit [description]
     * @return [type]        [description]
     */
    public static function getHomeBuyNowAuctions($limit='')
    {

        return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status','auctions.buy_now_price'])
                        ->where('auctions.is_buynow',1)
                        ->where('buy_now_price','>',0)
                        ->where('auctions.admin_status','approved')
                        ->where('auctions.auction_status','open')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->where('auctions.start_date','<=',NOW())
                        ->where('auctions.end_date','>=',NOW())
                        /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                        ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->orderBy('auctions.id','desc')
                        ->limit($limit)
                        ->get();
    }

    /**
     * [getHomeNewAuctions description]
     * @param  string $limit [description]
     * @return [type]        [description]
     */
    public static function getHomeNewAuctions($limit='')
    {
        //which are live and upcoming
        return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status'])
                        ->where('auctions.admin_status','approved')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->where('auctions.start_date','<=',NOW())
                        ->where('auctions.end_date','>=',NOW())
                        /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                        ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->where(function ($query) {
                        $query->where('auctions.auction_status', '=', 'open')
                              ->orWhere('auctions.auction_status', '=', 'new');
                        })
                        ->orderBy('auctions.id','desc')
                        ->limit($limit)
                        ->get();
    }

    /**
     * [getHomePastAuctions description]
     * @param  string $limit [description]
     * @return [type]        [description]
     */
    public static function getHomePastAuctions($limit='')
    {

        return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price'])
                        ->where('auctions.auction_status','closed')
                        ->where('auctions.admin_status','approved')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->orderBy('auctions.id','desc')
                        ->limit($limit)
                        ->get();
    }

    /**
     * [getHomeAuctionStatusAuctions description]
     * @param  [type] $status [description]
     * @return [type]         [description]
     */
    public static function getHomeAuctionStatusAuctions($status)
    {

        return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price'])
                        ->where('auctions.auction_status',$status)
                        ->where('auctions.admin_status','approved')
                        /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                        ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                        ->where('auctions.start_date','<=',NOW())
                        ->where('auctions.end_date','>=',NOW())
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->orderBy('auctions.id','desc')->get();
            
                       
    }


    /**
     * [getSellers auctions page]
     * @return [type] [description]
     */
    public static function getSellers()
    {

        return Auction::join('users','auctions.user_id','users.id')
                      ->select(['users.id','users.slug','users.username'])
                      ->where('users.role_id',getRoleData('seller'))
                      ->where('users.approved',1)
                      ->distinct('auctions.user_id')
                      ->get();

    }

    /**
     * [getSellerAuctions description]
     * @return [type] [description]
     */
    public function getSellerAuctions() 
    {
        return $this->hasMany(Auction::class,'user_id')
                        ->where('auctions.auction_status','open')
                        ->where('auctions.admin_status','approved')
                        ->where('auctions.start_date','<=',NOW())
                        ->where('auctions.end_date','>=',NOW());
                        /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                        ->where('auctions.end_date','>=',DATE('Y-m-d'));*/
              
    }

    /**
     * [getCategoryAuctions description]
     * @param  [type] $category_id [description]
     * @return [type]              [description]
     */
    public static function getCategoryAuctions($category_id) 
    {

       return Auction::join('categories','auctions.category_id','categories.id')
                      ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                      ->join('users','auctions.user_id','users.id')
                      ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status'])
                      ->where('auctions.category_id',$category_id)
                      ->where('users.role_id',getRoleData('seller'))
                      ->where('users.approved',1)
                      ->where('categories.status','Active')
                      ->where('sub_catogories.status','Active')
                      ->get();
              
    }

    /**
     * [getSellerRelatedAuctions description]
     * @param  [type] $seller_id [description]
     * @return [type]            [description]
     */
    public static function getSellerRelatedAuctions($seller_id) 
    {

       return Auction::join('users','auctions.user_id','users.id')
                      ->join('categories','auctions.category_id','categories.id')
                      ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                      ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status'])
                      ->where('users.id',$seller_id)
                      ->where('users.role_id',getRoleData('seller'))
                      ->where('users.approved',1)
                      ->where('categories.status','Active')
                      ->where('sub_catogories.status','Active')
                      ->get();
              
    }


    /**
     * [getLatestAuctions description]
     * @return [type] [description]
     */
    public static function getLatestAuctions()
    {
         //which are live and upcoming now
         return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price'])
                        ->where('auctions.admin_status','approved')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->where('auctions.start_date','<=',NOW())
                        ->where('auctions.end_date','>=',NOW())
                        /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                        ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->where(function ($query) {
                        $query->where('auctions.auction_status', '=', 'open')
                              ->orWhere('auctions.auction_status', '=', 'new');
                        })
                        ->orderBy('auctions.id','desc')
                        ->get();                
    }

    /**
     * [getAuctionBiddersCount description]
     * @return [type] [description]
     */
    public function getAuctionBiddersCount()
    {
       return $this->hasMany(AuctionBidder::class,'auction_id')->count();
    }

    /**
     * [getAuctionRecord description]
     * @param  [type] $auction_id [description]
     * @return [type]             [description]
     */
    public static function getAuctionRecord($auction_id)
    {
        return Auction::join('users','auctions.user_id','users.id')
                            ->join('categories','auctions.category_id','categories.id')
                            ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                            ->select(['auctions.*'])
                            ->where('auctions.id',$auction_id)
                            ->where('auctions.admin_status','approved')
                            ->where('auctions.auction_status','open')
                            ->where('users.role_id',getRoleData('seller'))
                            ->where('users.approved',1)
                            ->where('auctions.start_date','<=',NOW())
                            ->where('auctions.end_date','>=',NOW())
                           /* ->where('auctions.start_date','<=',DATE('Y-m-d'))
                            ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                            ->where('categories.status','Active')
                            ->where('sub_catogories.status','Active')
                            ->first();   
    }



    public static function getLiveAuctionRecord($auction_id)
    {
        return Auction::join('users','auctions.user_id','users.id')
                            ->join('categories','auctions.category_id','categories.id')
                            ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                            ->select(['auctions.*'])
                            ->where('auctions.id',$auction_id)
                            ->where('auctions.admin_status','approved')
                            ->where('auctions.auction_status','open')
                            ->where('users.role_id',getRoleData('seller'))
                            ->where('users.approved',1)
                            ->whereDate ('auctions.live_auction_date','=',DATE('Y-m-d'))
                            ->whereTime('auctions.live_auction_start_time', '<=', DATE('H:i:s'))
                            ->whereTime('auctions.live_auction_end_time', '>=', DATE('H:i:s'))
                            ->where('categories.status','Active')
                            ->where('sub_catogories.status','Active')
                            ->first();   
    }



    /**
     * [getLiveAuctions description]
     * @return [type] [description]
     */
    public static function getLiveAuctions()
    {
         //which are live now
         return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.start_date','auctions.end_date'])
                        ->where('auctions.admin_status','approved')
                        ->where('auctions.auction_status', '=', 'open')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->where('auctions.start_date','<=',NOW())
                        ->where('auctions.end_date','>=',NOW())
                        /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                        ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->orderBy('auctions.id','desc')
                        ->get(); 

    }


    //currently happening and gonna happen today
    public static function getBidLiveAuctions()
    {
        //which are live now
        return Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.start_date','auctions.end_date'])
                        ->where('auctions.admin_status','approved')
                        ->where('auctions.auction_status', '=', 'open')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->whereDate ('auctions.live_auction_date','=',DATE('Y-m-d'))//correct
                        ->where(function ($query) {
                        $query->whereTime('auctions.live_auction_start_time', '<=', DATE('H:i:s'))
                              ->orWhereTime('auctions.live_auction_start_time', '>=', DATE('H:i:s'));
                        })//correct-happening now,gonna happen today
                        // ->whereTime('auctions.live_auction_start_time', '<=', DATE('H:i:s'))//correct
                        ->whereTime('auctions.live_auction_end_time', '>=', DATE('H:i:s'))//correct
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->orderBy('auctions.id','desc')
                        ->get(); 

    }








    /**
     * [getAuctionBidders description]
     * @return [type] [description]
     */
    public function getAuctionBidders()
    {
       return $this->hasMany(AuctionBidder::class,'auction_id')
                   ->join('auctions','auctionbidders.auction_id','auctions.id')
                   ->join('users','auctionbidders.bidder_id','users.id')
                   ->select(['auctionbidders.id','users.slug','users.username',
                    'users.email','users.image','auctionbidders.no_of_times'])
                   ->where('users.role_id',getRoleData('bidder'))
                   ->get();

    }

    /**
     * [getAuctionPayment description]
     * @return [type] [description]
     */
    public function getAuctionPayment()
    {
        return $this->hasOne(AuctionBidder::class,'auction_id')
                    ->join('auctions','auctionbidders.auction_id','auctions.id')
                    ->join('payments','auctionbidders.payment_id','payments.id')
                    ->where('auctionbidders.is_bidder_paid','Yes')
                    ->get();
    }
   
    /**
     * [getAuctionBiddingHistory description]
     * @return [type] [description]
     */
    public function getAuctionBiddingHistory()
    {
        return $this->hasMany(AuctionBidder::class,'auction_id')
                    ->join('bidding','auctionbidders.id','bidding.ab_id')
                    ->join('users','auctionbidders.bidder_id','users.id')
                    ->select(['users.id','users.name','bidding.bid_amount'])
                    ->where('users.approved',1)
                    ->where('users.role_id',getRoleData('bidder'))
                    ->orderBy('bidding.id','desc')
                    ->distinct()
                    ->limit(5)
                    ->get('auctionbidders.bidder_id');
                
    }

    /**
     * [getHomeTotalAuctions description]
     * @return [type] [description]
     */
    public static function getHomeTotalAuctions()
    {
       return Auction::get()->count();
    }

    /**
     * [getHomeSaleAuctions description]
     * @return [type] [description]
     */
    public static function getHomeSaleAuctions()
    {
       return Auction::where('is_buynow',1)
                      ->where('buy_now_price','>',0)
                      ->get()->count();
    }


    /**
     * [getRecentWinners description]
     * @return [type] [description]
     */
    public static function getRecentWinners() 
    {
        return AuctionBidder::join('auctions','auctionbidders.auction_id','auctions.id')
                     ->join('users','auctionbidders.bidder_id','users.id')
                     ->join('payments','auctionbidders.payment_id','payments.id')
                     ->select(['auctions.id','auctions.slug','auctions.title','auctions.image','users.slug as user_slug','users.username','auctionbidders.paid_amount'])
                     ->where('auctionbidders.is_bidder_won','Yes')
                     ->where('auctionbidders.is_bidder_paid','Yes')
                     ->where('auctionbidders.paid_amount','>',0)
                     ->where('users.approved',1)
                     ->where('users.role_id',getRoleData('bidder'))
                     ->where('payments.payment_for','bidding')
                     ->where('payments.payment_status','success')
                     ->orderBy('payments.id','desc')
                     ->get();
    }


   /**
    * [getRecentBuyers description]
    * @return [type] [description]
    */
    public static function getRecentBuyers() 
    {
        return Payment::join('auctions','payments.auction_id','auctions.id')
                     ->join('users','payments.user_id','users.id')
                     ->select(['auctions.id','auctions.slug','auctions.title','auctions.image','users.slug as user_slug','users.username','payments.paid_amount'])
                     ->where('payments.payment_for','buy_auction')
                     ->where('payments.paid_amount','>',0)
                     ->where('payments.payment_status','success')
                     ->where('users.approved',1)
                     ->where('users.role_id',getRoleData('bidder'))
                     ->orderBy('payments.id','desc')
                     ->get();
    }


    /**
     * [getBUYNOWAuctionPayment description]
     * @return [type] [description]
     */
    public function getBuyNowAuctionPayment()
    {
        return $this->hasOne(Payment::class,'auction_id')
                    ->join('auctions','payments.auction_id','auctions.id')
                    ->where('payments.payment_status','success')
                    ->where('payments.paid_amount','>',0)
                    ->where('payments.payment_for','buy_auction')
                    ->get();
    }



     /**
     * [getRecordWithSlug description]
     * @param  [string] $slug [description]
     * @return [array]       [description]
     */
    public static function getRecordWithId($id)
    {
        return Auction::where('id','=',$id)->first();
    }
}
