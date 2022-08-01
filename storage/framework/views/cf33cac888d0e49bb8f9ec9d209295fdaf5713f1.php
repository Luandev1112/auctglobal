<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"> <?php echo e(getPhrase('templates')); ?> </h3>
    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_list'); ?>
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        <th style="text-align:center;">S.no.</th>
                        <th> <?php echo e(getPhrase('title')); ?> </th>
                        <th> <?php echo e(getPhrase('subject')); ?> </th>
                        <th> <?php echo e(getPhrase('type')); ?> </th>
                        
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                <?php if(count($templates) > 0): ?>
                <tbody>
                    <?php if(count($templates) > 0): ?>
                     <?php $i=0;?>
                        <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php $i++;?>
                         
                            <tr data-entry-id="<?php echo e($template->id); ?>">

                                <td style="text-align:center;"><?php echo e($i); ?></td>

                                <td field-key='title'><?php echo e($template->title); ?></td>

                                <td field-key='subject'><?php echo e($template->subject); ?></td>

                                <td field-key='type'><?php echo e($template->type); ?></td>

                               

                                <td>
                                   
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('template_edit')): ?>
                                    <a href="<?php echo e(URL_EMAIL_TEMPLATES_EDIT); ?>/<?php echo e($template->slug); ?>" class="btn btn-xs btn-info"> <?php echo e(getPhrase('edit')); ?> </a>
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


        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_delete')): ?> 
        <?php echo $__env->make('common.deletescript', array('route'=>URL_EMAIL_TEMPLATES_DELETE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
<?php $__env->stopSection(); ?>        
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>