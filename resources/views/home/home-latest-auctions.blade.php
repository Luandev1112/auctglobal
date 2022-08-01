<?php $currency_code = getSetting('currency_code','site_settings');

//Latest Auctions
$latest_auctions = \App\Auction::getHomeLatestAuctions();
?>

<!--LATEST AUCTION DEALS SECTION-->
    <section class="au-latest">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 au-deals">
                  <!--p class="text-center">Dummy text of the printing industry</p-->
                  <h2 class="text-center"> {{getPhrase('latest_auction_deals')}} </h2>
                 </div>


                 @if (count($latest_auctions))
                 <div class="screenshot-slider">

                    @foreach ($latest_auctions as $auction)
                    <div class="au-deals-wrapper">
                      <div class="card au-deal-card">
                       <div class="card-icon">

                        <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" title="View Auction Details"> <img src="{{getAuctionImage($auction->image,'auction')}}" alt="{{$auction->title}}" class="img-fluid"> </a>

                        </div>
                        <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" title="Auction Details"> <h4 class="card-title" data-toggle="tooltip" title="{{$auction->title}}" data-placement="bottom">  {!! str_limit($auction->title,40,'..') !!} </h4> </a>

                        <label class="text-center"> {{$currency_code}}{{$auction->reserve_price}} </label>
                     </div>
                    </div>
                    @endforeach

                </div>
                @else
                <div class="col-lg-12">
                <h4> {{getPhrase('no_auctions_available')}} </h4>
            </div>
                @endif


            </div>
        </div>
    </section>
<!--LATEST AUCTION DEALS SECTION-->

