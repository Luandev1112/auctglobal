@extends($layout)

@section('content')

@include('home/home-slider')

@include('home/home-notification')

@include('home/home-latest-auctions')

@include('home/home-premium-auctions')

@include('home/ads')

{{--@include('home/upcoming-auctions')--}}

@include('home/live-auctions')

@include('home/testimonials')

@include('home/partners')

@endsection