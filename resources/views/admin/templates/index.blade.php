@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{getPhrase('templates')}} </h3>
    {{--@can('template_create')
    <p>
        <a href="{{ URL_EMAIL_TEMPLATES_ADD }}" class="btn btn-success">@lang('global.app_add_new')</a>
    </p>
    @endcan--}}

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        <th style="text-align:center;">S.no.</th>
                        <th> {{getPhrase('title')}} </th>
                        <th> {{getPhrase('subject')}} </th>
                        <th> {{getPhrase('type')}} </th>
                        
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                @if (count($templates) > 0)
                <tbody>
                    @if (count($templates) > 0)
                     <?php $i=0;?>
                        @foreach ($templates as $template)
                         <?php $i++;?>
                         
                            <tr data-entry-id="{{ $template->id }}">

                                <td style="text-align:center;">{{$i}}</td>

                                <td field-key='title'>{{ $template->title }}</td>

                                <td field-key='subject'>{{ $template->subject }}</td>

                                <td field-key='type'>{{ $template->type }}</td>

                               

                                <td>
                                   
                                    @can('template_edit')
                                    <a href="{{ URL_EMAIL_TEMPLATES_EDIT }}/{{$template->slug}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                                    @endcan
                                   
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
                @endif
            </table>
        </div>
    </div>
@stop


@section('footer_scripts') 


        @can('content_page_delete') 
        @include('common.deletescript', array('route'=>URL_EMAIL_TEMPLATES_DELETE))
        @endcan
@endsection        