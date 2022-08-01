<?php $tool_tip = '';
				if(isset($value->tool_tip))
					$tool_tip = $value->tool_tip;

				?>
<div class="col-md-6">
						   <fieldset class="form-group">
						   <?php echo e(Form::label($key, getPhrase($key))); ?>

						  
						   <input 
					 		type="<?php echo e($value->type); ?>" 
					 		class="form-control" 
					 		name="<?php echo e($key); ?>[value]" 
					 		required="true" 
					 		value = "<?php echo e($value->value); ?>" 
							data-toggle="tooltip"
							title ="<?php echo e($tool_tip); ?>"
							data-placement="bottom"
					 		>

					 		<input
					 		type="hidden"
					 		name="<?php echo e($key); ?>[type]"
							value = "<?php echo e($value->type); ?>" >
				
							<input
					 		type="hidden"
					 		name="<?php echo e($key); ?>[tool_tip]"
							value = "<?php echo e($tool_tip); ?>" >

							</fieldset>
							</div>