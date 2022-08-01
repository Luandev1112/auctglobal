<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContentPage
 *
 * @package App
 * @property string $title
 * @property text $page_text
 * @property text $excerpt
 * @property string $featured_image
*/
class ContentPage extends Model
{
    protected $fillable = ['title', 'page_text', 'excerpt', 'featured_image'];
    
    
    public static function boot()
    {
        parent::boot();

        ContentPage::observe(new \App\Observers\UserActionsObserver);
    }
    
    public function category_id()
    {
        return $this->belongsToMany(ContentCategory::class, 'content_category_content_page');
    }
    
    public function tag_id()
    {
        return $this->belongsToMany(ContentTag::class, 'content_page_content_tag');
    }
    

     /**
     * [getRecordWithSlug description]
     * @param  [string] $slug [description]
     * @return [array]       [description]
     */
    public static function getRecordWithSlug($slug)
    {
        return ContentPage::where('slug','=',$slug)->first();
    }
}
