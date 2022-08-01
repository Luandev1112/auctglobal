@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{ $title }}</h3>

   


    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('list')}}

          
            <a href="{{ URL_LANGUAGES_ADD }}" class="btn btn-success btn-add pull-right">{{getPhrase('add_new')}}</a>
           

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        <th style="text-align:center;">S.no.</th>
                        <th> {{getPhrase('language')}} </th>
                        <th> {{getPhrase('code')}} </th>
                        <th> {{getPhrase('is_rtl')}} </th>
                        <th> {{getPhrase('default_language')}} </th>
                        <th>&nbsp;</th>
                       
                    </tr>
                </thead>
                 @if (count($records) > 0)
                <tbody>
                   <?php $i=1;?>
                   @if (count($records) > 0)
                        @foreach ($records as $record)
                            <tr data-entry-id="{{ $record->id }}">

                                <td style="text-align:center;">{{$i++}}</td>

                                <td field-key='shortcode'>{{ $record->language }}</td>
                                <td field-key='title'>{{ strtoupper($record->code) }}</td>

                                <td field-key='title'>

                                    @if ($record->is_rtl)
                                    <i class="fa fa-check text-success" title="{{getPhrase('enable')}}"></i>
                                    @else
                                    <i class="fa fa-close text-danger" title="{{getPhrase('disable')}}"></i>
                                    @endif

                                </td>
                                <td field-key='title'>

                                    @if ($record->is_default)
                                    <i class="fa fa-check text-success" title="{{getPhrase('enable')}}"></i>
                                    @else
                                    <a href="{{URL_LANGUAGES_MAKE_DEFAULT}}{{$record->slug}}" class="btn btn-info btn-xs">{{getPhrase('set_default')}}</a>
                                    @endif

                                </td>


                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.countries.restore', $country->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.countries.perma_del', $record->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('country_view')
                                    <a href="{{ URL_LANGUAGES_UPDATE_STRINGS }}{{$record->slug}}" class="btn btn-xs btn-primary"> {{getPhrase('update_strings')}} </a>
                                    @endcan

                                    @can('country_edit')
                                    <a href="{{ URL_LANGUAGES_EDIT }}/{{$record->slug}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                                    @endcan


                                    @can('country_delete')
                                    @if ($record->slug!='english-1')
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('{{$record->id}}')"> {{ getPhrase('delete') }} </a>
                                    @endif
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">  {{getPhrase('no_entries_in_table')}} </td>
                        </tr>
                    @endif

                </tbody>
                @endif
            </table>
        </div>
    </div>
@stop

@section('footer_scripts') 
   
        @can('country_delete') 
        @include('common.deletescript', array('route'=>URL_LANGUAGES_DELETE))
        @endcan

    
@endsection