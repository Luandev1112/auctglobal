<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"> <?php echo e($title); ?> </h3>
    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(getPhrase('list')); ?>

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                       <th style="text-align:center;">S.no.</th>

                        <th> <?php echo e(getPhrase('title')); ?> </th>
                        <th> <?php echo e(getPhrase('status')); ?> </th>
                        
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                <?php if(count($content_pages) > 0): ?>
                <tbody>
                    <?php if(count($content_pages) > 0): ?>
                    <?php $i=0;?>
                        <?php $__currentLoopData = $content_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content_page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++;?>
                        
                            <tr data-entry-id="<?php echo e($content_page->id); ?>">

                               <td style="text-align:center;"><?php echo e($i); ?></td>

                                <td field-key='title'><?php echo e($content_page->title); ?></td>

                                <td field-key='status'> <?php echo e($content_page->status); ?> </td>


                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_view')): ?>
                                    <a href="<?php echo e(URL_PAGES_VIEW); ?>/<?php echo e($content_page->slug); ?>" class="btn btn-xs btn-primary"> <?php echo e(getPhrase('view')); ?> </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_edit')): ?>
                                    <a href="<?php echo e(URL_PAGES_EDIT); ?>/<?php echo e($content_page->slug); ?>" class="btn btn-xs btn-info"> <?php echo e(getPhrase('edit')); ?> </a>
                                    <?php endif; ?>

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
        <?php echo $__env->make('common.deletescript', array('route'=>URL_PAGES_DELETE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
<?php $__env->stopSection(); ?>        
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>