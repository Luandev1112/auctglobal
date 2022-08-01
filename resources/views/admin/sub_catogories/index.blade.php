@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{getPhrase('sub_categories')}} </h3>
    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('list')}}

            @can('sub_catogory_create')
                <a href="{{URL_SUB_CATEGORIES_ADD}}" class="btn btn-success btn-add pull-right">
                    {{getPhrase('add_new')}}
                </a>
            @endcan

        </div>

        <div class="panel-body table-responsive">


            <table class="table table-bordered table-striped datatable">

                <thead>
                    <tr>
                        <th style="text-align:center;">S.no.</th>

                       
                        <th>{{getPhrase('sub_category')}}</th>
                        
                        <th>{{getPhrase('category')}}</th>

                        <th>{{getPhrase('status')}}</th>

                       
                        <th>&nbsp;</th>
                        
                    </tr>
                </thead>

               @if (count($sub_categories) > 0)
                <tbody>
                    @if (count($sub_categories) > 0)
                     <?php $i=0;?>
                        @foreach ($sub_categories as $category)
                         <?php $i++;?>
                            <tr data-entry-id="{{ $category->id }}">

                               <td style="text-align:center;">{{$i}}</td>

                                <td field-key='description'>{!! $category->sub_category !!}</td>

                                <td field-key='category'>{{ $category->category }}</td>

                                <td field-key='status'>{{ $category->status }}</td>

                                
                                <td>
                                    @can('category_view')
                                     <a href="{{ URL_SUB_CATEGORIES_VIEW }}/{{$category->slug}} " class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                    @endcan
                                    @can('category_edit')
                                    <a href="{{ URL_SUB_CATEGORIES_EDIT }}/{{$category->slug}}" class="btn btn-xs btn-info">{{getPhrase('edit')}}</a>
                                    @endcan

                                    @can('category_delete')
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('{{$category->id}}')"> {{ getPhrase('delete') }}</a>
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

 @can('category_delete') 
        @include('common.deletescript', array('route'=>URL_SUB_CATEGORIES_DELETE))
        @endcan

    

@endsection