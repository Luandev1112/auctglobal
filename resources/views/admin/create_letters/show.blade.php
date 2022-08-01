@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{getPhrase('create_letter')}}</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('view')}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>{{getPhrase('to')}}</th>
                            <td field-key='to'>{{ $create_letter->email }}</td>
                        </tr>
                        <tr>
                            <th>{{getPhrase('title')}}</th>
                            <td field-key='title'>{{ $create_letter->title }}</td>
                        </tr>
                        <tr>
                            <th> {{getPhrase('message')}}</th>
                            <td field-key='message'>{!! $create_letter->message !!}</td>
                        </tr>
                       
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ URL_LIST_NEWS_LETTER }}" class="btn btn-default"> {{getPhrase('back_to_list')}}</a>
        </div>
    </div>
@stop
