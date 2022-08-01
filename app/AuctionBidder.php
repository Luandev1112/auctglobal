<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use DB;

class AuctionBidder extends Model
{
    protected $table = "auctionbidders";

    /**
     * [getRecord description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function getRecord($id)
    {
      	return AuctionBidder::where('id',$id)->first();
    }

    /**
     * [getHighestBid description]
     * @return [type] [description]
     */
    public function getHighestBid()
    {
      	return $this->hasOne(Bidding::class,'ab_id')
		            ->select('bid_amount')
		            ->orderBy('id','desc')
		            ->first();
    }

    /**
     * [getBidHistory description]
     * @return [type] [description]
     */
    public function getBidHistory()
    {
      	return $this->hasMany(Bidding::class,'ab_id')
		            ->select(['bid_amount','created_at'])
		            ->orderBy('id','desc')
		            ->get();
    }
}
