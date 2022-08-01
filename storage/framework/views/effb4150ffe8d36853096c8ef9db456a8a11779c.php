<?php $__env->startSection('content'); ?>

<?php echo $__env->make('bidder.leftmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--Dashboard section -->


    <div class="col-lg-9 col-md-8 col-sm-12 au-onboard">
            <a href="<?php echo e(URL_HOME); ?>" class="au-middles justify-content-start"> <?php echo e(getPhrase('home')); ?> &nbsp;<span> / <?php echo e($title); ?> </span></a>

            <div class="au-left-side form-auth-style">

                <div class="row">
                    <?php  
                    $currency = getSetting('currency_code','site_settings');
                    //dateformat
                    ?>

                    <div class="table-responsive">

                    <div class="panel-body">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th>#</th>
                       
                        <th> <?php echo e(getPhrase('transaction_id')); ?> </th>
                        <th> <?php echo e(getPhrase('paid_amount')); ?> </th>

                        <th> <?php echo e(getPhrase('payment_for')); ?> </th>
                        <th> <?php echo e(getPhrase('pay_through')); ?> </th>

                        <th> <?php echo e(getPhrase('datetime')); ?> </th>

                        <th>&nbsp;</th>

                    </tr>
                </thead>
                <?php if(count($records) > 0): ?>
                <tbody>
                    <?php if(count($records) > 0): ?>
                    <?php $i=0;
                   
                     ?>
                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++;?>
                            <tr>
                            
                                <td><?php echo e($i); ?></td>
                               
                               
                                <td> <?php echo e($record->transaction_id); ?> </td>

                                
                                <td> <?php if($record->paid_amount): ?> <?php echo e($currency); ?><?php echo e($record->paid_amount); ?> <?php endif; ?></td>

                                <td> <?php echo e(get_text($record->payment_for)); ?> </td>

                                <td> <?php echo e(ucfirst($record->payment_gateway)); ?> </td>

                                 <td> <?php if($record->created_at): ?> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($record->created_at));?> <?php endif; ?> </td>

                                <td>
                                    <a href="<?php echo e(URL_BIDDER_PAYMENT_DETAILS); ?>/<?php echo e($record->slug); ?>" class="btn btn-primary btn-sm login-bttn" title="View Payment Details"> <?php echo e(getPhrase('view')); ?> </a>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7"> <?php echo e(getPhrase('no_entries_in_table')); ?> </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>

                </div> 


            </div> 
    </div> 




        </div>
      </div>   
    </section>
    <!--Dashboard section-->



<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('home.pages.auctions.auctions-js-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>