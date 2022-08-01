@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.social-logins.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.social-logins.fields.facebook-client-id')</th>
                            <td field-key='facebook_client_id'>{{ $social_login->facebook_client_id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.social-logins.fields.facebook-client-secret')</th>
                            <td field-key='facebook_client_secret'>{{ $social_login->facebook_client_secret }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.social-logins.fields.facebook-redirect-url')</th>
                            <td field-key='facebook_redirect_url'>{{ $social_login->facebook_redirect_url }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.social-logins.fields.facebook-login-enable')</th>
                            <td field-key='facebook_login_enable'>{{ $social_login->facebook_login_enable }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.social-logins.fields.google-client-id')</th>
                            <td field-key='google_client_id'>{{ $social_login->google_client_id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.social-logins.fields.google-client-secret')</th>
                            <td field-key='google_client_secret'>{{ $social_login->google_client_secret }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.social-logins.fields.google-redirect-url')</th>
                            <td field-key='google_redirect_url'>{{ $social_login->google_redirect_url }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.social-logins.fields.google-login-enable')</th>
                            <td field-key='google_login_enable'>{{ $social_login->google_login_enable }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.social-logins.fields.created-by')</th>
                            <td field-key='created_by'>{{ $social_login->created_by->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.social_logins.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
