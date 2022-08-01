<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Traits\FilterByUser;

/**
 * Class Category
 *
 * @package App
 * @property string $category
 * @property string $created_by
*/
class Category extends Model
{
    // use SoftDeletes;

    protected $fillable = ['category'];
    
    
    public static function boot()
    {
        parent::boot();

        Category::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCreatedByIdAttribute($input)
    {
        $this->attributes['created_by_id'] = $input ? $input : null;
    }
    
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
        return Category::where('slug','=',$slug)->first();
    }


    /**
     * [getCategoryQuestions description]
     * @return [type] [description]
     */
    public function getSubCategories() {

        return $this->hasMany(SubCatogory::class, 'category_id');
    }


    /**
     * [getCategories description]
     * @param  [type] $limit [description]
     * @return [type]        [description]
     */
    public static function getCategories($limit) 
    {

        return Category::select(['id','category','slug'])
                ->orderBy('id','asc')
                ->where('status','Active')
                ->limit($limit)
                ->get();
    }


    /**
     * [getAuctionPageCategories description]
     * @return [type] [description]
     */
    public static function getAuctionPageCategories() 
    {

        return Category::select(['id','category','slug'])
                ->orderBy('id','asc')
                ->where('status','Active')
                ->get();
    }

    /**
     * [getAuctionPageSubcatgories description]
     * @return [type] [description]
     */
    public function getAuctionPageSubcatgories() 
    {

        return $this->hasMany(SubCatogory::class, 'category_id')->where('status','Active');
    }

    /**
     * [getSubCategories]
     * @return [type] [description]
     */
    public function get_sub_catgories() 
    {
        return $this->hasMany(SubCatogory::class, 'category_id')->where('status','Active')->limit(8);
    }

    /**
     * [getHomeCategories description]
     * @param  [type] $limit [description]
     * @return [type]        [description]
     */
    public static function getHomeCategories($limit) 
    {
        return Category::join('sub_catogories','categories.id','sub_catogories.category_id')
                        ->select(['categories.id','categories.category','categories.slug'])
                        ->orderBy('categories.id','asc')
                        ->where('categories.status','Active')
                        ->limit($limit)
                        ->distinct('categories.id')
                        ->get();
    }
}
