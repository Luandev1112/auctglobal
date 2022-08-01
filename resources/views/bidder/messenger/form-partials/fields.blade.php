
                	



                	       <div class="form-group">
                                {!! Form::label('receiver', 'Recipient', ['class' => 'control-label']) !!}

                                <span class="text-red">*</span>

                                @if(isset($users))

                                    {{-- {!! Form::select('receiver', $users, old('receiver'), ['class' => 'form-control select2']) !!} --}}

                                     {{Form::select('receiver', $users,  old('receiver') , ['placeholder' => getPhrase('select_user'),'class'=>'form-control select2',

                                        'ng-model'=>'receiver',

                                        'required'=> 'true',

                                        'ng-class'=>'{"has-error": formValidate.receiver.$touched && formValidate.receiver.$invalid}'

                                    ])}}

                                    <div class="validation-error" ng-messages="formValidate.receiver.$error" >

                                        {!! getValidationMessage()!!}

                                    </div>


                                @elseif(isset($user))
                                    {!! Form::text('receiver', old('receiver', $user ? $user : ''), ['class' => 'form-control', 'disabled']) !!}
                                @endif

                            </div>




                   <div class="form-group">
                            {!! Form::label('subject', 'Subject', ['class' => 'control-label']) !!}

                            <span class="text-red">*</span>

                            @if(isset($users))

                            


                                {{ Form::text('subject', old('subject'), $attributes = 

                                array('class' => 'form-control', 

                                'placeholder' => 'Subject',

                                'ng-model' => 'subject', 

                                'required' => 'true',

                                'ng-minlength' => '2',

                                'ng-maxlength' => '200',

                                'ng-class'=>'{"has-error": formValidate.subject.$touched && formValidate.subject.$invalid}',

                                )) }}

                                <div class="validation-error" ng-messages="formValidate.subject.$error" >

                                        {!! getValidationMessage()!!}

                                        {!! getValidationMessage('minlength')!!}

                                        {!! getValidationMessage('maxlength')!!}

                                </div>

                            @else
                                {!! Form::text('subject', old('subject', isset($topic) ? $topic->subject : ''), ['class' => 'form-control', 'disabled']) !!}
                            @endif
                           
                        </div>






                   <div class="form-group">

                        {!! Form::label('content', 'Message', ['class' => 'control-label']) !!}
                        <span class="text-red">*</span>


                        {{-- {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}

                         {{ Form::textarea('content', old('content'), $attributes = 

                            array('class' => 'form-control', 

                            'rows' => '5',

                            'placeholder' => 'Message',

                            'ng-model' => 'content',

                            'required'=>'true', 

                            'ng-class'=>'{"has-error": formValidate.content.$touched && formValidate.content.$invalid}',

                            )) }}

                         <div class="validation-error" ng-messages="formValidate.content.$error" >
         
                                {!! getValidationMessage()!!}

                         </div>
                        
                    </div>





                
                    <div class="form-group d-flex justify-content-center">

                         <button class="btn btn-primary login-bttn" ng-disabled='!formValidate.$valid'>{{ getPhrase('send') }}</button>

                    </div>



            