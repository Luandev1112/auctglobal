 
<?php 
  $recent_winners=[];
  $recent_winners = App\Auction::getRecentWinners();
  $currency_code = getSetting('currency_code','site_settings');
  ?>

 <!--RECENT WINNERS SECTION-->
    <?php if(count($recent_winners)): ?>
    <section class="au-similar-products">
        <div class="container-fluid">
            <div class="row">
              
              <div class="col-lg-12 col-md-12 col-sm-12 au-deals">
                <h2 class="text-center"> <?php echo e(getPhrase('recent_winners')); ?></h2> 
              </div>
                    
               <div class="screenshot-similar-product">

                <?php $__currentLoopData = $recent_winners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card au-similar-card">

                   
                  <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" data-toggle="tooltip" title="<?php echo e($auction->title); ?>" data-placement="bottom">
                  <img class="img-fluid similar-img" src="<?php echo e(getAuctionImage($auction->image,'auction')); ?>" alt="<?php echo e($auction->title); ?>"></a>

                  <ul class="action-card-details">
                      <li><p><strong><?php echo e($auction->username); ?></strong>
                        <span class="pull-right"><b><?php echo e($currency_code); ?><?php echo e($auction->paid_amount); ?></b></span></p>
                      </li>
                      
                  </ul>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                       
            </div>
          </div>    
        </div>
    </section>
    <?php endif; ?>
    
    <!--RECENT WINNERS SECTION-->

 