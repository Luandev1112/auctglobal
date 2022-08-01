@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{ $title }} </h3>

    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('list')}}

            @can('city_create')
                <a href="{{URL_CITIES_ADD}}" class="btn btn-success btn-add pull-right"> {{getPhrase('add_new')}} </a>
            @endcan

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>

                        <th style="text-align:center;">S.no.</th>

                        <th> {{getPhrase('city')}} </th>
                        <th> {{getPhrase('country')}} </th>
                        <th> {{getPhrase('state')}} </th>
                        <th> {{getPhrase('status')}} </th>
                        <th>&nbsp;</th>
                       
                    </tr>
                </thead>
                @if (count($cities) > 0)
                <tbody>
                    @if (count($cities) > 0)
                     <?php $i=0;?>
                        @foreach ($cities as $city)
                         <?php $i++;?>
                            <tr data-entry-id="{{ $city->id }}">

                                <td style="text-align:center;">{{$i}}</td>

                                <td field-key='city'> {{$city->city}} </td>
                                <td field-key='country'> {{$city->title}} </td>
                                <td field-key='state'> {{$city->state}} </td>
                                <td field-key='status'> {{$city->status}} </td>
                                
                                <td>
                                    @can('city_view')
                                    <a href="{{URL_CITIES_VIEW}}/{{$city->slug}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                    @endcan
                                    @can('city_edit')
                                    <a href="{{URL_CITIES_EDIT}}/{{$city->slug}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                                    @endcan

                                    @can('city_delete')
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('{{$city->id}}')"> {{ getPhrase('delete') }} </a>
                                    @endcan
                                </td>
                                
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8"> {{getPhrase('no_entries_in_table')}}</td>
                        </tr>
                    @endif
                </tbody>
                 @endif
            </table>
        </div>
    </div>
@stop

@section('footer_scripts') 
   
        @can('city_delete') 
        @include('common.deletescript', array('route'=>URL_CITIES_DELETE))
        @endcan

    
@endsection