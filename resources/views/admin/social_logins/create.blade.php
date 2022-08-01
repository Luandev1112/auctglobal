@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.social-logins.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.social_logins.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('facebook_client_id', trans('global.social-logins.fields.facebook-client-id').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('facebook_client_id', old('facebook_client_id'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('facebook_client_id'))
                        <p class="help-block">
                            {{ $errors->first('facebook_client_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('facebook_client_secret', trans('global.social-logins.fields.facebook-client-secret').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('facebook_client_secret', old('facebook_client_secret'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('facebook_client_secret'))
                        <p class="help-block">
                            {{ $errors->first('facebook_client_secret') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('facebook_redirect_url', trans('global.social-logins.fields.facebook-redirect-url').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('facebook_redirect_url', old('facebook_redirect_url'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('facebook_redirect_url'))
                        <p class="help-block">
                            {{ $errors->first('facebook_redirect_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('facebook_login_enable', trans('global.social-logins.fields.facebook-login-enable').'*', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('facebook_login_enable'))
                        <p class="help-block">
                            {{ $errors->first('facebook_login_enable') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('facebook_login_enable', 'Yes', false, ['required' => '']) !!}
                            Yes
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('facebook_login_enable', 'No', false, ['required' => '']) !!}
                            No
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('google_client_id', trans('global.social-logins.fields.google-client-id').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('google_client_id', old('google_client_id'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('google_client_id'))
                        <p class="help-block">
                            {{ $errors->first('google_client_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('google_client_secret', trans('global.social-logins.fields.google-client-secret').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('google_client_secret', old('google_client_secret'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('google_client_secret'))
                        <p class="help-block">
                            {{ $errors->first('google_client_secret') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('google_redirect_url', trans('global.social-logins.fields.google-redirect-url').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('google_redirect_url', old('google_redirect_url'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('google_redirect_url'))
                        <p class="help-block">
                            {{ $errors->first('google_redirect_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('google_login_enable', trans('global.social-logins.fields.google-login-enable').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('google_login_enable'))
                        <p class="help-block">
                            {{ $errors->first('google_login_enable') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('google_login_enable', 'Yes', false, []) !!}
                            Yes
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('google_login_enable', 'No', false, []) !!}
                            No
                        </label>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

