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
                  <h2 class="text-center"> <?php echo e(getPhrase('latest_auction_deals')); ?> </h2>
                 </div>


                 <?php if(count($latest_auctions)): ?>
                 <div class="screenshot-slider">

                    <?php $__currentLoopData = $latest_auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="au-deals-wrapper">
                      <div class="card au-deal-card">
                       <div class="card-icon">

                        <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" title="View Auction Details"> <img src="<?php echo e(getAuctionImage($auction->image,'auction')); ?>" alt="<?php echo e($auction->title); ?>" class="img-fluid"> </a>

                        </div>
                        <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" title="Auction Details"> <h4 class="card-title" data-toggle="tooltip" title="<?php echo e($auction->title); ?>" data-placement="bottom">  <?php echo str_limit($auction->title,40,'..'); ?> </h4> </a>

                        <label class="text-center"> <?php echo e($currency_code); ?><?php echo e($auction->reserve_price); ?> </label>
                     </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <?php else: ?>
                <div class="col-lg-12">
                <h4> <?php echo e(getPhrase('no_auctions_available')); ?> </h4>
            </div>
                <?php endif; ?>


            </div>
        </div>
    </section>
<!--LATEST AUCTION DEALS SECTION-->

