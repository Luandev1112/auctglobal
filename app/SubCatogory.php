<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

// use App\Traits\FilterByUser;

/**
 * Class SubCatogory
 *
 * @package App
 * @property string $category
 * @property string $sub_category
 * @property string $created_by
*/
class SubCatogory extends Model
{
    // use SoftDeletes; 
    // FilterByUser;

    protected $fillable = ['sub_category', 'category_id'];
    
    
    public static function boot()
    {
        parent::boot();

        SubCatogory::observe(new \App\Observers\UserActionsObserver);
    }

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
    public function setCreatedByIdAttribute($input)
    {
        $this->attributes['created_by_id'] = $input ? $input : null;
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
     * [created_by description]
     * @return [type] [description]
     */
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    /**
     * [getCategories description]
     * @return [type] [description]
     */
    public static function getCategories()
    {
        return \App\Category::get()->pluck('category','id');
    }
    

     /**
     * [getRecordWithSlug description]
     * @param  [string] $slug [description]
     * @return [array]       [description]
     */
    public static function getRecordWithSlug($slug)
    {
        return SubCatogory::where('slug','=',$slug)->first();
    }

    /**
     * [getMenuSubCategoryAuctions description]
     * @return [type] [description]
     */
    public function getMenuSubCategoryAuctions()
    {
        //which are live now
        return $this->hasMany(Auction::class, 'sub_category_id')
                ->join('users','auctions.user_id','users.id')
                ->where('auctions.admin_status','approved')
                ->where('auctions.auction_status','open')
                ->where('auctions.start_date','<=',NOW())
                ->where('auctions.end_date','>=',NOW())
                ->where('users.role_id',getRoleData('seller'))
                ->where('users.approved',1); 

        //normal - days/normal bid
        //live - currently happening || gonna happen today

        //which are normal + live              
    }

    /**
     * [getAuctionPageSubCategoryAuctions description]
     * @return [type] [description]
     */
    public function getAuctionPageSubCategoryAuctions()
    {
        //which are live now
        return $this->hasMany(Auction::class, 'sub_category_id')
                ->join('users','auctions.user_id','users.id')
                ->where('auctions.admin_status','approved')
                /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                ->where('auctions.start_date','<=',NOW())
                ->where('auctions.end_date','>=',NOW())
                ->where('users.role_id',getRoleData('seller'))
                ->where('users.approved',1)
                ->where(function ($query) {
                $query->where('auctions.auction_status', '=', 'open')
                      ->orWhere('auctions.auction_status', '=', 'new');
                });      
    }
}
