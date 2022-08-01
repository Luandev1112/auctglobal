<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    //
    
	/**
	 * [getSubscriberOptions description]
	 * @return [type] [description]
	 */
    public static function getSubscriberOptions()
    {
        return Subscriber::get()->pluck('email','id');
    }
}
