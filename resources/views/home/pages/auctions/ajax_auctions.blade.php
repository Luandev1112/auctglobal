<?php $currency_code = getSetting('currency_code','site_settings');
$today = DATE('Y-m-d');
?>

<div class="row">
@if (count($auctions))  
@foreach ($auctions as $auction)
<div class="col-lg-4 col-md-6 col-sm-6 au-item-categorys">
 <div class="card au-cards">
    @if (Auth::user())
    <a href="javascript:void(0);" onclick="auctionAddtoFavourites({{$auction->id}})" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
    @else
     <a href="javascript:void(0);" onclick="showModal('loginModal')" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
    @endif

    <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" title="View Auction Details"><img class="img-fluid auction-img" src="{{getAuctionImage($auction->image,'auction')}}" alt="{{$auction->title}}"></a>
    <div class="card-block au-card-block">
      <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" title="View Auction Details"><h4 class="card-title au-title"> {!! str_limit($auction->title,40,'') !!} </h4></a>
    

      {{--@if ($auction->auction_status=='open' && $auction->start_date<=$today && $auction->end_date>=$today)--}}
      @if ($auction->auction_status=='open' && $auction->start_date<=NOW() && $auction->end_date>=NOW())
      <?php $total_bids = $auction->getAuctionBiddersCount();?>
    
      <ul class="action-card-details">
          <li><p><small title="Auction End Date">
            <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?>
          </small><span class="pull-right"><small>{{getAuctionDaysLeft($auction->start_date,$auction->end_date)}}</small></span></p></li>
           <li><p><small title="Reserve Price">{{$currency_code}}{{$auction->reserve_price}}</small><span class="pull-right"><small>{{$total_bids}} bids</small></span></p></li>
      </ul>

      @elseif ($auction->auction_status=='new' && $auction->start_date<=NOW() && $auction->end_date>=NOW())
      <p>
        <span style="float:left;"><small title="Auction End Date"> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?> </small></span>
        <span style="float:right;"><small title="Reserve Price">{{$currency_code}}{{$auction->reserve_price}}</small></span>
      </p>
      @elseif ($auction->auction_status=='closed')
      <p>
      <span style="float:left;"><small title="Auction End Date"><?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?></small></span>
      <span style="float:right;"><small>{{getPhrase('auction_ended')}}</small></span>
      </p>
      @endif

    </div>
  </div>
</div>
@endforeach
@else
<div class="col-lg-12 col-md-12 col-sm-12">
  <h4 class="text-center"> {{getPhrase('no_auctions_available')}} </h4>
</div>
@endif

</div>



 <!--Pagination Section-->
 <div class="row ">
 <div class="col-lg-12 col-md-12 col-sm-12 au-page">


   {{$auctions->links()}}


<!-- <div>
    Showing {{($auctions->currentpage()-1)*$auctions->perpage()+1}} to {{$auctions->currentpage()*$auctions->perpage()}}
    of  {{$auctions->total()}} entries
</div>


<div>
  {{($auctions->currentpage()-1) * $auctions->perpage() + $auctions->count()}}
</div> -->


  </div>
</div>
<!--Pagination Section-->


