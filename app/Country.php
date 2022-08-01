<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Traits\FilterByUser;

/**
 * Class Country
 *
 * @package App
 * @property string $shortcode
 * @property string $title
 * @property string $created_by
*/
class Country extends Model
{
    // use SoftDeletes;

    protected $fillable = ['shortcode', 'title'];
    
    
    public static function boot()
    {
        parent::boot();

        Country::observe(new \App\Observers\UserActionsObserver);
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
        return Country::where('slug','=',$slug)->first();
    }
    
    /**
     * [getStates description]
     * @return [type] [description]
     */
    public function getStates() 
    {
        return $this->hasMany(State::class, 'country_id');
    }

    /**
     * [getCountryOptions description]
     * @return [type] [description]
     */
    public static function getCountryOptions() 
    {
        return Country::get()->pluck('title','id');
    }
    
}
