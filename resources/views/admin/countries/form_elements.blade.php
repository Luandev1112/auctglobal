				
			<div class="col-xs-6"> 	

				
                <div class="form-group">
                    {!! Form::label('title', getPhrase('title'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    {{ Form::text('title', old('title'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Country Name',

                    'ng-model' => 'title', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

                    'ng-minlength' => '2',

                    'ng-maxlength' => '100',

                    'ng-class'=>'{"has-error": formValidate.title.$touched && formValidate.title.$invalid}',



                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.title.$error" >

                            {!! getValidationMessage()!!}

                            {!! getValidationMessage('minlength')!!}

                            {!! getValidationMessage('maxlength')!!}

                            {!! getValidationMessage('pattern')!!}

                    </div>

                </div>


                <div class="form-group">
                    {!! Form::label('shortcode', getPhrase('shortcode'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    {{ Form::text('shortcode', old('category'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Shortcode',

                    'ng-model' => 'shortcode', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

                    'ng-minlength' => '2',

                    'ng-maxlength' => '5',

                    'ng-class'=>'{"has-error": formValidate.shortcode.$touched && formValidate.shortcode.$invalid}',



                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.shortcode.$error" >

                            {!! getValidationMessage()!!}

                            {!! getValidationMessage('minlength')!!}

                            {!! getValidationMessage('maxlength')!!}

                            {!! getValidationMessage('pattern')!!}

                    </div>

                </div>


               <div class="form-group pull-right">

					<button class="btn btn-success" ng-disabled='!formValidate.$valid'>{{ getPhrase('save') }}</button>

				</div>

			</div>



                