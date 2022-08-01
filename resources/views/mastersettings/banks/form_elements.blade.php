 				

 			<div class="row">

				    <fieldset class="form-group col-md-12">
						{{ Form::label('name', getphrase('name')) }}
						<span class="text-red">*</span>
						{{ Form::text('name', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Bank Name',
							'ng-model'=>'name', 
							'ng-pattern' => getRegexPattern('name'),
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formBanks.name.$touched && formBanks.name.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '40',
						)) }}
						<div class="validation-error" ng-messages="formBanks.name.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>



					<fieldset class="form-group col-md-12">

						{{ Form::label('logo', getphrase('logo')) }}

						<div class="form-group row">

							<div class="col-md-6">


							{!! Form::file('logo', array('id'=>'image_input', 'accept'=>'.png,.jpg,.jpeg')) !!}


							</div>

							<?php if(isset($record) && $record) { 

								  if($record->logo!='') {

								?>

							<div class="col-md-6">

								<img src="{{ getBankLogosPath($record->logo) }}" />



							</div>

							<?php } } ?>

						</div>

					</fieldset>


					</div>
					 
  
				 
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formBanks.$valid'>{{ $button_name }}</button>
						</div>
		 