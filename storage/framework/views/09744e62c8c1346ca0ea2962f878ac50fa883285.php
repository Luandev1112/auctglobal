<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>checkbox.css" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo e(getPhrase('settings')); ?></h3>

     <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(isset($title) ? $title : ''); ?>

        </div>

       
        
        	
            <div class="panel-body packages">
                    <div class="row">
                        <?php if($record->image): ?>
                        <img src="<?php echo e(IMAGE_PATH_SETTINGS.$record->image); ?>" width="100" height="100">
                        <?php endif; ?>

                    </div>
                    
                    <?php echo Form::open(array('url' => URL_SETTINGS_ADD_SUBSETTINGS.$record->slug, 'method' => 'PATCH', 
                        'novalidate'=>'','name'=>'formSettings ', 'files'=>'true')); ?>

                        <div class="row"> 
                        <ul class="list-group">
                        <?php if(count($settings_data)): ?>

                        <?php $__currentLoopData = $settings_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php 
                            $type_name = 'text';

                            if($value->type == 'number' || $value->type == 'email' || $value->type=='password')
                                $type_name = 'text';
                            else
                                $type_name = $value->type;
                        ?>
                         
                        <?php echo $__env->make(
                                    'mastersettings.settings.sub-list-views.'.$type_name.'-type', 
                                    array('key'=>$key, 'value'=>$value)
                                , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          <?php else: ?>
                              <li class="list-group-item"><?php echo e(getPhrase('no_settings_available')); ?></li>
                          <?php endif; ?>
                        </ul>

                        </div>


                        
                        <?php if(count($settings_data)): ?>
                        <br>
                        <div class="form-group pull-right">
                            <button class="btn btn-success" ng-disabled='!formTopics.$valid'
                            ><?php echo e(getPhrase('update')); ?></button>
                        </div>
                        <?php endif; ?>
                        
                        


                            <?php echo Form::close(); ?>

                    </div>



    	
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>

<script src="<?php echo e(JS); ?>bootstrap-toggle.min.js"></script>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>