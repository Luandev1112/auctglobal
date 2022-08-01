@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.templates.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.templates.fields.key')</th>
                            <td field-key='key'>{{ $template->key }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.templates.fields.type')</th>
                            <td field-key='type'>{{ $template->type }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.templates.fields.subject')</th>
                            <td field-key='subject'>{{ $template->subject }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.templates.fields.from-email')</th>
                            <td field-key='from_email'>{{ $template->from_email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.templates.fields.from-name')</th>
                            <td field-key='from_name'>{{ $template->from_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.templates.fields.content')</th>
                            <td field-key='content'>{!! $template->content !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.templates.fields.created-by')</th>
                            <td field-key='created_by'>{{ $template->created_by->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.templates.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
