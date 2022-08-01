@extends($layout)

@section('header_scripts')
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
@endsection

@section('content')
<?php
$today = DATE('Y-m-d');
$currency_code = getSetting('currency_code','site_settings');
$auctin_url = URL_HOME_AUCTIONS;

$enter_amount = 'Enter amount ';
if (isset($last_bid) && !empty($last_bid->bid_amount))
  $enter_amount .= '> '.$last_bid->bid_amount;
elseif ($auction->minimum_bid>0)
  $enter_amount .= '> '.$auction->minimum_bid;


$total_bids = $auction->getAuctionBiddersCount();

$active_picture_gallary = getSetting('active_picture_gallary','auction_settings');

$max_number_of_pictures = getSetting('max_number_of_pictures','auction_settings');

?>



 <!--CATEGORY BODY SECTION-->

     <section class="single-product section-pad">
      <div class="container">

          <div class="row">


            <div class="col-lg-6">
               <!-- Product-gallery-container -->

                    <!-- <div class="sm-product-show">
                        <div class="sm-product-slider-img">
                            <img src="http://via.placeholder.com/550x350" id="sm-product-zoom" class="img-responsive" data-zoom-image="http://via.placeholder.com/950x650" alt="">
                            <i class="sm-zoom-icn fa fa-expand"></i>
                        </div>
                        <ul class="product-slider-thumbs" id="gallery_01">

                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-image="http://via.placeholder.com/650x551">
                                    <img id="img_01" src="http://via.placeholder.com/120x71" alt="">
                                </a>
                            </li>

                            <li>
                                <a href="#" class="elevatezoom-gallery" data-image="http://via.placeholder.com/650x552">
                                    <img id="img_02" src="http://via.placeholder.com/120x72" alt="">
                                </a>
                            </li>

                            <li>
                                <a href="#" class="elevatezoom-gallery" data-image="http://via.placeholder.com/650x553">
                                    <img id="img_03" src="http://via.placeholder.com/120x73" alt="">
                                </a>
                            </li>

                            <li>
                                <a href="#" class="elevatezoom-gallery" data-image="http://via.placeholder.com/650x554">
                                    <img id="img_04" src="http://via.placeholder.com/120x74" alt="">
                                </a>
                            </li>

                        </ul>
                    </div> -->



                    <div class="sm-product-show">
                      
                        <div class="sm-product-slider-img">
                            <img src="{{getAuctionImage($auction->image)}}" id="sm-product-zoom" class="img-responsive" data-zoom-image="{{getAuctionImage($auction->image,'auction')}}" alt="">
                            <i class="sm-zoom-icn fa fa-expand"></i>
                        </div>


                        @if ($active_picture_gallary=='Yes')
                        <ul class="product-slider-thumbs" id="gallery_01">

                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-image="{{getAuctionImage($auction->image,'auction')}}">
                                    <img id="img_01" src="{{getAuctionImage($auction->image)}}" alt="">
                                </a>
                            </li>

                          @if ($auction_images)
                          <?php $i=0;?>
                          @foreach ($auction_images as $image)
                          <?php $i=$i+1;
                          
                          if ($i==$max_number_of_pictures)
                            break;
                          ?>
                          @if ($image->filename && file_exists(AUCTION_IMAGES_PATH.$image->filename))
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-image="{{AUCTION_IMAGES_PATH_URL}}{{$image->filename}}">
                                    <img id="img_01" src="{{AUCTION_IMAGES_PATH_URL}}{{$image->filename}}" alt="">
                                </a>
                            </li>
                            @endif
                          

                          @endforeach


                            <!-- <li>
                                <a href="#" class="elevatezoom-gallery" data-image="http://via.placeholder.com/650x552">
                                    <img id="img_02" src="http://via.placeholder.com/120x72" alt="">
                                </a>
                            </li>

                            <li>
                                <a href="#" class="elevatezoom-gallery" data-image="http://via.placeholder.com/650x553">
                                    <img id="img_03" src="http://via.placeholder.com/120x73" alt="">
                                </a>
                            </li>

                            <li>
                                <a href="#" class="elevatezoom-gallery" data-image="http://via.placeholder.com/650x554">
                                    <img id="img_04" src="http://via.placeholder.com/120x74" alt="">
                                </a>
                            </li> -->
                            @endif
                        </ul>

                        @endif


                    </div>




                    <!-- /Product-gallery-container-->
               <!-- <img id="zoom_01" src="{{getAuctionImage($auction->image,'auction')}}" data-zoom-image="{{IMAGES_HOME}}large/image1.jpg" class="img-fluid"> -->
            </div>


            <div class="col-lg-6">

                <h4>{{$auction->title}}</h4>

                @if (!$live_auction) <!--normal auction happening-->
                  <p title="Auction End Date"> Regular auction ends on <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?> </p>
                @endif

              

                @if ($live_auction_starts)
                  <p title="Auction End Date"> Live auction starts at <i class="fa fa-clock-o"></i>{{$auction->live_auction_start_time}}, Be ready to participate</p>
                @endif



              @if ($live_auction) <!--live auction happening-->

              <div>
                  <p title="Auction End Date"> Live auction happening now! from <i class="fa fa-clock-o"></i>{{$auction->live_auction_start_time}} to <i class="fa fa-clock-o"></i>{{$auction->live_auction_end_time}}</p>
              </div>

              <div class="">
                @if (!Auth::check())  
                  <a class="btn btn-info au-btn-modren login-bttn" href="javascript:void(0);" onclick="showModal('loginModal')">{{getPhrase('participate_in_live_auction')}}</a>
                @else
                  <a class="btn btn-info au-btn-modren login-bttn" href="javascript:void(0);" onclick="liveAuction('{{$auction->slug}}')">{{getPhrase('participate_in_live_auction')}}</a>
                @endif
              </div> 
              @endif




              @if (!$live_auction)<!--if live auction not happening normal auction-->

                @if ($auction->auction_status=='open' && $auction->start_date<=now() && $auction->end_date>=now())
                <!--if auction status is live start-->
                 <!--product with border content-->
                 @if ($bid_div)
                <div class="product-border">
                    <p class="text-blue"><b><i class="pe-7s-timer"> </i>
                        {{strtoUpper(getAuctionDaysLeft($auction->start_date,$auction->end_date))}}</b></p>

                    <h4>
                      {{$currency_code}}{{$auction->reserve_price}}  
                      <span class="badge"> 
                        @if ($total_bids>1) 
                            {{$total_bids}} {{getPhrase('bids')}}
                        @elseif ($total_bids==1) 
                            {{$total_bids}} {{getPhrase('bid')}}
                        @else 
                            0 {{getPhrase('bids')}} 
                        @endif
                      </span>
                      
                    </h4>

                  @if ($bid_options)

                  <p>{{getPhrase('select_maximum_bid')}}</p>
                  <div class="row">
                  <div class="col-lg-6">

                    {!! Form::open(array('url' => URL_SAVE_BID, 'method' => 'POST','name'=>'formBid', 'files'=>'true', 'novalidate'=>'')) !!}


                    <div class="form-group">

                          {{Form::select('bid_amount', $bid_options, null, ['placeholder'=>'select',

                            'class'=>'form-control',

                            'ng-model'=>'bid_amount',

                            'required'=> 'true',

                            'ng-class'=>'{"has-error": formBid.bid_amount.$touched && formBid.bid_amount.$invalid}'

                         ])}}


                        <div class="validation-error" ng-messages="formBid.bid_amount.$error" >


                        </div>

                    </div>
                    </div>


                    <div class="col-lg-6">
                     <div class="form-group">

                        <input type="hidden" name="bid_auction_id" value="{{$auction->id}}">

                        <button class="btn btn-primary login-bttn au-btn-modren" ng-disabled='!formBid.$valid'>{{getPhrase('place_bid')}}</button>

                     </div>


                      {!! Form::close() !!}

                    </div>

                    </div>
                    @else
                <div class="row">
                    <div class="col-lg-6">



                    {!! Form::open(array('url' => URL_SAVE_BID, 'method' => 'POST','name'=>'formBid', 'files'=>'true', 'novalidate'=>'')) !!}


                    <div class="form-group">

                         {{ Form::number('bid_amount', null, $attributes =

                                array('class' => 'form-control',

                                'placeholder' => $enter_amount,

                                'ng-model' => 'bid_amount',

                                'required' => 'true',

                                'ng-class'=>'{"has-error": formBid.bid_amount.$touched && formBid.bid_amount.$invalid}',

                                )) }}


                        <div class="validation-error" ng-messages="formBid.bid_amount.$error" >


                        </div>

                    </div>
                  </div>

                    <div class="col-lg-6">
                     <div class="form-group">

                        <input type="hidden" name="bid_auction_id" value="{{$auction->id}}">

                        <button class="btn btn-primary login-bttn au-btn-modren" ng-disabled='!formBid.$valid'>{{getPhrase('place_bid')}}</button>

                     </div>

                     {!! Form::close() !!}



                    </div>
                    </div>
                    @endif



                </div>
                @endif

                <!--/product with border content-->
                <!--if auction status is live end-->
                @elseif ($auction->auction_status=='new' && $auction->start_date<=now() && $auction->end_date>=now())
                <!--if auction status is upcoming start-->
                <div>
                    <p class="text-blue"><b><i class="pe-7s-timer"></i> {{strtoUpper(getAuctionDaysLeft($auction->start_date,$auction->end_date))}}</b></p>

                     <h4>
                      {{$currency_code}}{{$auction->reserve_price}}  
                      <span class="badge"> 
                       {{$auction->getAuctionBiddersCount()}} {{getPhrase('bids')}}
                      </span>
                    </h4>
                </div>
                <!--if auction status is upcoming end-->
                @elseif ($auction->auction_status=='closed')
                <!--if auction status is closed start-->
                 <div>
                     <p class="text-blue"><b> {{getPhrase('auction_ended')}} </b></p>

                    <h4>{{$currency_code}}{{$auction->reserve_price}}  
                      <span class="badge">
                        {{$auction->getAuctionBiddersCount()}} {{getPhrase('bids')}}
                      </span> 
                    </h4>

                </div>
                <!--if auction status is closed end-->
                @endif


                @endif <!--if live auction not happening-->


                <br>


                <div>

                  @if (Auth::user())
                    <a href="javascript:void(0);" ng-click="addtoFavourites({{$auction->id}})" title="Add to Wishlist" class="btn btn-info au-btn-modren login-bttn"><i class="pe-7s-plus"></i> 
                    {{getPhrase('add_to_wish_list')}}</a>
                  @else
                   <a href="javascript:void(0);" onclick="showModal('loginModal')" title="Add to Wishlist" class="btn btn-info au-btn-modren login-bttn"><i class="pe-7s-plus"></i> {{getPhrase('add_to_wish_list')}} </a>
                  @endif


                  @if ($auction->is_buynow==1 && $auction->buy_now_price && $is_already_sold=='No')
                  @if ($bid_div)
                  @if (Auth::user())
                    <a href="{{URL_BID_AUCTION_PAYMENT}}/{{$auction->slug}}" title="Buy Auction" class="btn btn-info au-btn-modren login-bttn"> {{getPhrase('buy_now')}}</a>
                  @else
                   <a href="javascript:void(0);" onclick="showModal('loginModal')" title="Buy Auction" class="btn btn-info au-btn-modren login-bttn"> {{getPhrase('buy_now')}} </a>
                  @endif
                  @endif
                  @endif


                 {{--
                 {!! Share::page('http://phpstack-127012-364033.cloudwaysapps.com/', getSetting('site_title','site_settings'))
  ->facebook()
  ->twitter()
  ->googlePlus()
  ->linkedin('Extra linkedin summary can be passed here'); !!} --}}



                 <ul class="list-inline au-social-links">

                   <li class="list-inline-item">
                     <a href="https://www.facebook.com/sharer/sharer.php?u={{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"> <i class="fa fa-facebook-f au-common"></i></a>
                   </li>

                   <li class="list-inline-item">
                     <a href="https://twitter.com/intent/tweet?text={{getSetting('site_title','site_settings')}}&amp;url={{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"><i class="fa fa-twitter au-common"></i></a>
                   </li>

                    <li class="list-inline-item">
                     <a href="https://plus.google.com/share?url={{PREFIX}}"><i class="fa fa-google au-common"></i></a>
                   </li>

                   <li class="list-inline-item">
                     <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{PREFIX}}&amp;title={{getSetting('site_title','site_settings')}}&amp;summary={{$auction->title}}"><i class="fa fa-linkedin au-common"></i></a>
                   </li>
                 </ul>
                </div>



            </div>

          </div>






    <!--AUCTION DETAILS SECTION-->
    <section class="au-premium-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 au-deals">
               <!--     <p class="text-center">Dummy text of the printing industry</p> -->
                   <!-- <h2 class="text-center"> Auction Information </h2> </div> -->

                  <div class="col-lg-12 col-md-12 col-sm-12 au-premium product-tabs">

                    <nav class="au-tabs">
                      <div class="nav au-product-tabs nav-tabs" id="nav-tab" role="tablist">

                        <a class="nav-item au-product-nav nav-link active" id="nav-auction-tab" data-toggle="tab" href="#nav-auction" role="tab" aria-controls="nav-auction" aria-selected="true"> {{getPhrase('auction_details')}} </a>

                        <a class="nav-item au-product-nav nav-link" id="nav-shipping-tab" data-toggle="tab" href="#nav-shipping" role="tab" aria-controls="nav-shipping" aria-selected="false"> {{getPhrase('shipping')}} & {{getPhrase('payment')}}</a>

                        <a class="nav-item au-product-nav nav-link" id="nav-terms-tab" data-toggle="tab" href="#nav-terms" role="tab" aria-controls="nav-terms" aria-selected="false"> {{getPhrase('auction_terms')}} & {{getPhrase('info')}} </a>

                        <a class="nav-item au-product-nav nav-link" id="nav-bid-tab" data-toggle="tab" href="#nav-bid" role="tab" aria-controls="nav-bid" aria-selected="false"> {{getPhrase('bid_history')}} </a>

                      </div>
                    </nav>


                    <!--tabs start-->
                    <div class="tab-content au-product-content" id="nav-tabContent">


                        <!--auction details tab start-->
                        <div class="tab-pane au-tab-pane fade show active" id="nav-auction" role="tabpanel" aria-labelledby="nav-auction-tab">

                            <div class="row">

                              <div class="col-lg-12">
                                  <!-- <h5><b>Description</b></h5> -->

                                  <p>{!! $auction->description !!}</p>

                              </div>


                              <div class="col-lg-6 col-md-6 col-sm-12 au-terms">

                                <ul class="list-group">

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('start_date')}}
                                      <span> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->start_date));?></span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('end_date')}}
                                      <span> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?> </span>
                                    </li>


                                     <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('reserve_price')}}
                                      <span>@if($auction->reserve_price) {{$currency_code}}{{$auction->reserve_price}} @endif</span>
                                     </li>



                                     <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('bid_start')}}
                                      <span>@if ($auction->minimum_bid) {{$currency_code}}{{$auction->minimum_bid}} @endif</span>
                                     </li>


                                      <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('is_bid_incremental')}}
                                        <span> 
                                        @if ($auction->is_bid_increment==1) 
                                            {{getPhrase('yes')}} 
                                        @else 
                                            {{getPhrase('no')}}
                                        @endif
                                        </span>
                                     </li>


                                     <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('bid_increment')}}
                                      <span>@if ($auction->bid_increment) {{$currency_code}}{{$auction->bid_increment}} @endif</span>
                                    </li>


                                     <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('is_it_buynow_item')}}
                                        <span> 
                                        @if ($auction->is_buynow==1) 
                                            {{getPhrase('yes')}} 
                                        @else 
                                            {{getPhrase('no')}}
                                        @endif
                                        </span>
                                     </li>


                                     @if ($auction->is_buynow==1)
                                      <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{getPhrase('buy_now_price')}}
                                        <span>@if ($auction->buy_now_price) {{$currency_code}}{{$auction->buy_now_price}} @endif</span>
                                      </li>

                                     @endif
                                   
                                  </ul>
                              </div>


                              @if (isset($seller) && !empty($seller))

                               <div class="col-lg-6 col-md-6 col-sm-12 au-terms">

                                <ul class="list-group">

                                    <li class="list-group-item"><strong>{{getPhrase('seller_information')}}</strong></li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('seller_name')}}
                                      <span>{{$seller->username}}</span>
                                    </li>


                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('email')}}
                                      <span>{{$seller->email}}</span>
                                    </li>


                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('phone')}}
                                      <span>{{$seller->phone}}</span>
                                    </li>


                                    <!--live auction date&time-->
                                    @if ($auction->live_auction_date)
                                    <li class="list-group-item"><strong>{{getPhrase('live_auction')}}</strong></li>

                                      <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{getPhrase('date')}}
                                        @if ($auction->live_auction_date)
                                        <span>
                                          <?php echo date(getSetting('date_format','site_settings'),  strtotime($auction->live_auction_date));?>
                                        </span>
                                        @endif
                                      </li>


                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('start_time')}}
                                      @if ($auction->live_auction_start_time)
                                      <span>{{$auction->live_auction_start_time}}</span>
                                      @endif
                                    </li>


                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      {{getPhrase('end_time')}}
                                      @if ($auction->live_auction_end_time)
                                      <span>{{$auction->live_auction_end_time}}</span>
                                      @endif
                                    </li>
                                    @endif
                                    <!--live auction date&time-->


                                </ul>
                               </div>

                              @endif















                               <!--  <div class="col-lg-7 col-md-7 col-sm-12 au-terms">

                                   <table class="table table-responsive-xl table-bordered">

                                     <tbody>
                                      <tr>
                                       <td>Start Date</td>
                                       <td> {{$auction->start_date}}</td>
                                      </tr>

                                      <tr>
                                       <td>End Date</td>
                                       <td> {{$auction->end_date}}</td>
                                      </tr>

                                      <tr>
                                       <td>Reserve Price </td>
                                       <td> @if($auction->reserve_price) {{$currency_code}}{{$auction->reserve_price}} @endif</td>
                                      </tr>


                                      <tr>
                                       <td>Bid Start </td>
                                       <td> @if ($auction->minimum_bid) {{$currency_code}}{{$auction->minimum_bid}} @endif</td>
                                      </tr>


                                       <tr>
                                       <td>Bid Increment </td>
                                       <td> @if ($auction->bid_increment) {{$currency_code}}{{$auction->bid_increment}} @endif</td>
                                      </tr>

                                       <tr>
                                       <td>Buy Now Price </td>
                                       <td> @if ($auction->buy_now_price) {{$currency_code}}{{$auction->buy_now_price}} @endif</td>
                                      </tr>


                                    </tbody>
                                  </table>

                                    </div> -->


                                  <!-- <div class="col-lg-5 col-md-5 col-sm-12 au-terms">
                                  @if (isset($seller) && !empty($seller))
                                  <table class="table table-responsive-xl table-bordered">
                                    <tbody>
                                      <thead>
                                        <tr>
                                          <th>Seller Information</th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tr>
                                       <td>Seller Name</td>
                                       <td>{{$seller->username}}</td>
                                      </tr>

                                      <tr>
                                       <td>Email</td>
                                       <td>{{$seller->email}}</td>
                                      </tr>

                                      <tr>
                                       <td>Phone</td>
                                       <td>{{$seller->phone}}</td>
                                      </tr>

                                    </tbody>
                                  </table>
                                  @endif
                                </div> -->



                            </div>

                          </div>
                          <!--auction details tab end-->

                       


                        <!--shipping and payment tab start-->
                        <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab">

                          <div class="row">

                              <div class="col-lg-12 col-md-12 col-sm-12 au-terms">
                              <div class="col-lg-12 col-md-12 col-sm-12 au-policy">

                                <p>{!! $auction->shipping_conditions !!}</p>
                             </div>
                           </div>

                          </div>
                        </div>
                        <!--Shipping and payment tab end-->









                        <!--Auctiont terms and info tab start-->
                        <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">

                          <div class="row">


                            <div class="col-lg-12 col-md-12 col-sm-12 au-terms">

                                <div class="col-lg-12 col-md-12 col-sm-12 au-policy">
                                  <p>{!! $auction->shipping_terms !!}</p>
                                </div>

                              </div>

                           </div>
                        </div>
                        <!--auction terms and info tab end-->





                        <!--Bidding history Tab Start-->
                        <div class="tab-pane fade" id="nav-bid" role="tabpanel" aria-labelledby="nav-bid-tab">

                          <div class="row">


                            <div class="col-lg-12 col-md-12 col-sm-12 au-terms">
                                <div class=" au-policy">

                                  @if (isset($bidding_history) && count($bidding_history))
                                  <ul class="list-group z-depth-0">

                                      <li class="list-group-item justify-content-between">
                                          <span><b>{{getPhrase('username')}}</b></span>
                                          <span style="float:right;"><b>{{getPhrase('bid_amount')}}</b></span>
                                      </li>
                                      @foreach ($bidding_history as $bid)
                                      <li class="list-group-item justify-content-between">
                                        <span>{{$bid->username}}</span>
                                        <span style="float:right;">{{$currency_code}}{{$bid->bid_amount}}</span>
                                      </li>
                                      @endforeach
                                  </ul>
                                  @endif


                                </div>
                              </div>

                           </div>
                        </div>
                        <!--Bidding Tab Section end-->


                    </div>
                    <!--tabs end-->

                </div>
            </div>
        </div>
      </div>
    </section>
    <!--AUCTION DETAILS SECTION END-->











    <!--SAME CATEGORY AUCTIONS SECTION-->
    @include('home.pages.auctions.category-auctions')

    <!--SAME CATEGORY AUCTIONS SECTION-->


    <!--SELLER AUCTIONS SECTION-->
    @include('home.pages.auctions.seller-auctions')

    <!--SELLER AUCTIONS SECTION-->



@endsection

@section('footer_scripts')

@include('common.validations')
@include('common.alertify')
@include('home.pages.auctions.auctions-js-script')

 <script src="{{JS_HOME}}jquery.elevatezoom.js"></script> 
  <script src="{{JS_HOME}}elevationzoom.js"></script>  


<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->

<script src="{{JS}}share.js"></script>

<script type="text/javascript">
  
  if ($('#sm-product-zoom').length) {
        $("#sm-product-zoom").elevateZoom({
            gallery: 'gallery_01',
            zoomType: "inner",
            cursor: 'crosshair',
            galleryActiveClass: 'active',
            imageCrossfade: true
        });
    }
</script>

<!-- <script src="{{JS_HOME}}prefixfree.min.js"></script> -->
<!-- <script src="{{JS_HOME}}zoom-slideshow.js"></script> -->

<!-- <script>


$(document).ready(function() {
   // Initialisation du plugin jQuery
   $('#view').setZoomPicture({
   thumbsContainer: '#pics-thumbs',
   prevContainer: '#nav-left-thumbs',
   nextContainer: '#nav-right-thumbs',
   zoomContainer: '#zoom',
   zoomLevel: 2,
   });
});
</script>
 -->

 <script>
  function liveAuction(auction_slug) {
    
    window.open("{{URL_LIVE_AUCTION}}/"+auction_slug, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=300,width=800,height=500");
  }
 </script>
@endsection
