@extends('layouts.home')




@section('content')
<!--Upcoming Auction-->
    <section class="au-upcoming-auction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 au-deals">

                    <h2 class="text-center"> {{getPhrase('live_auctions')}} </h2> </div>
            </div>


            @if (count($live_auctions))

            @foreach ($live_auctions as $auction)
            <?php 
            $live_auction_start_time = strtotime($auction->live_auction_start_time);
            $live_auction_end_time   = strtotime($auction->live_auction_end_time);

            if ($live_auction_start_time <= time() && $live_auction_end_time >= time()) {
            ?>
            <!--if current_time>=start_time && current_time<=end_time - currently happening-->

            <!--if current_time>=start_time && current_time<=end_time - will happen today-->

           

            <div class="row au-line-bottom bar-line">
                <div class="col-lg-9 col-md-9 col-sm-12 au-no-margin">
                    <div class="media au-auction-media"> <img src="{{getAuctionImage($auction->image)}}" alt="{{$auction->title}}">
                        <div class="media-body au-upcoming-body">
                             <h4 class="au-card-title pt-3"> {!! str_limit($auction->title,80,'..') !!} </h4>
                            <label>{{getPhrase('by')}} {{$auction->username}}</label>
                            <p class="au-card-text"> 

                                <i class="fa fa-clock-o"></i>{{$auction->live_auction_start_time}} - {{$auction->live_auction_end_time}} | {{$auction->city}}, {{$auction->state}}</p>
                                
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

            <?php } else if ($live_auction_start_time > time() && $live_auction_end_time > time()) {?>

            <div class="row au-line-bottom bar-line">
                <div class="col-lg-9 col-md-9 col-sm-12 au-no-margin">
                    <div class="media au-auction-media"> <img src="{{getAuctionImage($auction->image)}}" alt="{{$auction->title}}">
                        <div class="media-body au-upcoming-body">
                            <h4 class="au-card-title pt-3">{!! str_limit($auction->title,80,'..') !!}</h4>
                            <label>{{getPhrase('by')}} {{$auction->username}}</label>
                            <p class="au-card-text"><i class="fa fa-clock-o"></i>{{$auction->live_auction_start_time}} - {{$auction->live_auction_end_time}} | {{$auction->city}}, {{$auction->state}}</p>
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
            <?php } ?>

            @endforeach

            @else
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="text-center">
                    <h4> {{getPhrase('no_live_auctions_available')}} </h4>
                    </div>
                </div>
            </div>
            @endif



        </div>
    </section>
    <!--Upcoming Auction-->

@endsection

