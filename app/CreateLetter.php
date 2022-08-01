<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Traits\FilterByUser;

/**
 * Class CreateLetter
 *
 * @package App
 * @property enum $to
 * @property string $title
 * @property text $message
 * @property string $created_by
*/
class CreateLetter extends Model
{
    // use FilterByUser;

    protected $fillable = ['to', 'title', 'message'];
    
    
    public static function boot()
    {
        parent::boot();

        CreateLetter::observe(new \App\Observers\UserActionsObserver);
    }

    public static $enum_to = ["All" => "All", "Bidders" => "Bidders", "Sellers" => "Sellers", "Subscribers" => "Subscribers"];

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
    
}
