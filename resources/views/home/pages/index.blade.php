@extends($layout)

@section('content')

<!--STATIC PAGE SECTION-->
    <section class="au-who">
        @if ($record)
        <div class="container">

            <div class="row">

                <div class="col-lg-10 lg-offset-1 mx-auto col-md-12 col-sm-12">

                   <div class="au-who-main">
                    <h2 class="text-center">{{$record->title}}</h2>
                   </div>


                   <div> {!! $record->page_text !!} </div>


                </div>



            </div>
        </div>
        @endif
    </section>
    <!--STATIC PAGE SECTION-->


    <!--LATEST AUCTIONS SECTION-->
    @include('home.pages.auctions.latest-auctions')
    <!--LATEST AUCTIONS SECTION-->



    <!--RECENT WINNERS SECTION-->
    @include('home.pages.auctions.recent-winners')
    <!--RECENT WINNERS SECTION-->



    <!--RECENT BUYERS SECTION-->
    @include('home.pages.auctions.recent-buyers')
    <!--RECENT BUYERS SECTION-->

@endsection
