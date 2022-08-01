<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo e($title); ?></h3>

   


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(getPhrase('list')); ?>


          
            <a href="<?php echo e(URL_LANGUAGES_ADD); ?>" class="btn btn-success btn-add pull-right"><?php echo e(getPhrase('add_new')); ?></a>
           

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        <th style="text-align:center;">S.no.</th>
                        <th> <?php echo e(getPhrase('language')); ?> </th>
                        <th> <?php echo e(getPhrase('code')); ?> </th>
                        <th> <?php echo e(getPhrase('is_rtl')); ?> </th>
                        <th> <?php echo e(getPhrase('default_language')); ?> </th>
                        <th>&nbsp;</th>
                       
                    </tr>
                </thead>
                 <?php if(count($records) > 0): ?>
                <tbody>
                   <?php $i=1;?>
                   <?php if(count($records) > 0): ?>
                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($record->id); ?>">

                                <td style="text-align:center;"><?php echo e($i++); ?></td>

                                <td field-key='shortcode'><?php echo e($record->language); ?></td>
                                <td field-key='title'><?php echo e(strtoupper($record->code)); ?></td>

                                <td field-key='title'>

                                    <?php if($record->is_rtl): ?>
                                    <i class="fa fa-check text-success" title="<?php echo e(getPhrase('enable')); ?>"></i>
                                    <?php else: ?>
                                    <i class="fa fa-close text-danger" title="<?php echo e(getPhrase('disable')); ?>"></i>
                                    <?php endif; ?>

                                </td>
                                <td field-key='title'>

                                    <?php if($record->is_default): ?>
                                    <i class="fa fa-check text-success" title="<?php echo e(getPhrase('enable')); ?>"></i>
                                    <?php else: ?>
                                    <a href="<?php echo e(URL_LANGUAGES_MAKE_DEFAULT); ?><?php echo e($record->slug); ?>" class="btn btn-info btn-xs"><?php echo e(getPhrase('set_default')); ?></a>
                                    <?php endif; ?>

                                </td>


                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.countries.restore', $country->id])); ?>

                                    <?php echo Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.countries.perma_del', $record->id])); ?>

                                    <?php echo Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country_view')): ?>
                                    <a href="<?php echo e(URL_LANGUAGES_UPDATE_STRINGS); ?><?php echo e($record->slug); ?>" class="btn btn-xs btn-primary"> <?php echo e(getPhrase('update_strings')); ?> </a>
                                    <?php endif; ?>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country_edit')): ?>
                                    <a href="<?php echo e(URL_LANGUAGES_EDIT); ?>/<?php echo e($record->slug); ?>" class="btn btn-xs btn-info"> <?php echo e(getPhrase('edit')); ?> </a>
                                    <?php endif; ?>


                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country_delete')): ?>
                                    <?php if($record->slug!='english-1'): ?>
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('<?php echo e($record->id); ?>')"> <?php echo e(getPhrase('delete')); ?> </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7">  <?php echo e(getPhrase('no_entries_in_table')); ?> </td>
                        </tr>
                    <?php endif; ?>

                </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?> 
   
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country_delete')): ?> 
        <?php echo $__env->make('common.deletescript', array('route'=>URL_LANGUAGES_DELETE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>