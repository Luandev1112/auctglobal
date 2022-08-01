<?php $currency_code = getSetting('currency_code','site_settings');
$today = DATE('Y-m-d');
?>

<div class="row">
<?php if(count($auctions)): ?>  
<?php $__currentLoopData = $auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-4 col-md-6 col-sm-6 au-item-categorys">
 <div class="card au-cards">
    <?php if(Auth::user()): ?>
    <a href="javascript:void(0);" onclick="auctionAddtoFavourites(<?php echo e($auction->id); ?>)" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
    <?php else: ?>
     <a href="javascript:void(0);" onclick="showModal('loginModal')" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
    <?php endif; ?>

    <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" title="View Auction Details"><img class="img-fluid auction-img" src="<?php echo e(getAuctionImage($auction->image,'auction')); ?>" alt="<?php echo e($auction->title); ?>"></a>
    <div class="card-block au-card-block">
      <a href="<?php echo e(URL_HOME_AUCTION_DETAILS); ?>/<?php echo e($auction->slug); ?>" title="View Auction Details"><h4 class="card-title au-title"> <?php echo str_limit($auction->title,40,''); ?> </h4></a>
    

      
      <?php if($auction->auction_status=='open' && $auction->start_date<=NOW() && $auction->end_date>=NOW()): ?>
      <?php $total_bids = $auction->getAuctionBiddersCount();?>
    
      <ul class="action-card-details">
          <li><p><small title="Auction End Date">
            <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?>
          </small><span class="pull-right"><small><?php echo e(getAuctionDaysLeft($auction->start_date,$auction->end_date)); ?></small></span></p></li>
           <li><p><small title="Reserve Price"><?php echo e($currency_code); ?><?php echo e($auction->reserve_price); ?></small><span class="pull-right"><small><?php echo e($total_bids); ?> bids</small></span></p></li>
      </ul>

      <?php elseif($auction->auction_status=='new' && $auction->start_date<=NOW() && $auction->end_date>=NOW()): ?>
      <p>
        <span style="float:left;"><small title="Auction End Date"> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?> </small></span>
        <span style="float:right;"><small title="Reserve Price"><?php echo e($currency_code); ?><?php echo e($auction->reserve_price); ?></small></span>
      </p>
      <?php elseif($auction->auction_status=='closed'): ?>
      <p>
      <span style="float:left;"><small title="Auction End Date"><?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?></small></span>
      <span style="float:right;"><small><?php echo e(getPhrase('auction_ended')); ?></small></span>
      </p>
      <?php endif; ?>

    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<div class="col-lg-12 col-md-12 col-sm-12">
  <h4 class="text-center"> <?php echo e(getPhrase('no_auctions_available')); ?> </h4>
</div>
<?php endif; ?>

</div>



 <!--Pagination Section-->
 <div class="row ">
 <div class="col-lg-12 col-md-12 col-sm-12 au-page">


   <?php echo e($auctions->links()); ?>



<!-- <div>
    Showing <?php echo e(($auctions->currentpage()-1)*$auctions->perpage()+1); ?> to <?php echo e($auctions->currentpage()*$auctions->perpage()); ?>

    of  <?php echo e($auctions->total()); ?> entries
</div>


<div>
  <?php echo e(($auctions->currentpage()-1) * $auctions->perpage() + $auctions->count()); ?>

</div> -->


  </div>
</div>
<!--Pagination Section-->


