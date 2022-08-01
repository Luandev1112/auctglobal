@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{getPhrase('testimonies')}}</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('view')}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th> {{getPhrase('user')}} </th>
                            <td>{{$testmony->username}}</td>
                        </tr>
                        <tr>
                            <th> {{getPhrase('testimony')}} </th>
                            <td>{!! $testmony->testmony !!}</td>
                        </tr>
                        <tr>
                            <th> {{getPhrase('status')}} </th>
                            <td>{{$testmony->status}}</td>
                        </tr>
                       
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ URL_TETSIMONIALS }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
