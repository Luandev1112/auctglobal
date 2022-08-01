<?php $__env->startSection('header_scripts'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<h3 class="page-title"><?php echo e(getPhrase('languages')); ?></h3>

 <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e(isset($title) ? $title : ''); ?>

        </div>


        
        	<div class="row">

<div class="col-xs-12">

<?php $language_data = json_decode($record->phrases);?>	
        		<div class="panel panel-custom">
					
					<div class="panel-body packages">
					<?php echo Form::open(array('url' => URL_LANGUAGES_UPDATE_STRINGS.$record->slug, 'method' => 'PATCH', 
						'novalidate'=>'','name'=>'formSettings ', 'files'=>'true')); ?>

						<div class="table-responsive"> 
						<ul class="list-group">
						<?php if(count($language_data)): ?>
						<?php $__currentLoopData = $language_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						 
					 <div class="col-md-6">
						<fieldset class="form-group">
						   <?php echo e(Form::label($key, $key)); ?>

						  
						   <input type="text" class="form-control" name="<?php echo e($key); ?>" 
					 		required="true" value = "<?php echo e($value); ?>" >
					 		 

							</fieldset>
							</div>

						  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						  <?php else: ?>
							  <li class="list-group-item"><?php echo e(getPhrase('no_settings_available')); ?></li>
						  <?php endif; ?>
						</ul>

						</div>

						<?php if(count($language_data)): ?>
						<div class="buttons pull-right">
							<button class="btn btn-success" ng-disabled='!formTopics.$valid'
							><?php echo e(getPhrase('update')); ?></button>
						</div>
						<?php endif; ?>
							<?php echo Form::close(); ?>

					</div>
				</div>
			</div>

        	</div>

<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('footer_scripts'); ?>
  


<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>