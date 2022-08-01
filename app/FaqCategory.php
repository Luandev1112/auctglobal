<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class FaqCategory
 *
 * @package App
 * @property string $title
*/
class FaqCategory extends Model
{
    protected $fillable = ['title'];
    
    
    public static function boot()
    {
        parent::boot();

        FaqCategory::observe(new \App\Observers\UserActionsObserver);
    }

     /**
     * [getRecordWithSlug description]
     * @param  [string] $slug [description]
     * @return [array]       [description]
     */
    public static function getRecordWithSlug($slug)
    {
        return FaqCategory::where('slug','=',$slug)->first();
    }
    
    /**
     * [getCategoryQuestions description]
     * @return [type] [description]
     */
    public function getCategoryQuestions() {

        return $this->hasMany(FaqQuestion::class, 'category_id');
    }
}
