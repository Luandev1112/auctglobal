				
			<div class="col-xs-6"> 	

				<div class="form-group">
                    {!! Form::label('title', getPhrase('title'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php 
                    $readonly='';
                    if (isset($record->title))
                    $readonly = 'readonly="true"';
                        ?>

                    {{ Form::text('title', old('title'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Title',

                    'ng-model' => 'title', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

					'ng-minlength' => '2',

					'ng-maxlength' => '100',

                    $readonly,

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

                    {!! Form::label('type', getPhrase('type'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php
                        $val=old('type');
                        if ($record)
                         $val = $record->type;

                        $selected = null;
                        if($record)
                        $selected = $record->type;      
                    ?>

                    

                    {{Form::select('type', templatetypes(), $selected, ['placeholder' => getPhrase('select'),'class'=>'form-control select2',

                            'ng-model'=>'type',

                            'required'=> 'true',

                            'ng-init'=>'type="'.$val.'"', 

                            'ng-class'=>'{"has-error": formValidate.type.$touched && formValidate.type.$invalid}'

                         ])}}


                    
                        <div class="validation-error" ng-messages="formValidate.type.$error" >

                            {!! getValidationMessage()!!}

                        </div>

                </div>


                <div class="form-group">
                    {!! Form::label('subject', getPhrase('subject'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    {{ Form::text('subject', old('subject'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Subject',

                    'ng-model' => 'subject', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

                    'ng-minlength' => '2',

                    'ng-maxlength' => '100',

                    'ng-class'=>'{"has-error": formValidate.subject.$touched && formValidate.subject.$invalid}',



                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.subject.$error" >

                            {!! getValidationMessage()!!}

                            {!! getValidationMessage('minlength')!!}

                            {!! getValidationMessage('maxlength')!!}

                            {!! getValidationMessage('pattern')!!}

                    </div>

                </div>



                <div class="form-group">

                    {!! Form::label('content', getPhrase('content'), ['class' => 'control-label']) !!}

                     <span class="text-red">*</span>
                   
                    {{ Form::textarea('content', old('content'), $attributes = 

                    array('class' => 'form-control ckeditor', 

                    'placeholder' => 'Content',

                    'ng-model' => 'content',

                    'required' => 'true',

                    'ng-class'=>'{"has-error": formValidate.content.$touched && formValidate.content.$invalid}',

                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.content.$error" >

	    				{!! getValidationMessage()!!}

					</div>

                </div>




               <div class="form-group pull-right">

					<button class="btn btn-success" ng-disabled='!formValidate.$valid'>{{ getPhrase('save') }}</button>

				</div>

			</div>



                