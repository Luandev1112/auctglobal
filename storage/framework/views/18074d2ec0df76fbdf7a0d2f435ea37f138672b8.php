<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"> <?php echo e(getPhrase('notifications')); ?> </h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(getPhrase('list')); ?>

        </div>

        <div class="panel-body table-responsive">
            
            <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">

                <thead>
                    <tr>
                        <th> <?php echo e(getPhrase('title')); ?> </th>
                        <th> <?php echo e(getPhrase('description')); ?> </th>
                        <th> <?php echo e(getPhrase('created_at')); ?> </th>
                        <th> <?php echo e(getPhrase('action')); ?> </th>
                    </tr>
                </thead>


                 <tbody>
                    
                                <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $title = $notification->data['title'];
                                    $url = $notification->data['url'];
                                    $description='';
                                    if (isset($notification->data['description']))
                                    $description = $notification->data['description'];

                                    $notification->markAsRead();
                                ?>
                                <tr>
                                    <td><?php echo e($title); ?></td>
                                    <td><?php echo e($description); ?></td>
                                    <td>  <?php if($notification->updated_at): ?> <?php echo date(getSetting('date_format','site_settings').' H:i:s', strtotime($notification->updated_at));?> <?php endif; ?> </td>
                                    <td><a class="btn btn-info btn-xs" href="<?php echo e(URL_USER_NOTIFICATIONS_VIEW.$notification->id); ?>">View more</a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>