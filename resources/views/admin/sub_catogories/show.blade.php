@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{getPhrase('sub_categories')}} </h3>

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
                            <td field-key='category'>{{ $sub_catogory->category}}</td>
                        </tr>
                        <tr>
                            <th>{{getPhrase('sub_category')}}</th>
                            <td field-key='sub_category'>{{ $sub_catogory->sub_category }}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>


        

            <p>&nbsp;</p>

            <a href="{{ URL_SUB_CATEGORIES }}" class="btn btn-default">{{ getPhrase('back_to_list') }}</a>
        </div>
    </div>
@stop
