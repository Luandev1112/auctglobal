<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqQuestion
 *
 * @package App
 * @property string $category
 * @property text $question_text
 * @property text $answer_text
*/
class FaqQuestion extends Model
{
    protected $fillable = ['question_text', 'answer_text', 'category_id'];
    
    
    public static function boot()
    {
        parent::boot();

        FaqQuestion::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCategoryIdAttribute($input)
    {
        $this->attributes['category_id'] = $input ? $input : null;
    }
    
    public function category()
    {
        return $this->belongsTo(FaqCategory::class, 'category_id');
    }

    /**
     * [getFaqCategories description]
     * @return [type] [description]
     */
    public static function getFaqCategories()
    {
        return \App\FaqCategory::get()->pluck('title','id');
    }
    


    /**
     * [getRecordWithSlug description]
     * @param  [string] $slug [description]
     * @return [array]       [description]
     */
    public static function getRecordWithSlug($slug)
    {
        return FaqQuestion::where('slug','=',$slug)->first();
    }
}
