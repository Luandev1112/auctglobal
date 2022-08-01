				
			<div class="col-xs-6"> 	

				<div class="form-group">
                    {!! Form::label('title', getPhrase('title'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>
                    <?php 
                    $readonly='';
                    if (!empty($record)) 
                        $readonly = 'readonly';
                    ?>


                    {{ Form::text('title', old('title'), $attributes = 

                    array('class' => 'form-control', 

                    'placeholder' => 'Title',

                    'ng-model' => 'title', 

                    'required' => 'true',

                    'ng-pattern' => getRegexPattern("name"),

					'ng-minlength' => '2',

					'ng-maxlength' => '50',

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

                    {!! Form::label('description', getPhrase('description'), ['class' => 'control-label']) !!}

                     <span class="text-red">*</span>
                   
                    {{ Form::textarea('page_text', old('page_text'), $attributes = 

                    array('class' => 'form-control ckeditor', 

                    'placeholder' => 'Description',

                    'ng-model' => 'page_text',

                    'required' => 'true',

                    'ng-class'=>'{"has-error": formValidate.page_text.$touched && formValidate.page_text.$invalid}',

                    )) }}


                    
                    <div class="validation-error" ng-messages="formValidate.page_text.$error" >

	    				{!! getValidationMessage()!!}

					</div>

                </div>


                <div class="form-group">

                    {!! Form::label('status', getPhrase('status'), ['class' => 'control-label']) !!}

                    <span class="text-red">*</span>

                    <?php
                        $val=old('status');
                        if ($record)
                         $val = $record->status;

                        $selected = null;
                        if($record)
                        $selected = $record->status;      
                    ?>

                    

                    {{Form::select('status', activeinactive() , $selected, ['placeholder' => getPhrase('select'),'class'=>'form-control select2',

                            'ng-model'=>'status',

                            'required'=> 'true',

                            'ng-init'=>'status="'.$val.'"',

                            'ng-class'=>'{"has-error": formValidate.status.$touched && formValidate.status.$invalid}'

                         ])}}


                    
                        <div class="validation-error" ng-messages="formValidate.status.$error" >

                            {!! getValidationMessage()!!}

                        </div>

                </div>




               <div class="form-groupp pull-right">

					<button class="btn btn-success" ng-disabled='!formValidate.$valid'>{{ getPhrase('save') }}</button>

				</div>

			</div>



                