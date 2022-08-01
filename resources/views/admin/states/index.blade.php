@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{ $title }} </h3>
    

   
    

    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('list')}}

            @can('state_create')
                <a href="{{URL_STATES_ADD}}" class="btn btn-success btn-add pull-right"> {{getPhrase('add_new')}} </a>
            @endcan

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                       <th style="text-align:center;">S.no.</th>

                        <th> {{getPhrase('state')}} </th>
                        <th> {{getPhrase('country')}} </th>
                        
                        <th>&nbsp;</th>
                       
                    </tr>
                </thead>
                @if (count($states) > 0)
                <tbody>
                    @if (count($states) > 0)
                     <?php $i=0;?>
                        @foreach ($states as $state)
                         <?php $i++;?>
                            <tr data-entry-id="{{ $state->id }}">

                                <td style="text-align:center;">{{$i}}</td>

                                <td field-key='state'>{{ $state->state }}</td>
                                <td field-key='country'>{{ $state->title }}</td>
                               
                                <td>
                                    @can('state_view')
                                    <a href="{{ URL_STATES_VIEW }}/{{$state->slug}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                    @endcan

                                    @can('state_edit')
                                    <a href="{{ URL_STATES_EDIT }}/{{$state->slug}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                                    @endcan


                                    @can('state_delete')
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('{{$state->id}}')"> {{ getPhrase('delete') }}</a>
                                    @endcan
                                </td>
                               
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7"> {{getPhrase('no_entries_in_table')}} </td>
                        </tr>
                    @endif
                </tbody>
                @endif
            </table>
        </div>
    </div>
@stop

@section('footer_scripts') 
    @can('state_delete') 
     @include('common.deletescript', array('route'=>URL_STATES_DELETE))
    @endcan
@endsection