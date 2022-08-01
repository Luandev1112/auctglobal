@inject('request', 'Illuminate\Http\Request')
@extends($layout)

@section('content')
    <h3 class="page-title"> {{$title}} </h3>

    

    
    

    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('list')}}

            @can('create_letter_create')
                <a href="{{ URL_NEWS_LETTER_ADD }}" class="btn btn-success btn-add pull-right"> {{getPhrase('add_new')}} </a>
            @endcan

        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        <th style="text-align:center;">S.no.</th>

                        <th> {{getPhrase('to')}} </th>
                        <th> {{getPhrase('title')}}</th>
                        <th> {{getPhrase('message')}}</th>
                     
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                 @if (count($records) > 0)
                <tbody>
                    @if (count($records) > 0)
                    <?php $i=0;?>
                        @foreach ($records as $record)
                        <?php $i++;?>
                        
                            <tr data-entry-id="{{ $record->id }}">
                               
                               <td style="text-align:center;">{{$i}}</td>

                               <td field-key='to'>{{ $record->email }}</td>

                               <td field-key='title'>{{ $record->title }}</td>

                               <td field-key='message'> {!! str_limit($record->message,20) !!} </td>

                                <td>
                                    @can('create_letter_view')
                                    <a href="{{ URL_NEWS_LETTER_VIEW }}/{{$record->id}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                    @endcan
                                   

                                   
                                    @can('create_letter_delete')
                                    <!-- <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="deleteRecord('{{$record->id}}')"> {{ getPhrase('delete') }} </a> -->
                                    @endcan
                                   
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6"> {{ getPhrase('no_entries_in_table') }}</td>
                        </tr>
                    @endif
                </tbody>
                 @endif

            </table>
        </div>
    </div>
@stop

@section('footer_scripts') 


        @can('create_letter_delete') 
        @include('common.deletescript', array('route'=>URL_NEWS_LETTER_DELETE))
        @endcan
@endsection 