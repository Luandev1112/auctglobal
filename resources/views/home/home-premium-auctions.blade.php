<?php
$featured_enable = getSetting('enable_featured_items','auction_settings');

use App\Auction;
$currency_code = getSetting('currency_code','site_settings');

//Featured Auctions
$featured_records = Auction::getHomeFeaturedAuctions(8);

//BuyNow Auctions
$buynow_records   = Auction::getHomeBuyNowAuctions(8);

//New Auctions
$new_records      = Auction::getHomeNewAuctions(8);

//past Auctions
$past_records     = Auction::getHomePastAuctions(8);
?>
    <!--PREMIUM PRODUCTS SECTION-->
    <section class="au-premium-product">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 au-deals">
                    <h2 class="text-center"> {{getPhrase('bid_products')}}</h2> 
                  </div>

                <div class="col-lg-12 col-md-12 col-sm-12 au-premium">
                    <nav class="au-tabs">

                        <div class="nav au-nav-tabs nav-tabs justify-content-center" id="nav-tab" role="tablist"> 

                          <a class="nav-item au-nav-item nav-link active" id="nav-sale-tab" data-toggle="tab" href="#onsale-auctions" role="tab" aria-controls="nav-sale" aria-selected="true"> {{getPhrase('on_sale')}} </a> 

                          <a class="nav-item au-nav-item nav-link" id="nav-latest-tab" data-toggle="tab" href="#latest-auctions" role="tab" aria-controls="nav-latest" aria-selected="false"> {{getPhrase('latest')}} </a> 

                          <a class="nav-item au-nav-item nav-link" id="nav-past-tab" data-toggle="tab" href="#past-auctions" role="tab" aria-controls="nav-past" aria-selected="false"> {{getPhrase('past')}} </a> 

                          @if ($featured_enable=='Yes') 
                          <a class="nav-item au-nav-item nav-link" id="nav-feature-tab" data-toggle="tab" href="#featured-auctions" role="tab" aria-controls="nav-featured" aria-selected="false"> {{getPhrase('featured')}} </a> 
                          @endif 

                        </div>
                    </nav>


                    <div class="tab-content au-tab-content" id="nav-tabContent">


                        <!--onsale auctions start-->
                        <div class="tab-pane au-tab-pane fade show active" id="onsale-auctions" role="tabpanel" aria-labelledby="nav-sale-tab"> 
                          @if (count($buynow_records))

                            <div class="row"> 

                              @foreach ($buynow_records as $auction)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="au-accordina">
                                        <div class="au-thumb"><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"> <img src="{{getAuctionImage($auction->image,'auction')}}" alt="{{$auction->title}}" class="img-fluid premium-img"></a> </div>

                                        <div class="au-acord-secret">
                                            <h6 class="card-title text-center" data-toggle="tooltip" title="{{$auction->title}}" data-placement="bottom"><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}">{!! str_limit($auction->title,25,'..') !!}</a></h6>
                                           <!--  <p class="au-card-text text-center"> {!! str_limit($auction->description,60,'...') !!} </p> -->
                                        </div>



                                      <!--Hover Section-->
                                      <ul class="au-list-ietem au-list-ietems">

                                      <li> <a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" data-toggle="tooltip" title="view Auction"><i class="fa fa-eye"></i> </a> </li>



                                      <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-share-alt" title="Share Auction"></i> </a>
                                                            

                                      <div class="dropdown-menu">

                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"> <i class="fa fa-facebook-f au-common"></i></a>

                                        <a href="https://twitter.com/intent/tweet?text={{getSetting('site_title','site_settings')}}&amp;url={{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"><i class="fa fa-twitter au-common"></i></a>

                                        <a href="https://plus.google.com/share?url={{PREFIX}}"><i class="fa fa-google au-common"></i></a>

                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{PREFIX}}&amp;title={{getSetting('site_title','site_settings')}}&amp;summary={{$auction->title}}"><i class="fa fa-linkedin au-common"></i></a>

                                      </div>

                                      </li>


                                        <li>

                                         @if (Auth::user())
                                        <a href="javascript:void(0);" ng-click="addtoFavourites({{$auction->id}})"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                        @else
                                         <a href="javascript:void(0);" onclick="showModal('loginModal')"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                        @endif

                                        </li>

                                      </ul>
                              </div>
                            </div> 
                        @endforeach

                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                          <div class="text-center">
                            <a href="{{URL_HOME_AUCTIONS}}" class="btn btn-primary login-bttn">{{getPhrase('view_more')}} </a> 
                          </div>
                        </div>

                            </div> 

                            @else
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="text-center"> {{getPhrase('no_auctions_available')}} </h4> 
                              </div>
                            </div> 
                          @endif 
                        </div>
                        <!--sale auctions tab end-->






                        <!--latest auctions start-->
                        <div class="tab-pane fade" id="latest-auctions" role="tabpanel" aria-labelledby="nav-latest-tab"> 

                          @if (count($new_records))
                            <div class="row">
                             @foreach ($new_records as $auction)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="au-accordina">
                                        <div class="au-thumb"><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"> <img src="{{getAuctionImage($auction->image,'auction')}}" alt="{{$auction->title}}" class="img-fluid premium-img"></a> </div>
                                        <div class="au-acord-secret">
                                            <h6 class="card-title text-center" data-toggle="tooltip" title="{{$auction->title}}" data-placement="bottom"><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}">{!! str_limit($auction->title,25,'..') !!}</a></h6>
                                            <!-- <p class="au-card-text text-center">{!! str_limit($auction->description,60,'...') !!}</p> -->
                                        </div>
                                        
                                            

                              <!--Hover Section-->
                              <ul class="au-list-ietem au-list-ietems">
                                            
                                <li><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" data-toggle="tooltip" title="view Auction"><i class="fa fa-eye"></i> </a></li>

                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt" title="Share Auction"></i></a>

                                <div class="dropdown-menu">


                                  <a href="https://www.facebook.com/sharer/sharer.php?u={{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"> <i class="fa fa-facebook-f au-common"></i></a>

                                  <a href="https://twitter.com/intent/tweet?text={{getSetting('site_title','site_settings')}}&amp;url={{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"><i class="fa fa-twitter au-common"></i></a>

                                  <a href="https://plus.google.com/share?url={{PREFIX}}"><i class="fa fa-google au-common"></i></a>

                                  <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{PREFIX}}&amp;title={{getSetting('site_title','site_settings')}}&amp;summary={{$auction->title}}"><i class="fa fa-linkedin au-common"></i></a>

                                </div>

                              </li>

                                 <li>

                                  @if (Auth::user())
                                  <a href="javascript:void(0);" ng-click="addtoFavourites({{$auction->id}})"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                  @else
                                  <a href="javascript:void(0);" onclick="showModal('loginModal')"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                  @endif
                                  </li>

                                 </ul>

                                    </div>
                                </div>

                                 @endforeach

                                   <div class="col-lg-12 col-md-12 col-sm-12"> 
                                    <div class="text-center">
                                      <a href="{{URL_HOME_AUCTIONS}}" class="btn btn-primary login-bttn">{{getPhrase('view_more')}}</a> 
                                    </div>
                                  </div>

                            </div> 

                            @else
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <h4 class="text-center"> {{getPhrase('no_auctions_available')}} </h4> 
                                </div>
                            </div> 
                            @endif 
                          </div>
                          <!--latest auctions tab end-->







                        <!--past auctions start-->
                        <div class="tab-pane fade" id="past-auctions" role="tabpanel" aria-labelledby="nav-past-tab"> 

                          @if (count($past_records))
                            <div class="row"> 

                              @foreach ($past_records as $auction)

                                 <div class="col-lg-3 col-md-6 col-sm-6">

                                    <div class="au-accordina">

                                        <div class="au-thumb"><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"> <img src="{{getAuctionImage($auction->image,'auction')}}" alt="{{$auction->title}}" class="img-fluid premium-img"></a> </div>

                                        <div class="au-acord-secret">
                                            <h6 class="card-title text-center" data-toggle="tooltip" title="{{$auction->title}}" data-placement="bottom"><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}">{!! str_limit($auction->title,25,'..') !!}</a></h6>
                                           <!--  <p class="au-card-text text-center">{!! str_limit($auction->description,60,'...') !!}</p> -->
                                        </div>
                                       


                              <!--Hover Section-->
                              <ul class="au-list-ietem au-list-ietems">
                                            
                                <li><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" data-toggle="tooltip" title="view Auction"><i class="fa fa-eye"></i> </a></li>

                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt" title="Share Auction"></i></a>

                                  <div class="dropdown-menu">

                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"> <i class="fa fa-facebook-f au-common"></i></a>

                                    <a href="https://twitter.com/intent/tweet?text={{getSetting('site_title','site_settings')}}&amp;url={{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"><i class="fa fa-twitter au-common"></i></a>

                                    <a href="https://plus.google.com/share?url={{PREFIX}}"><i class="fa fa-google au-common"></i></a>

                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{PREFIX}}&amp;title={{getSetting('site_title','site_settings')}}&amp;summary={{$auction->title}}"><i class="fa fa-linkedin au-common"></i></a>

                                  </div>
                                </li>

                               <li>

                                @if (Auth::user())
                                <a href="javascript:void(0);" ng-click="addtoFavourites({{$auction->id}})"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                @else
                                <a href="javascript:void(0);" onclick="showModal('loginModal')"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                @endif
                                </li>

                               </ul>


                                    </div>

                                </div> 

                                @endforeach

                                 <div class="col-lg-12 col-md-12 col-sm-12"> 
                                  <div class="text-center">
                                    <a href="{{URL_HOME_AUCTIONS}}" class="btn btn-primary login-bttn">{{getPhrase('view_more')}}</a> 
                                  </div>
                                 </div>

                            </div> 

                            @else
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                  <h4 class="text-center"> {{getPhrase('no_auctions_available')}} </h4> 
                                </div>
                            </div> 
                            @endif 

                          </div>
                          <!--Past auctions tab end-->





                        <!--featured auctions start-->
                        @if ($featured_enable=='Yes')
                         <div class="tab-pane fade" id="featured-auctions" role="tabpanel" aria-labelledby="nav-feature-tab"> 
                        
                          @if (count($featured_records))
                           
                            <div class="row"> 

                              @foreach ($featured_records as $auction)
                              
                               <div class="col-lg-3 col-md-6 col-sm-6">

                                    <div class="au-accordina">

                                        <div class="au-thumb"><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"> <img src="{{getAuctionImage($auction->image,'auction')}}" alt="{{$auction->title}}" class="img-fluid premium-img"></a> </div>

                                        <div class="au-acord-secret">
                                            <h6 class="card-title text-center" data-toggle="tooltip" title="{{$auction->title}}" data-placement="bottom"><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}">{!! str_limit($auction->title,25,'..') !!}</a></h6>
                                            <!-- <p class="au-card-text text-center">{!! str_limit($auction->description,60,'...') !!}</p> -->
                                        </div>
                                       


                              <!--Hover Section-->
                              <ul class="au-list-ietem au-list-ietems">
                                            
                                <li><a href="{{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}" data-toggle="tooltip" title="view Auction"><i class="fa fa-eye"></i> </a></li>

                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt" title="Share Auction"></i></a>

                                  <div class="dropdown-menu">

                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"> <i class="fa fa-facebook-f au-common"></i></a>

                                    <a href="https://twitter.com/intent/tweet?text={{getSetting('site_title','site_settings')}}&amp;url={{URL_HOME_AUCTION_DETAILS}}/{{$auction->slug}}"><i class="fa fa-twitter au-common"></i></a>

                                    <a href="https://plus.google.com/share?url={{PREFIX}}"><i class="fa fa-google au-common"></i></a>

                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{PREFIX}}&amp;title={{getSetting('site_title','site_settings')}}&amp;summary={{$auction->title}}"><i class="fa fa-linkedin au-common"></i></a>

                                  </div>
                                </li>

                               <li>

                                @if (Auth::user())
                                <a href="javascript:void(0);" ng-click="addtoFavourites({{$auction->id}})"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                @else
                                <a href="javascript:void(0);" onclick="showModal('loginModal')"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                @endif
                                </li>

                               </ul>


                                    </div>

                                </div> 

                              @endforeach

                                <div class="col-lg-12 col-md-12 col-sm-12"> 
                                  <div class="text-center">
                                    <a href="{{URL_HOME_AUCTIONS}}" class="btn btn-primary login-bttn">{{getPhrase('view_more')}}</a> 
                                  </div>
                                </div>

                            </div> 

                            @else
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <h4 class="text-center"> {{getPhrase('no_auctions_available')}} </h4> 
                                </div>
                            </div> 
                            @endif 

                          </div>
                          @endif

                        <!--featured auctions tab end-->

                    </div>


                </div>



            </div>
        </div>
    </section>
    <!--PREMIUM PRODUCTS SECTION-->
