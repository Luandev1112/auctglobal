 				

 			<div class="row">

				    <fieldset class="form-group col-md-12">
						{{ Form::label('property_type', getPhrase('property_type')) }}
						<span class="text-red">*</span>
						{{ Form::text('property_type', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Property type',
							'ng-model'=>'property_type', 
							'ng-pattern' => getRegexPattern('name'),
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formCategories.property_type.$touched && formCategories.property_type.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '40',
						)) }}
						<div class="validation-error" ng-messages="formCategories.property_type.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>


					</div>
					 
  
				 
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formCategories.$valid'>{{ $button_name }}</button>
						</div>
		 