@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{getPhrase('categories')}} </h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('view')}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th> {{getPhrase('category')}} </th>
                            <td field-key='title'>{{ $faq_category->title }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#faqquestions" aria-controls="faqquestions" role="tab" data-toggle="tab">Questions</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="faqquestions">
<table class="table table-bordered table-striped {{ count($faq_questions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th> {{getPhrase('category')}} </th>
            <th> {{getPhrase('question')}} </th>
            <th> {{getPhrase('answer')}} </th>
            <th>&nbsp;</th>

        </tr>
    </thead>
    @if (count($faq_questions) > 0)
    <tbody>
        @if (count($faq_questions) > 0)
            @foreach ($faq_questions as $faq_question)
                <tr data-entry-id="{{ $faq_question->id }}">
                    <td field-key='category'>{{ $faq_question->category->title or '' }}</td>
                                <td field-key='question_text'>{!! $faq_question->question_text !!}</td>
                                <td field-key='answer_text'>{!! $faq_question->answer_text !!}</td>
                                                                <td>
                                    @can('view')
                                    <a href="{{URL_FAQ_QUESTIONS_VIEW}}/{{$faq_question->slug}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{URL_FAQ_QUESTIONS_EDIT}}/{{$faq_question->slug}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                                    @endcan
                                    @can('delete')
                                    
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('{{$faq_question->id}}')"> {{ getPhrase('delete') }} </a>
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">{{getPhrase('no_entries_in_table')}}</td>
            </tr>
        @endif
    </tbody>
    @endif
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ URL_FAQ_CATEGORIES }}" class="btn btn-default">{{getPhrase('back_to_list')}}</a>
        </div>
    </div>
@stop


@section('footer_scripts') 
   
        @can('faq_question_delete') 
        @include('common.deletescript', array('route'=>URL_FAQ_QUESTIONS_DELETE))
        @endcan
    
@endsection