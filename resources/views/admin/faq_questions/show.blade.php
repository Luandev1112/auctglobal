@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{getPhrase('questions')}} </h3>

    <div class="panel panel-default">
        <div class="panel-heading">
           {{$title}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>{{getPhrase('category')}}</th>
                            <td field-key='category'>{{ $faq_question->category->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>{{getPhrase('question')}}</th>
                            <td field-key='question_text'>{!! $faq_question->question_text !!}</td>
                        </tr>
                        <tr>
                            <th>{{getPhrase('answer')}}</th>
                            <td field-key='answer_text'>{!! $faq_question->answer_text !!}</td>
                        </tr>

                        <tr>
                            <th>{{getPhrase('status')}}</th>
                            <td field-key='status'>{{ $faq_question->status }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ URL_FAQ_QUESTIONS }}" class="btn btn-default">{{getPhrase('back_to_list')}}</a>
        </div>
    </div>
@stop
