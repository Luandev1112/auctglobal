<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"> <?php echo e(getPhrase('auctions')); ?> </h3>
    
    
       
   
    
<?php 
$date_format = getSetting('date_format','site_settings');

?>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(getPhrase('list')); ?>


             <a href="<?php echo e(URL_AUCTIONS_ADD); ?>" class="btn btn-success btn-add pull-right"><?php echo e(getPhrase('add_new')); ?></a>

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th style="text-align:center;">S.no.</th>
                        <th> <?php echo e(getPhrase('image')); ?> </th>
                        <th> <?php echo e(getPhrase('title')); ?> </th>
                        <th> <?php echo e(getPhrase('start_date')); ?> </th>
                        <th> <?php echo e(getPhrase('end_date')); ?> </th>

                        <th> <?php echo e(getPhrase('reserve_price')); ?> (<?php echo e(getSetting('currency_code','site_settings')); ?>) </th>
                        <?php if(checkRole(['admin'])): ?>
                        <th> <?php echo e(getPhrase('seller')); ?> </th>
                        <?php endif; ?>
                        <th> <?php echo e(getPhrase('created_by')); ?> </th>
                        <th> <?php echo e(getPhrase('auction_status')); ?> </th>
                        <th> <?php echo e(getPhrase('admin_status')); ?> </th>

                        <th> <?php echo e(getPhrase('live_auction')); ?> </th>
                       
                        <th>&nbsp;</th>
                        

                    </tr>
                </thead>
                <?php if(count($auctions) > 0): ?>
                <tbody>
                    <?php if(count($auctions) > 0): ?>
                     <?php $i=0;?>
                        <?php $__currentLoopData = $auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php $i++;?>
                            <tr data-entry-id="<?php echo e($auction->id); ?>">
                              
                                <td style="text-align:center;"><?php echo e($i); ?></td>
                     
                                <td field-key='image'> <a href="<?php echo e(getAuctionImage($auction->image,'auction')); ?>" target="_blank"><img src="<?php echo e(getAuctionImage($auction->image)); ?>" alt="<?php echo e($auction->title); ?>" width="50" /> </a> </td>

                                <td> <?php echo e($auction->title); ?> </td>

                                <td> <?php if($auction->start_date): ?> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->start_date));?> <?php endif; ?> </td>

                                <td>  <?php if($auction->end_date): ?> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($auction->end_date));?> <?php endif; ?> </td>

                                <td ><?php echo e($auction->reserve_price); ?></td>
                                <?php if(checkRole(['admin'])): ?>
                                <td> <a href="<?php echo e(URL_USERS_VIEW); ?>/<?php echo e($auction->seller_slug); ?>" target="_blank" title="Seller Details"> <?php echo e($auction->username); ?></td>
                                <?php endif; ?>
                                <td><?php echo e($auction->created_by); ?></td>

                                <td><?php echo e($auction->auction_status); ?></td>

                                <td><?php echo e($auction->admin_status); ?></td>

                                <td> <?php if($auction->live_auction_date): ?> 

                                    <?php echo date(getSetting('date_format','site_settings'), strtotime($auction->live_auction_date));?> 
                                    (
                                    <?php if($auction->live_auction_start_time): ?>
                                        <?php echo e($auction->live_auction_start_time); ?>

                                    <?php endif; ?>

                                    -

                                    <?php if($auction->live_auction_end_time): ?>
                                        <?php echo e($auction->live_auction_end_time); ?>

                                    <?php endif; ?>
                                    )
                                    <?php endif; ?> </td>

                                <td>
                                    
                                    <a href="<?php echo e(URL_AUCTIONS_VIEW); ?><?php echo e($auction->slug); ?>" class="btn btn-xs btn-primary"> <?php echo e(getPhrase('view')); ?> </a>
                                   
                                    <a href="<?php echo e(URL_AUCTIONS_EDIT); ?>/<?php echo e($auction->slug); ?>" class="btn btn-xs btn-info"> <?php echo e(getPhrase('edit')); ?> </a>
                                    
                                </td>


                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="12"> <?php echo e(getPhrase('no_entries_in_table')); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?> 


    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_delete')): ?> 
    <?php echo $__env->make('common.deletescript', array('route'=>URL_AUCTIONS_DELETE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>





<?php $__env->stopSection(); ?>        
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>