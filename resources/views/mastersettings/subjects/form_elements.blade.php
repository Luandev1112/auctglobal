 				
<?php 
		$parent_subjects = App\Subject::where('parent_id','=',0)
										->get()
										->pluck('subject_title','id')
										->toArray();
		$parent_subjects[0]  = 'Parent';
?>
 <div class="row">

 					 <fieldset class="form-group col-md-12">
						{{ Form::label('parent_id', 'Is Parent') }}

						<span class="text-red">*</span>
						
						{{ Form::select('parent_id', $parent_subjects, null, ['class'=>'form-control select2','placeholder'=>'select',
						    
						    'ng-model'=>'parent_id', 

							'required'=> 'true', 

							'ng-class'=>'{"has-error": formCategories.parent_id.$touched && formCategories.parent_id.$invalid}',

							 ])}}

						<div class="validation-error" ng-messages="formCategories.parent_id.$error" >

	    					{!! getValidationMessage()!!}

	    				</div>
					</fieldset>
				 
				    <fieldset class="form-group col-md-12">
						{{ Form::label('subject_title', getphrase('category_name')) }}
						<span class="text-red">*</span>
						{{ Form::text('subject_title', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Maths',
							'ng-model'=>'subject_title', 
							'ng-pattern' => getRegexPattern('name'),
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formSubjects.subject_title.$touched && formSubjects.subject_title.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '40',
						)) }}
						<div class="validation-error" ng-messages="formSubjects.subject_title.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>

				<fieldset class="form-group col-md-12">
						
						{{ Form::label('subject_code', getphrase('category_code')) }}
						<span class="text-red">*</span>
						{{ Form::text('subject_code', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'M1',
							'ng-model'=>'subject_code', 
							'ng-pattern' => getRegexPattern('name'),
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formSubjects.subject_code.$touched && formSubjects.subject_code.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '10',
						)) }}
						<div class="validation-error" ng-messages="formSubjects.subject_code.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>
                    
                    <fieldset class="form-group col-md-12" ng-if = "parent_id!=0">
						
						{{ Form::label('percentage', getphrase('percentage(%)')) }}
						<span class="text-red">*</span>
						{{ Form::number('percentage', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => getPhrase('ex:_12'),
							'ng-model'=>'percentage', 
							
							 'min'=>1,
							'required'=> 'true', 
							'ng-class'=>'{"has-error":formSubjects.percentage.$touched && formSubjects.percentage.$invalid}',
							 
							)) }}
							<div class="validation-error" ng-messages="formSubjects.percentage.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('number')!!}

						</div>
					</fieldset>


					 <fieldset class="form-group col-md-6"  ng-if = "parent_id==0" >
				   {{ Form::label('category', getphrase('image')) }}
				         <input type="file" class="form-control" name="catimage" 
				         accept=".png,.jpg,.jpeg" id="image_input">
				          
				          
				    </fieldset>

				   

				     <fieldset class="form-group col-md-6" ng-if = "parent_id==0" >
					@if($record)	
				   		@if($record->image)
				         <?php $examSettings = getExamSettings(); ?>
				         <img src="{{ PREFIX.$examSettings->subjetcsImagepath.$record->image }}" height="100" width="100" >

				         @endif
				     @endif
					

				    </fieldset>




					</div>
					 
  
				 
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formSubjects.$valid'>{{ $button_name }}</button>
						</div>
		 