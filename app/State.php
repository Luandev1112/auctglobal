<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Traits\FilterByUser;

/**
 * Class State
 *
 * @package App
 * @property string $state
 * @property string $country
 * @property string $created_by
*/
class State extends Model
{
    // use SoftDeletes;

    protected $fillable = ['state', 'country_address', 'country_latitude', 'country_longitude'];
    
    
    public static function boot()
    {
        parent::boot();

        State::observe(new \App\Observers\UserActionsObserver);
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
     * [getCountries description]
     * @return [type] [description]
     */
    public static function getCountries()
    {
        return \App\Country::get()->pluck('title','id');
    }
    


    /**
     * [getRecordWithSlug description]
     * @param  [string] $slug [description]
     * @return [array]       [description]
     */
    public static function getRecordWithSlug($slug)
    {
        return State::where('slug','=',$slug)->first();
    }


    /**
     * [getCities description]
     * @return [type] [description]
     */
    public function getCities() {

        return $this->hasMany(City::class, 'state_id');
    }
}
