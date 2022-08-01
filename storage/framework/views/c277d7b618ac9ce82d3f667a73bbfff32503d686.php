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
                    <h2 class="text-center"> <?php echo e(getPhrase('bid_products')); ?></h2> 
                  </div>

                <div class="col-lg-12 col-md-12 col-sm-12 au-premium">
                    <nav class="au-tabs">

                        <div class="nav au-nav-tabs nav-tabs justify-content-center" id="nav-tab" role="tablist"> 

                          <a class="nav-item au-nav-item nav-link active" id="nav-sale-tab" data-toggle="tab" href="#onsale-auctions" role="tab" aria-controls="nav-sale" aria-selected="true"> <?php echo e(getPhrase('on_sale')); ?> </a> 

                          <a class="nav-item au-nav-item nav-link" id="nav-latest-tab" data-toggle="tab" href="#latest-auctions" role="tab" aria-controls="nav-latest" aria-selected="false"> <?php echo e(getPhrase('latest')); ?> </a> 

                          <a class="nav-item au-nav-item nav-link" id="nav-past-tab" data-toggle="tab" href="#past-auctions" role="tab" aria-controls="nav-past" aria-selected="false"> <?php echo e(getPhrase('past')); ?> </a> 

                          <?php if($featured_enable=='Yes'): ?> 
                          <a class="nav-item au-nav-item nav-link" id="nav-feature-tab" data-toggle="tab" href="#featured-auctions" role="tab" aria-controls="nav-featured" aria-selected="false"> <?php echo e(getPhrase('featured')); ?> </a> 
                          <?php endif; ?> 

                        </div>
                    </nav>


                    <div class="tab-content au-tab-content" id="nav-tabContent">


                        <!--onsale auctions start-->
                        <div class="tab-pane au-tab-pane fade show active" id="onsale-auctions" role="tabpanel" aria-labelledby="nav-sale-tab"> 
                          <?php if(count($buynow_records)): ?>

                            <div class="row"> 

                              <?php $__currentLoopData = $buynow_records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="au-accordina">
                                        <div class="au-thumb"><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"> <img src="<?php echo e(getAuctionImage($auction->image,'auction')); ?>" alt="<?php echo e($auction->title); ?>" class="img-fluid premium-img"></a> </div>

                                        <div class="au-acord-secret">
                                            <h6 class="card-title text-center" data-toggle="tooltip" title="<?php echo e($auction->title); ?>" data-placement="bottom"><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"><?php echo str_limit($auction->title,25,'..'); ?></a></h6>
                                           <!--  <p class="au-card-text text-center"> <?php echo str_limit($auction->description,60,'...'); ?> </p> -->
                                        </div>



                                      <!--Hover Section-->
                                      <ul class="au-list-ietem au-list-ietems">

                                      <li> <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" data-toggle="tooltip" title="view Auction"><i class="fa fa-eye"></i> </a> </li>



                                      <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-share-alt" title="Share Auction"></i> </a>
                                                            

                                      <div class="dropdown-menu">

                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"> <i class="fa fa-facebook-f au-common"></i></a>

                                        <a href="https://twitter.com/intent/tweet?text=<?php echo e(getSetting('site_title','site_settings')); ?>&amp;url=<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"><i class="fa fa-twitter au-common"></i></a>

                                        <a href="https://plus.google.com/share?url=<?php echo e(PREFIX); ?>"><i class="fa fa-google au-common"></i></a>

                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(PREFIX); ?>&amp;title=<?php echo e(getSetting('site_title','site_settings')); ?>&amp;summary=<?php echo e($auction->title); ?>"><i class="fa fa-linkedin au-common"></i></a>

                                      </div>

                                      </li>


                                        <li>

                                         <?php if(Auth::user()): ?>
                                        <a href="javascript:void(0);" ng-click="addtoFavourites(<?php echo e($auction->id); ?>)"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                        <?php else: ?>
                                         <a href="javascript:void(0);" onclick="showModal('loginModal')"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                        <?php endif; ?>

                                        </li>

                                      </ul>
                              </div>
                            </div> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                          <div class="text-center">
                            <a href="<?php echo e(URL_HOME_AUCTIONS); ?>" class="btn btn-primary login-bttn"><?php echo e(getPhrase('view_more')); ?> </a> 
                          </div>
                        </div>

                            </div> 

                            <?php else: ?>
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="text-center"> <?php echo e(getPhrase('no_auctions_available')); ?> </h4> 
                              </div>
                            </div> 
                          <?php endif; ?> 
                        </div>
                        <!--sale auctions tab end-->






                        <!--latest auctions start-->
                        <div class="tab-pane fade" id="latest-auctions" role="tabpanel" aria-labelledby="nav-latest-tab"> 

                          <?php if(count($new_records)): ?>
                            <div class="row">
                             <?php $__currentLoopData = $new_records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="au-accordina">
                                        <div class="au-thumb"><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"> <img src="<?php echo e(getAuctionImage($auction->image,'auction')); ?>" alt="<?php echo e($auction->title); ?>" class="img-fluid premium-img"></a> </div>
                                        <div class="au-acord-secret">
                                            <h6 class="card-title text-center" data-toggle="tooltip" title="<?php echo e($auction->title); ?>" data-placement="bottom"><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"><?php echo str_limit($auction->title,25,'..'); ?></a></h6>
                                            <!-- <p class="au-card-text text-center"><?php echo str_limit($auction->description,60,'...'); ?></p> -->
                                        </div>
                                        
                                            

                              <!--Hover Section-->
                              <ul class="au-list-ietem au-list-ietems">
                                            
                                <li><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" data-toggle="tooltip" title="view Auction"><i class="fa fa-eye"></i> </a></li>

                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt" title="Share Auction"></i></a>

                                <div class="dropdown-menu">


                                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"> <i class="fa fa-facebook-f au-common"></i></a>

                                  <a href="https://twitter.com/intent/tweet?text=<?php echo e(getSetting('site_title','site_settings')); ?>&amp;url=<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"><i class="fa fa-twitter au-common"></i></a>

                                  <a href="https://plus.google.com/share?url=<?php echo e(PREFIX); ?>"><i class="fa fa-google au-common"></i></a>

                                  <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(PREFIX); ?>&amp;title=<?php echo e(getSetting('site_title','site_settings')); ?>&amp;summary=<?php echo e($auction->title); ?>"><i class="fa fa-linkedin au-common"></i></a>

                                </div>

                              </li>

                                 <li>

                                  <?php if(Auth::user()): ?>
                                  <a href="javascript:void(0);" ng-click="addtoFavourites(<?php echo e($auction->id); ?>)"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                  <?php else: ?>
                                  <a href="javascript:void(0);" onclick="showModal('loginModal')"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                  <?php endif; ?>
                                  </li>

                                 </ul>

                                    </div>
                                </div>

                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                   <div class="col-lg-12 col-md-12 col-sm-12"> 
                                    <div class="text-center">
                                      <a href="<?php echo e(URL_HOME_AUCTIONS); ?>" class="btn btn-primary login-bttn"><?php echo e(getPhrase('view_more')); ?></a> 
                                    </div>
                                  </div>

                            </div> 

                            <?php else: ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <h4 class="text-center"> <?php echo e(getPhrase('no_auctions_available')); ?> </h4> 
                                </div>
                            </div> 
                            <?php endif; ?> 
                          </div>
                          <!--latest auctions tab end-->







                        <!--past auctions start-->
                        <div class="tab-pane fade" id="past-auctions" role="tabpanel" aria-labelledby="nav-past-tab"> 

                          <?php if(count($past_records)): ?>
                            <div class="row"> 

                              <?php $__currentLoopData = $past_records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                 <div class="col-lg-3 col-md-6 col-sm-6">

                                    <div class="au-accordina">

                                        <div class="au-thumb"><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"> <img src="<?php echo e(getAuctionImage($auction->image,'auction')); ?>" alt="<?php echo e($auction->title); ?>" class="img-fluid premium-img"></a> </div>

                                        <div class="au-acord-secret">
                                            <h6 class="card-title text-center" data-toggle="tooltip" title="<?php echo e($auction->title); ?>" data-placement="bottom"><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"><?php echo str_limit($auction->title,25,'..'); ?></a></h6>
                                           <!--  <p class="au-card-text text-center"><?php echo str_limit($auction->description,60,'...'); ?></p> -->
                                        </div>
                                       


                              <!--Hover Section-->
                              <ul class="au-list-ietem au-list-ietems">
                                            
                                <li><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" data-toggle="tooltip" title="view Auction"><i class="fa fa-eye"></i> </a></li>

                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt" title="Share Auction"></i></a>

                                  <div class="dropdown-menu">

                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"> <i class="fa fa-facebook-f au-common"></i></a>

                                    <a href="https://twitter.com/intent/tweet?text=<?php echo e(getSetting('site_title','site_settings')); ?>&amp;url=<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"><i class="fa fa-twitter au-common"></i></a>

                                    <a href="https://plus.google.com/share?url=<?php echo e(PREFIX); ?>"><i class="fa fa-google au-common"></i></a>

                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(PREFIX); ?>&amp;title=<?php echo e(getSetting('site_title','site_settings')); ?>&amp;summary=<?php echo e($auction->title); ?>"><i class="fa fa-linkedin au-common"></i></a>

                                  </div>
                                </li>

                               <li>

                                <?php if(Auth::user()): ?>
                                <a href="javascript:void(0);" ng-click="addtoFavourites(<?php echo e($auction->id); ?>)"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                <?php else: ?>
                                <a href="javascript:void(0);" onclick="showModal('loginModal')"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                <?php endif; ?>
                                </li>

                               </ul>


                                    </div>

                                </div> 

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                 <div class="col-lg-12 col-md-12 col-sm-12"> 
                                  <div class="text-center">
                                    <a href="<?php echo e(URL_HOME_AUCTIONS); ?>" class="btn btn-primary login-bttn"><?php echo e(getPhrase('view_more')); ?></a> 
                                  </div>
                                 </div>

                            </div> 

                            <?php else: ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                  <h4 class="text-center"> <?php echo e(getPhrase('no_auctions_available')); ?> </h4> 
                                </div>
                            </div> 
                            <?php endif; ?> 

                          </div>
                          <!--Past auctions tab end-->





                        <!--featured auctions start-->
                        <?php if($featured_enable=='Yes'): ?>
                         <div class="tab-pane fade" id="featured-auctions" role="tabpanel" aria-labelledby="nav-feature-tab"> 
                        
                          <?php if(count($featured_records)): ?>
                           
                            <div class="row"> 

                              <?php $__currentLoopData = $featured_records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              
                               <div class="col-lg-3 col-md-6 col-sm-6">

                                    <div class="au-accordina">

                                        <div class="au-thumb"><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"> <img src="<?php echo e(getAuctionImage($auction->image,'auction')); ?>" alt="<?php echo e($auction->title); ?>" class="img-fluid premium-img"></a> </div>

                                        <div class="au-acord-secret">
                                            <h6 class="card-title text-center" data-toggle="tooltip" title="<?php echo e($auction->title); ?>" data-placement="bottom"><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"><?php echo str_limit($auction->title,25,'..'); ?></a></h6>
                                            <!-- <p class="au-card-text text-center"><?php echo str_limit($auction->description,60,'...'); ?></p> -->
                                        </div>
                                       


                              <!--Hover Section-->
                              <ul class="au-list-ietem au-list-ietems">
                                            
                                <li><a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" data-toggle="tooltip" title="view Auction"><i class="fa fa-eye"></i> </a></li>

                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt" title="Share Auction"></i></a>

                                  <div class="dropdown-menu">

                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"> <i class="fa fa-facebook-f au-common"></i></a>

                                    <a href="https://twitter.com/intent/tweet?text=<?php echo e(getSetting('site_title','site_settings')); ?>&amp;url=<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>"><i class="fa fa-twitter au-common"></i></a>

                                    <a href="https://plus.google.com/share?url=<?php echo e(PREFIX); ?>"><i class="fa fa-google au-common"></i></a>

                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(PREFIX); ?>&amp;title=<?php echo e(getSetting('site_title','site_settings')); ?>&amp;summary=<?php echo e($auction->title); ?>"><i class="fa fa-linkedin au-common"></i></a>

                                  </div>
                                </li>

                               <li>

                                <?php if(Auth::user()): ?>
                                <a href="javascript:void(0);" ng-click="addtoFavourites(<?php echo e($auction->id); ?>)"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                <?php else: ?>
                                <a href="javascript:void(0);" onclick="showModal('loginModal')"><i class="pe-7s-like" title="Add to Favourites"></i>  </a>
                                <?php endif; ?>
                                </li>

                               </ul>


                                    </div>

                                </div> 

                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <div class="col-lg-12 col-md-12 col-sm-12"> 
                                  <div class="text-center">
                                    <a href="<?php echo e(URL_HOME_AUCTIONS); ?>" class="btn btn-primary login-bttn"><?php echo e(getPhrase('view_more')); ?></a> 
                                  </div>
                                </div>

                            </div> 

                            <?php else: ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <h4 class="text-center"> <?php echo e(getPhrase('no_auctions_available')); ?> </h4> 
                                </div>
                            </div> 
                            <?php endif; ?> 

                          </div>
                          <?php endif; ?>

                        <!--featured auctions tab end-->

                    </div>


                </div>



            </div>
        </div>
    </section>
    <!--PREMIUM PRODUCTS SECTION-->
