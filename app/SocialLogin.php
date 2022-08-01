<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\FilterByUser;

/**
 * Class SocialLogin
 *
 * @package App
 * @property string $facebook_client_id
 * @property string $facebook_client_secret
 * @property string $facebook_redirect_url
 * @property string $facebook_login_enable
 * @property string $google_client_id
 * @property string $google_client_secret
 * @property string $google_redirect_url
 * @property string $google_login_enable
 * @property string $created_by
*/
class SocialLogin extends Model
{
    use SoftDeletes, FilterByUser;

    protected $fillable = ['facebook_client_id', 'facebook_client_secret', 'facebook_redirect_url', 'facebook_login_enable', 'google_client_id', 'google_client_secret', 'google_redirect_url', 'google_login_enable', 'created_by_id'];
    
    
    public static function boot()
    {
        parent::boot();

        SocialLogin::observe(new \App\Observers\UserActionsObserver);
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
    
}
