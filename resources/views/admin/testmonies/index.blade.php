@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{getPhrase('testimonials')}} </h3>
    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')

            @can('content_page_create')
                <a href="{{ URL_TETSIMONIALS_ADD }}" class="btn btn-success btn-add pull-right">{{getPhrase('add_new')}}</a>
            @endcan

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                       <th style="text-align:center;">S.no.</th>

                        <th> {{getPhrase('user')}} </th>
                        <th> {{getPhrase('testimony')}} </th>
                        <th> {{getPhrase('status')}} </th>
                       

                        <th>&nbsp;</th>

                    </tr>
                </thead>
                @if (count($records) > 0)
                <tbody>
                    @if (count($records) > 0)
                     <?php $i=0;?>
                        @foreach ($records as $record)
                         <?php $i++;?>
                         
                            <tr data-entry-id="{{$record->id}}">

                                <td style="text-align:center;">{{$i}}</td>

                                <td>{{$record->username}}</td>

                                <td> {!! str_limit($record->testmony,20) !!} </td>

                                <td>{{$record->status}}</td>

                              

                                <td>
                                    @can('content_page_view')
                                    <a href="{{URL_TETSIMONIALS_VIEW}}/{{$record->id}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                    @endcan
                                    @can('content_page_edit')
                                    <a href="{{ URL_TETSIMONIALS_EDIT }}/{{$record->id}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                                    @endcan

                                   
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('{{$record->id}}')"> {{ getPhrase('delete') }} </a>
                                   
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
        @include('common.deletescript', array('route'=>URL_TETSIMONIALS_DELETE))
        @endcan
@endsection        