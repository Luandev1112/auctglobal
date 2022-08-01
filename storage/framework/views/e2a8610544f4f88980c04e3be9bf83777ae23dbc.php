<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo e($title); ?></h3>
    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(getPhrase('list')); ?>


             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_create')): ?>
            <a href="<?php echo e(URL_USERS_ADD); ?>" class="btn btn-success btn-add pull-right"><?php echo e(getPhrase('add_new')); ?></a>
            <?php endif; ?>

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        <th style="text-align:center;">S.no.</th>
                        <th> <?php echo e(getPhrase('username')); ?> </th>
                        <th> <?php echo e(getPhrase('email')); ?> </th>
                        <th> <?php echo e(getPhrase('image')); ?> </th>
                        <th> <?php echo e(getPhrase('role')); ?> </th>
                        
                        <th> <?php echo e(getPhrase('status')); ?> </th>

                        <th>&nbsp;</th>

                    </tr>
                </thead>
                 <?php if(count($users) > 0): ?>
                <tbody>
                    <?php if(count($users) > 0): ?>
                    <?php $i=0;?>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php 
                        $count = $user->getSellerAuctionsCount();
                        $i++;
                        ?>
                            <tr data-entry-id="<?php echo e($user->id); ?>">
                               
                                <td style="text-align:center;"><?php echo e($i); ?></td>
                               

                                <td field-key='name'><?php echo e($user->username); ?>

                                    <?php if(getRoleData($user->role_id) == 'seller' && $count>0): ?>
                                    <span class="badge" data-toggle="tooltip" title="Auctions"><?php echo e($count); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td field-key='email'><?php echo e($user->email); ?></td>

                                <td field-key='image'> <img style="width:30px;" src="<?php echo e(getProfilePath($user->image)); ?>"  />  </td>
                                    
                                <td field-key='role'>
                                   <?php echo e($user->display_name); ?>

                                </td>

                                <td field-key='status'>
                                   <?php if($user->approved==1): ?>
                                   <a data-toggle="tooltip" title="Approved" href="<?php echo e(URL_USERS_STATUS); ?>/<?php echo e($user->slug); ?>/block" class="btn btn-danger btn-xs"><?php echo e(getPhrase('block')); ?></a>
                                   <?php elseif($user->approved==0): ?>
                                   <a data-toggle="tooltip" title="Disapproved" href="<?php echo e(URL_USERS_STATUS); ?>/<?php echo e($user->slug); ?>/unblock" class="btn btn-info btn-xs"><?php echo e(getPhrase('unblock')); ?></a>
                                   <?php endif; ?>
                                </td>

                              
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_view')): ?>
                                    <a href="<?php echo e(URL_USERS_VIEW); ?>/<?php echo e($user->slug); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_edit')): ?>
                                    <a href="<?php echo e(URL_USERS_EDIT); ?>/<?php echo e($user->slug); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="11"><?php echo app('translator')->getFromJson('global.app_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                 <?php endif; ?>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?> 
   
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_category_delete')): ?> 
        <?php echo $__env->make('common.deletescript', array('route'=>URL_FAQ_CATEGORIES_DELETE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>