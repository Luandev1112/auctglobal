<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"> <?php echo e($title); ?> </h3>
    <?php $currency = getSetting('currency_code','site_settings');?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(getPhrase('list')); ?>

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        
                        <th>S.No.</th>
                        
                        <th> <?php echo e(getPhrase('username')); ?> </th>
                        <th> <?php echo e(getPhrase('transaction_id')); ?> </th>
                        <th> <?php echo e(getPhrase('paid_amount')); ?> </th>
                        
                        <th> <?php echo e(getPhrase('payment_for')); ?> </th>
                        <th> <?php echo e(getPhrase('pay_through')); ?> </th>
                        <th> <?php echo e(getPhrase('payment_status')); ?> </th>
                        <th> <?php echo e(getPhrase('datetime')); ?> </th>

                        <th>&nbsp;</th>

                    </tr>
                </thead>
                <?php if(count($records) > 0): ?>
                <tbody>
                    <?php if(count($records) > 0): ?>
                     <?php $i=0;?>
                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php $i++;?>
                            <tr>
                              
                                <td> <?php echo e($i); ?> </td>
                              
                                <td> <a href="<?php echo e(URL_USERS_VIEW); ?>/<?php echo e($record->user_slug); ?>"><?php echo e($record->username); ?> </a></td>

                                <td> <?php echo e($record->transaction_id); ?> </td>

                                <td> <?php if($record->paid_amount): ?> <?php echo e($currency); ?><?php echo e($record->paid_amount); ?> <?php endif; ?> </td>

                                <td> <?php echo e(get_text($record->payment_for)); ?> </td>

                                <td> <?php echo e(get_text($record->payment_gateway)); ?> </td>

                                <td> <?php echo e(get_text($record->payment_status)); ?> </td>

                                <td> <?php if($record->created_at): ?> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($record->created_at));?> <?php endif; ?> </td>

                                <td>
                                    <a href="<?php echo e(URL_PAYMENT_DETAILS); ?>/<?php echo e($record->slug); ?>" class="btn btn-xs btn-primary"> <?php echo e(getPhrase('view')); ?> </a>
                                   
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="11"> <?php echo e(getPhrase('no_entries_in_table')); ?></td>
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