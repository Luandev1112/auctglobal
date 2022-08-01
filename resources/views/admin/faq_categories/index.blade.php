@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{ getPhrase('categories') }} </h3>
    
   
    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            {{ getPhrase('list') }}

            @can('faq_category_create')
            <a href="{{ URL_FAQ_CATEGORIES_ADD }}" class="btn btn-success btn-add pull-right">{{ getPhrase('add_new') }}</a>
            @endcan
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                       
                        <th style="text-align:center;">S.no.</th>
                       

                        <th> {{getPhrase('category')}} </th>
                        <th> {{getPhrase('status')}} </th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($faq_categories) > 0)
                    <?php $i=0;?>
                        @foreach ($faq_categories as $faq_category)
                        <?php  $i++;?>
                            <tr data-entry-id="{{ $faq_category->id }}">
                                
                               <td style="text-align:center;">{{$i}}</td>

                                <td field-key='title'>{{ $faq_category->title }}</td>

                                 <td field-key='title'>{{ $faq_category->status }}</td>


                                    <td>
                                    @can('faq_category_view')
                                    <a href="{{URL_FAQ_CATEGORIES_VIEW}}/{{$faq_category->slug}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                    @endcan
                                    @can('faq_category_edit')
                                    <a href="{{URL_FAQ_CATEGORIES_EDIT}}/{{$faq_category->slug}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                                    @endcan
                                    @can('faq_category_delete')
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('{{$faq_category->id}}')"> {{ getPhrase('delete') }} </a>
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6"> {{ getPhrase('no_entries_in_table') }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('footer_scripts') 
   
        @can('faq_category_delete') 
        @include('common.deletescript', array('route'=>URL_FAQ_CATEGORIES_DELETE))
        @endcan

@endsection