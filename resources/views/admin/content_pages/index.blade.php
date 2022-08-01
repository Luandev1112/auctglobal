@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title"> {{$title}} </h3>
    {{--@can('content_page_create')
    <p>
        <a href="{{URL_PAGES_ADD}}" class="btn btn-success"> {{getPhrase('add_new')}} </a>
    </p>
    @endcan--}}

    

    <div class="panel panel-default">
        <div class="panel-heading">
            {{getPhrase('list')}}
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                       <th style="text-align:center;">S.no.</th>

                        <th> {{getPhrase('title')}} </th>
                        <th> {{getPhrase('status')}} </th>
                        
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                @if (count($content_pages) > 0)
                <tbody>
                    @if (count($content_pages) > 0)
                    <?php $i=0;?>
                        @foreach ($content_pages as $content_page)
                        <?php $i++;?>
                        
                            <tr data-entry-id="{{ $content_page->id }}">

                               <td style="text-align:center;">{{$i}}</td>

                                <td field-key='title'>{{ $content_page->title }}</td>

                                <td field-key='status'> {{ $content_page->status }} </td>


                                <td>
                                    @can('content_page_view')
                                    <a href="{{URL_PAGES_VIEW}}/{{$content_page->slug}}" class="btn btn-xs btn-primary"> {{getPhrase('view')}} </a>
                                    @endcan
                                    @can('content_page_edit')
                                    <a href="{{ URL_PAGES_EDIT }}/{{$content_page->slug}}" class="btn btn-xs btn-info"> {{getPhrase('edit')}} </a>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11"> {{ getPhrase('no_entries_in_table') }}</td>
                        </tr>
                    @endif
                </tbody>
                 @endif
            </table>
        </div>
    </div>
@stop


@section('footer_scripts') 


        @can('content_page_delete') 
        @include('common.deletescript', array('route'=>URL_PAGES_DELETE))
        @endcan
@endsection        