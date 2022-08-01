@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{getPhrase('questions')}} </h3>
   

    

    <div class="panel panel-default">
        <div class="panel-heading">
           {{getPhrase('list')}}

            @can('faq_question_create')
                <a href="{{ URL_FAQ_QUESTIONS_ADD }}" class="btn btn-success btn-add pull-right">{{getPhrase('add_new')}}</a>
            @endcan

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable ">
                <thead>
                    <tr>
                        <th style="text-align:center;">S.no.</th>
                        <th> {{getPhrase('category')}} </th>
                        <th> {{getPhrase('question')}} </th>
                       
                        <th> {{getPhrase('status')}} </th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                @if (count($faq_questions) > 0)
                <tbody>
                    @if (count($faq_questions) > 0)
                      <?php $i=0;?>
                        @foreach ($faq_questions as $faq_question)
                          <?php $i++;?>
                            <tr data-entry-id="{{ $faq_question->id }}">

                                <td style="text-align:center;">{{$i}}</td>

                                <td field-key='category'>{{ $faq_question->category->title or '' }}</td>
                                <td field-key='question_text'>{!! $faq_question->question_text !!}</td>
                                <td field-key='status'>{{ $faq_question->status }}</td>
                                                                <td>
                                    @can('faq_question_view')
                                    <a href="{{URL_FAQ_QUESTIONS_VIEW}}/{{$faq_question->slug}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                    @endcan
                                    @can('faq_question_edit')
                                    <a href="{{URL_FAQ_QUESTIONS_EDIT}}/{{$faq_question->slug}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                                    @endcan

                                    @can('faq_question_delete')
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('{{$faq_question->id}}')"> {{ getPhrase('delete') }} </a>
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
   
        @can('faq_question_delete') 
        @include('common.deletescript', array('route'=>URL_FAQ_QUESTIONS_DELETE))
        @endcan

    
@endsection