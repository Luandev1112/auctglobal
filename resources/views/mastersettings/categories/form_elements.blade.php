 				

 			<div class="row">

				    <fieldset class="form-group col-md-12">
						{{ Form::label('category', getPhrase('category')) }}
						<span class="text-red">*</span>
						{{ Form::text('category', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Category Name',
							'ng-model'=>'category', 
							'ng-pattern' => getRegexPattern('name'),
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formCategories.category.$touched && formCategories.category.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '40',
						)) }}
						<div class="validation-error" ng-messages="formCategories.category.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>


					<fieldset class="form-group col-md-12">
						{{ Form::label('status', getPhrase('status')) }}

						<span class="text-red">*</span>


						
						{{ Form::select('status', activeinactive() , null, ['class'=>'form-control select2','placeholder'=>'select',
						    
						    'ng-model'=>'status', 

							'required'=> 'true', 

							'ng-class'=>'{"has-error": formCategories.status.$touched && formCategories.status.$invalid}',

							 ])}}

						<div class="validation-error" ng-messages="formCategories.status.$error" >

	    					{!! getValidationMessage()!!}

	    				</div>
	    				
					</fieldset>
					

					</div>
					 
  
				 
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formCategories.$valid'>{{ $button_name }}</button>
						</div>
		 