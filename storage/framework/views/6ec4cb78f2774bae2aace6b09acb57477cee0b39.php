<div class="col-md-6">
							<div class="col-md-6">

						   <fieldset class="form-group">
						   <?php echo e(Form::label($key, getPhrase($key))); ?>

						  
						   <input 
					 		type="<?php echo e($value->type); ?>" 
					 		class="form-control" 
					 		name="<?php echo e($key); ?>[value]" 
					 		required="true" 
					 		value = "<?php echo e($value->value); ?>" >
					 		<input
					 		type="hidden"
					 		name="<?php echo e($key); ?>[type]"
							value = "<?php echo e($value->type); ?>" 
							title="<?php echo e($value->tool_tip); ?>"
							data-toggle="tooltip"
							
							data-placement="bottom"
							>
							<input type="hidden" name="<?php echo e($key); ?>[tool_tip]" value = "<?php echo e($value->tool_tip); ?>" >

							</fieldset>
							
							
							
							</div>
							<div class="col-md-6">
							 <?php echo e(Form::label('', '')); ?>

							<img src="<?php echo e(IMAGE_PATH_SETTINGS.$value->value); ?>" height="80" width="100">
							<br><br><br>
							</div>

							</div>
