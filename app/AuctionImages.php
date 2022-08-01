<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuctionImages extends Model
{
    protected $table="auctionimages";


    public function getDownloadPath()
    {
    	return UPLOADS.'auctions/'.$this->filename;
    }   
}
