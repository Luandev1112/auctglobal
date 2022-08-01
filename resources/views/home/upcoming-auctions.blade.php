<?php
//Upcoming Auctions
$upcoming_auctions = \App\Auction::getHomeUpcomingAuctions();


?>
<!--Upcoming Auction-->
    <section class="au-upcoming-auction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 au-deals">

                    <h2 class="text-center"> {{getPhrase('upcoming_auctions')}} </h2> </div>
            </div>


            @if (count($upcoming_auctions))

            @foreach ($upcoming_auctions as $auction)

            @if ($auction->auction_status==='open')

            <div class="row au-line-bottom bar-line">
                <div class="col-lg-9 col-md-9 col-sm-12 au-no-margin">
                    <div class="media au-auction-media"> <img src="{{getAuctionImage($auction->image)}}" alt="{{$auction->title}}">
                        <div class="media-body au-upcoming-body">
                             <h4 class="au-card-title pt-3"> {!! str_limit($auction->title,80,'..') !!} </h4>
                            <label>{{getPhrase('by')}} {{$auction->username}}</label>
                            <p class="au-card-text"> {{ date('jS M, Y h:i A',strtotime($auction->created_at)) }} | {{$auction->city}}, {{$auction->state}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="au-bidding live">
                        <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" title="Auction Details" class="btn btn-default au-space au-btn-modren login-bttn"> {{getPhrase('happening_now')}}</a>
                        <label>{{getPhrase('live_auction')}}</label>
                    </div>
                </div>
            </div>

            @elseif ($auction->auction_status==='new')

            <div class="row au-line-bottom bar-line">
                <div class="col-lg-9 col-md-9 col-sm-12 au-no-margin">
                    <div class="media au-auction-media"> <img src="{{getAuctionImage($auction->image)}}" alt="{{$auction->title}}">
                        <div class="media-body au-upcoming-body">
                            <h4 class="au-card-title pt-3">{!! str_limit($auction->title,80,'..') !!}</h4>
                            <label>{{getPhrase('by')}} {{$auction->username}}</label>
                            <p class="au-card-text">{{ date('jS M, Y h:i A',strtotime($auction->created_at)) }} | {{$auction->city}}, {{$auction->state}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
<div class="au-bidding">

                    <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" title="Auction Details" class="btn btn-default au-space au-btn-gray login-bttn">{{getPhrase('view_details')}}</a>
                    <label>{{getPhrase('upcoming_auction')}}</label>
                    </div>
                </div>
            </div>
            @endif

            @endforeach

            <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-sm-12 au-all-upcoming">
                   <div class="text-center">
                    <a href="{{URL_HOME_AUCTIONS}}" class="btn btn-primary au-space au-btn-gray login-bttn">{{getPhrase('view_all_upcoming_auctions')}}</a>
                       </div>
                </div>
            </div>

            @else
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="text-center">
                    <h4> {{getPhrase('no_auctions_available')}} </h4>
                    </div>
                </div>
            </div>
            @endif



        </div>
    </section>
    <!--Upcoming Auction-->

