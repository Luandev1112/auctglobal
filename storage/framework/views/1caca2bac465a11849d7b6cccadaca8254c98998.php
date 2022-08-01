
<?php
$category_auctions=[];
if (isset($auction) && !empty($auction)) {

  $category_auctions = App\Auction::getSellerRelatedAuctions($auction->user_id);
  $currency_code = getSetting('currency_code','site_settings');
  ?>

 <!--SELLER PRODUCTS SECTION-->
    <?php if(count($category_auctions)): ?>
    <section class="au-similar-products">
        <div class="container-fluid">
            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12 au-deals">
                <h2 class="text-center"> <?php echo e(getPhrase('seller_auctions')); ?></h2>
              </div>

               <div class="screenshot-similar-product">

                <?php $__currentLoopData = $category_auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card au-similar-card">

                  <?php if(Auth::user()): ?>
                  <a href="javascript:void(0);" ng-click="addtoFavourites(<?php echo e($auction->id); ?>)"><i class="pe-7s-like like"></i></a>
                  <?php else: ?>
                   <a href="javascript:void(0);" onclick="showModal('loginModal')"><i class="pe-7s-like like"></i></a>
                  <?php endif; ?>



                  <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" title="Auction Details">
                  <img class="img-fluid similar-img" src="<?php echo e(getAuctionImage($auction->image,'auction')); ?>" alt="<?php echo e($auction->title); ?>"></a>


                  <div class="card-block au-similar-block text-center">

                      <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" data-toggle="tooltip" title="<?php echo e($auction->title); ?>" data-placement="bottom"> <h6 class="card-title text-center"> <?php echo str_limit($auction->title,30,'..'); ?></h6></a>
                      

                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
          </div>
        </div>
    </section>
    <?php endif; ?>

    <!--SELLER PRODUCTS SECTION-->

    <?php } ?>
