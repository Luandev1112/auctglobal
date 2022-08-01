@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{getPhrase('countries')}}</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            {{$title}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">

                        <tr>
                            <th>{{getPhrase('country_name')}}</th>
                            <td field-key='title'>{{ $country->title }}</td>
                        </tr>
                       

                        <tr>
                            <th>{{getPhrase('short_code')}}</th>
                            <td field-key='shortcode'>{{ $country->shortcode }}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ URL_COUNTRIES }}" class="btn btn-default">{{getPhrase('back_to_list')}}</a>
        </div>
    </div>
@stop
