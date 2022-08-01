<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"> <?php echo e(getPhrase('settings')); ?> </h3>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_list'); ?>
        </div>

        <div class="panel-body table-responsive">
           

           <table class="table table-bordered table-striped <?php echo e(count($records) > 0 ? 'datatable' : ''); ?> ">

                <thead>
                    <tr>
                        <th style="text-align:center;">S.no.</th>

                        <th> <?php echo e(getPhrase('module')); ?> </th>
                        <th> <?php echo e(getPhrase('key')); ?> </th>
                        <th> <?php echo e(getPhrase('description')); ?> </th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <?php if(count($records) > 0): ?>
                 <tbody>
                    <?php $i=0;?>
                    <?php if(count($records) > 0): ?>
                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++;?>
                            <tr data-entry-id="<?php echo e($record->id); ?>">
                               
                                <td style="text-align:center;"><?php echo e($i); ?></td>

                                <td field-key='title'> <a href="<?php echo e(URL_SETTINGS_VIEW); ?><?php echo e($record->slug); ?>"> <?php echo e(ucwords($record->title)); ?> </a></td>
                                <td field-key='key'><?php echo e($record->key); ?></td>
                                <td field-key='description'><?php echo e($record->description); ?></td>


                               
                                <td>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_edit')): ?>
                                    <a href="<?php echo e(URL_SETTINGS_EDIT); ?><?php echo e($record->slug); ?>" class="btn btn-xs btn-info"><?php echo e(getPhrase('edit')); ?></a>
                                    <?php endif; ?>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_view')): ?>
                                     <a href="<?php echo e(URL_SETTINGS_VIEW); ?><?php echo e($record->slug); ?> " class="btn btn-xs btn-primary"> <?php echo e(getPhrase('view')); ?> </a>
                                    <?php endif; ?>
                                   
                                    
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?> 



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>