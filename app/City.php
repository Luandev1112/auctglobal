<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use DB;


/**
 * Class City
 *
 * @package App
 * @property string $city
 * @property string $country
 * @property string $state
 * @property string $created_by
*/
class City extends Model
{
    // use SoftDeletes;

    protected $fillable = ['id','city'];
    
    
    public static function boot()
    {
        parent::boot();

        City::observe(new \App\Observers\UserActionsObserver);
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
     * [created_by description]
     * @return [type] [description]
     */
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
        return City::where('slug','=',$slug)->first();
    }


    /**
     * [getStates description]
     * @return [type] [description]
     */
    public static function getStates()
    {
        return \App\State::get()->pluck('state','id');
    }
    
    /**
     * [getAuctionPageCities description]
     * @return [type] [description]
     */
    public static function getAuctionPageCities()
    {
       
        return City::join('users','cities.id','users.city_id')
                    ->select(['cities.id','cities.slug','cities.city'])
                    ->where('users.role_id',getRoleData('seller'))
                    ->where('users.approved',1)
                    ->distinct('cities.id')  
                    ->get();                    

    }

    /**
     * [getCityAuctions description]
     * @return [type] [description]
     */
    public function getCityAuctions() 
    {
        return $this->hasMany(User::class,'city_id')
                    ->join('auctions','users.id','auctions.user_id')
                    ->select('auctions.id','auctions.title')
                    ->where('users.role_id',getRoleData('seller'))
                    ->where('users.approved',1)
                    ->where('auctions.auction_status','open')
                    ->where('auctions.admin_status','approved')
                    /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                    ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                    ->where('auctions.start_date','<=',NOW())
                    ->where('auctions.end_date','>=',NOW())
                    ->distinct('users.city_id')
                    ->get();
    }
   

  
}
