<?php 

$total_auctions       = \App\Auction::getHomeTotalAuctions();
$total_sale_auctions  = \App\Auction::getHomeSaleAuctions();
// $total_live_auctions  = \App\Auction::getLiveAuctions()->count();
$total_live_auctions = \App\Auction::getBidLiveAuctions()->count();//live which are happening today,which gonna happen today
$total_bidders = \App\User::getTotalBidders();
// $total_sellers = \App\User::getTotalSellers();

 ?>
 <!-- NOTIFICATION SECTION-->
    <section class="au-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 au-media">
                   <div class="au-middle">
                      <div class="media au-notify-media mt-3"> 
                        <div class="media-body">
                            <h5 class="au-owl-card">{{$total_auctions}}</h5>
                            <p class="au-owl-sub">{{getPhrase('auctions_available')}}</p>
                        </div>
                    </div>
                  </div>    
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 au-media">
                   <div class="au-middle">
                     <div class="media au-notify-media mt-3"> 
                        <div class="media-body">
                            <h5 class="au-owl-card">{{$total_bidders}}</h5>
                            <p class="au-owl-sub">{{getPhrase('bidders')}}</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 au-media">
                   <div class="au-middle">
                    <div class="media au-notify-media mt-3">
                        <div class="media-body">
                            <h5 class="au-owl-card">{{$total_sale_auctions}}</h5>
                            <p class="au-owl-sub">{{getPhrase('sale_auctions')}}</p>
                        </div>
                    </div>
                  </div>    
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 au-media">
                   <div class="au-middle">
                    <div class="media au-notify-media mt-3"> 
                        <div class="media-body">
                            <h5 class="au-owl-card">{{$total_live_auctions}}</h5>
                            <p class="au-owl-sub">{{getPhrase('live_auctions')}}</p>
                        </div>
                    </div>
                  </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- NOTIFICATION SECTION-->