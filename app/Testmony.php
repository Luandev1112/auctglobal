<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Traits\FilterByUser;

/**
 * Class Testmony
 *
 * @package App
 * @property string $user
 * @property text $testmony
 * @property enum $status
 * @property string $created_by
*/
class Testmony extends Model
{
    // use SoftDeletes;

    protected $fillable = ['testmony', 'status', 'user_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Testmony::observe(new \App\Observers\UserActionsObserver);
    }

    public static $enum_status = ["Active" => "Active", "Inactive" => "Inactive"];

    /**
     * Set to null if empty
     * @param $input
     */
    public function setUserIdAttribute($input)
    {
        $this->attributes['user_id'] = $input ? $input : null;
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
     * [user description]
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
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
    public static function getRecordWithSlug($id)
    {
        return Testmony::where('id','=',$id)->first();
    }

    /**
     * [getTestimonies description]
     * @return [type] [description]
     */
    public static function getTestimonies()
    {
        return Testmony::join('users','testmonies.user_id','users.id')
                        ->select(['testmonies.testmony','users.username','users.image'])
                        ->where('testmonies.status','Active')
                        ->get();
    }
}
