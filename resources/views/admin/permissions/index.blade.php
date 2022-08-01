@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.permissions.title')</h3>
    @can('permission_create')
    <p>
        <a href="{{ URL_PERMISSIONS_ADD }}" class="btn btn-success">@lang('global.app_add_new')</a>
        <a href="#" class="btn btn-warning" style="margin-left:5px;" data-toggle="modal" data-target="#myModal">@lang('global.app_csvImport')</a>
        @include('csvImport.modal', ['model' => 'Permission'])
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($permissions) > 0 ? 'datatable' : '' }} @can('permission_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('permission_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('global.permissions.fields.title')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                    
                @if (count($permissions) > 0)
                <tbody>
                   @if (count($permissions) > 0)
                        @foreach ($permissions as $permission)
                            <tr data-entry-id="{{ $permission->id }}">
                                @can('permission_delete')
                                    <td></td>
                                @endcan

                                <td field-key='title'>{{ $permission->title }}</td>
                                                                <td>
                                    @can('permission_view')
                                    <a href="{{URL_PERMISSIONS_VIEW}}/{{$permission->id}}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('permission_edit')
                                    <a href="{{URL_PERMISSIONS_EDIT}}/{{$permission->id}}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('permission_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['permissions.destroy', $permission->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                     @endif
                </tbody>
                 @endif
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('permission_delete')
            window.route_mass_crud_entries_destroy = '{{ route('permissions.mass_destroy') }}';
        @endcan

    </script>
@endsection