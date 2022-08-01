@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{getPhrase('categories')}} </h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            {{$title}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th> {{getPhrase('category')}} </th>
                            <td field-key='category'>{{ $category->category }}</td>
                        </tr>
                        <tr>
                            <th> {{getPhrase('description')}} </th>
                            <td field-key='question_text'>{!! $category->description !!}</td>
                        </tr>
                       
                    </table>
                </div>
            </div>

            <!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#faqquestions" aria-controls="faqquestions" role="tab" data-toggle="tab">Sub Categories </a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="faqquestions">
<table class="table table-bordered table-striped {{ count($sub_catogories) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            
            <th> {{getPhrase('sub_category')}} </th>
            <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($sub_catogories) > 0)
            @foreach ($sub_catogories as $sub_category)
                <tr data-entry-id="{{ $sub_category->id }}">
                    <td field-key='category'>{{ $sub_category->sub_category}}</td>

                                
                <td>
                    @can('sub_catogory_view')
                    <a href="{{URL_SUB_CATEGORIES_VIEW}}/{{$sub_category->slug}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                    @endcan
                    @can('sub_catogory_edit')
                    <a href="{{URL_SUB_CATEGORIES_EDIT}}/{{$sub_category->slug}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                    @endcan
                    @can('sub_catogory_delete')
                   
                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('{{$sub_category->id}}')"> {{ getPhrase('delete') }} </a>
                    @endcan
                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8"> {{ getPhrase('no_entries_in_table') }}</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>


            <p>&nbsp;</p>

            <a href="{{ URL_CATEGORIES }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop

@section('footer_scripts') 
   
        @can('faq_question_delete') 
        @include('common.deletescript', array('route'=>URL_SUB_CATEGORIES_DELETE))
        @endcan
    
@endsection
