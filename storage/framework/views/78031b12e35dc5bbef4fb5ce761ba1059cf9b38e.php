<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"> <?php echo e(getPhrase('testimonials')); ?> </h3>
    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_list'); ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_create')): ?>
                <a href="<?php echo e(URL_TETSIMONIALS_ADD); ?>" class="btn btn-success btn-add pull-right"><?php echo e(getPhrase('add_new')); ?></a>
            <?php endif; ?>

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                       <th style="text-align:center;">S.no.</th>

                        <th> <?php echo e(getPhrase('user')); ?> </th>
                        <th> <?php echo e(getPhrase('testimony')); ?> </th>
                        <th> <?php echo e(getPhrase('status')); ?> </th>
                       

                        <th>&nbsp;</th>

                    </tr>
                </thead>
                <?php if(count($records) > 0): ?>
                <tbody>
                    <?php if(count($records) > 0): ?>
                     <?php $i=0;?>
                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php $i++;?>
                         
                            <tr data-entry-id="<?php echo e($record->id); ?>">

                                <td style="text-align:center;"><?php echo e($i); ?></td>

                                <td><?php echo e($record->username); ?></td>

                                <td> <?php echo str_limit($record->testmony,20); ?> </td>

                                <td><?php echo e($record->status); ?></td>

                              

                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_view')): ?>
                                    <a href="<?php echo e(URL_TETSIMONIALS_VIEW); ?>/<?php echo e($record->id); ?>" class="btn btn-xs btn-primary"> <?php echo e(getPhrase('view')); ?> </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_edit')): ?>
                                    <a href="<?php echo e(URL_TETSIMONIALS_EDIT); ?>/<?php echo e($record->id); ?>" class="btn btn-xs btn-info"> <?php echo e(getPhrase('edit')); ?> </a>
                                    <?php endif; ?>

                                   
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('<?php echo e($record->id); ?>')"> <?php echo e(getPhrase('delete')); ?> </a>
                                   
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


        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_delete')): ?> 
        <?php echo $__env->make('common.deletescript', array('route'=>URL_TETSIMONIALS_DELETE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
<?php $__env->stopSection(); ?>        
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>