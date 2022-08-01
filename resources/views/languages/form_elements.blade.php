 					
		<div class="col-xs-6"> 	

				<div class="form-group">
                    {!! Form::label('language', getPhrase('language'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    {{ Form::text('language', old('language'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Language',

                    'ng-model' => 'shortcode', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

					'ng-minlength' => '4',

					'ng-maxlength' => '40',

					'ng-class'=>'{"has-error": formValidate.language.$touched && formValidate.language.$invalid}',



                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.language.$error" >

	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}

					</div>

                </div>






                <div class="form-group">
                    {!! Form::label('code', getPhrase('code'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    {{ Form::text('code', old('code'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Language Code',

                    'ng-model' => 'code', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

					'ng-minlength' => '2',

					'ng-maxlength' => '4',

					'ng-class'=>'{"has-error": formValidate.code.$touched && formValidate.code.$invalid}',



                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.code.$error" >

	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}

					</div>


					<a class="pull-right btn btn-success" style="margin-top:10px;" href="{{GOOGLE_TRANSLATE_LANGUAGES_LINK}}" target="_blank">
						{{getPhrase('supported_language_codes')}}
						</a>

                </div>



                <br>
                
                <div class="form-group">


                    {!! Form::label('is_rtl', getPhrase('is_rtl'), ['class' => 'control-label']) !!}

                   	<div class="form-group row">
						<div class="col-md-6">
						{{ Form::radio('is_rtl', 0, true, array('id'=>'free', 'name'=>'is_rtl')) }}
							
							<label for="free"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('No')}}</label> 
						</div>
						<div class="col-md-6">
						{{ Form::radio('is_rtl', 1, false, array('id'=>'paid', 'name'=>'is_rtl')) }}
							<label for="paid"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('Yes')}} 
							</label>
						</div>
					</div>


                </div>


                <div class="buttons pull-right">
					<button class="btn btn-success" 
					ng-disabled='!formValidate.$valid'>{{ getPhrase('save') }}</button>
				</div>


            </div>

