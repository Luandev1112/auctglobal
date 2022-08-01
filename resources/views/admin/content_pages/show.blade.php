@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{getPhrase('pages')}}</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            {{$title}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th> {{getPhrase('title')}} </th>
                            <td field-key='title'>{{ $content_page->title }}</td>
                        </tr>
                       
                       
                        <tr>
                            <th> {{getPhrase('text')}} </th>
                            <td field-key='page_text'>{!! $content_page->page_text !!}</td>
                        </tr>
                       
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ URL_PAGES }}" class="btn btn-default">{{getPhrase('back_to_list')}}</a>
        </div>
    </div>
@stop
