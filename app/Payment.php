<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Hash;
use Auth;
use DB;
use \App;

class Payment extends Model
{
	use EntrustUserTrait;
	
    protected $table = 'payments';

    /**
     * [getRecordWithSlug description]
     * @param  [type] $slug [description]
     * @return [type]       [description]
     */
    public static function getRecordWithSlug($slug)
    {
        return Payment::where('slug', '=', $slug)->first();
    }

    /**
     * [getAllPayments description]
     * @return [type] [description]
     */
    public static function getAllPayments()
    {
        return Payment::join('users','payments.user_id','users.id')
                        ->select(['payments.*','users.username','users.slug as user_slug'])
                        ->get();
    }

    /**
     * [getBillingCountry description]
     * @return [type] [description]
     */
    public function getBillingCountry()
    {
        return $this->belongsTo(Country::class, 'billing_country')->select('countries.title')->first();
    }

    /**
     * [getBillingState description]
     * @return [type] [description]
     */
    public function getBillingState()
    {
        return $this->belongsTo(State::class, 'billing_state')->select('states.state')->first();
    }

    /**
     * [getBillingCity description]
     * @return [type] [description]
     */
    public function getBillingCity()
    {
        return $this->belongsTo(City::class, 'billing_city')->select('cities.city')->first();
    }

    /**
     * [getShippingCountry description]
     * @return [type] [description]
     */
    public function getShippingCountry()
    {
        return $this->belongsTo(Country::class, 'shipping_country')->select('countries.title')->first();
    }

    /**
     * [getShippingState description]
     * @return [type] [description]
     */
    public function getShippingState()
    {
        return $this->belongsTo(State::class, 'shipping_state')->select('states.state')->first();
    }

    /**
     * [getShippingCity description]
     * @return [type] [description]
     */
    public function getShippingCity()
    {
        return $this->belongsTo(City::class, 'shipping_city')->select('cities.city')->first();
    }
}
