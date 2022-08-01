@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{getPhrase('states')}}</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            {{$title}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>{{getPhrase('state')}}</th>
                            <td field-key='state'>{{ $state->state }}</td>
                        </tr>
                        <tr>
                            <th>{{getPhrase('country')}}</th>
                            <td field-key='country'>{{ $state->title }}</td>
                        </tr>
                       
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ URL_STATES }}" class="btn btn-default">{{getPhrase('back_to_list')}}</a>
        </div>
    </div>
@stop
