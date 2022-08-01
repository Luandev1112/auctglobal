@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{getPhrase('cities')}} </h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            {{$title}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>{{getPhrase('city')}}</th>
                            <td field-key='city'>{{ $city->city }}</td>
                        </tr>
                        <tr>
                            <th>{{getPhrase('country')}}</th>
                            <td field-key='country'>{{ $city->title }}</td>
                        </tr>
                        <tr>
                            <th>{{getPhrase('state')}}</th>
                            <td field-key='state'>{{ $city->state }}</td>
                        </tr>
                        
                         <tr>
                            <th>{{getPhrase('status')}}</th>
                            <td field-key='state'>{{ $city->status }}</td>
                        </tr>

                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ URL_CITIES }}" class="btn btn-default"> {{ getPhrase('back_to_list') }}</a>
        </div>
    </div>
@stop
