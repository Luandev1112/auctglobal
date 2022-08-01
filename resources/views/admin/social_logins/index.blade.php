@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.social-logins.title')</h3>
    @can('social_login_create')
    <p>
        <a href="{{ route('admin.social_logins.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
        
        @if(!is_null(Auth::getUser()->role_id) && config('global.can_see_all_records_role_id') == Auth::getUser()->role_id)
            @if(Session::get('SocialLogin.filter', 'all') == 'my')
                <a href="?filter=all" class="btn btn-default">Show all records</a>
            @else
                <a href="?filter=my" class="btn btn-default">Filter my records</a>
            @endif
        @endif
    </p>
    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.social_logins.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('global.app_all')</a></li> |
            <li><a href="{{ route('admin.social_logins.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('global.app_trash')</a></li>
        </ul>
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('social_login_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('social_login_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('global.social-logins.fields.facebook-client-id')</th>
                        <th>@lang('global.social-logins.fields.facebook-client-secret')</th>
                        <th>@lang('global.social-logins.fields.facebook-redirect-url')</th>
                        <th>@lang('global.social-logins.fields.facebook-login-enable')</th>
                        <th>@lang('global.social-logins.fields.google-client-id')</th>
                        <th>@lang('global.social-logins.fields.google-client-secret')</th>
                        <th>@lang('global.social-logins.fields.google-redirect-url')</th>
                        <th>@lang('global.social-logins.fields.google-login-enable')</th>
                        <th>@lang('global.social-logins.fields.created-by')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('social_login_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.social_logins.mass_destroy') }}'; @endif
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.social_logins.index') !!}?show_deleted={{ request('show_deleted') }}';
            window.dtDefaultOptions.columns = [@can('social_login_delete')
                @if ( request('show_deleted') != 1 )
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endif
                @endcan{data: 'facebook_client_id', name: 'facebook_client_id'},
                {data: 'facebook_client_secret', name: 'facebook_client_secret'},
                {data: 'facebook_redirect_url', name: 'facebook_redirect_url'},
                {data: 'facebook_login_enable', name: 'facebook_login_enable'},
                {data: 'google_client_id', name: 'google_client_id'},
                {data: 'google_client_secret', name: 'google_client_secret'},
                {data: 'google_redirect_url', name: 'google_redirect_url'},
                {data: 'google_login_enable', name: 'google_login_enable'},
                {data: 'created_by.name', name: 'created_by.name'},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection