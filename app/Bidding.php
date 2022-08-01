<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Bidding extends Model
{
    protected $table = "bidding";

    /**
     * [getRecordWithSlug description]
     * @param  [string] $slug [description]
     * @return [array]       [description]
     */
    public static function getLastBidRecord($auction_id)
    {
        $record =  AuctionBidder::join('bidding','auctionbidders.id','bidding.ab_id')
        					->select(['bidding.bid_amount'])
        					->where('auctionbidders.auction_id',$auction_id)
        					->orderBy('bidding.id','desc')->first();
        return $record;                    

        /*if (count($record))
            $record = $record[0];

        return $record;*/
    }

   
    public static function getAuctionLastBid($auction_id)
    {
        $record =  AuctionBidder::join('bidding','auctionbidders.id','bidding.ab_id')
                            ->join('users','auctionbidders.bidder_id','users.id')
                            ->select(['bidding.bid_amount','users.name'])
                            ->where('auctionbidders.auction_id',$auction_id)
                            ->orderBy('bidding.id','desc')->first();
        return $record;                    

        /*if (count($record))
            $record = $record[0];

        return $record;*/
    }

}
