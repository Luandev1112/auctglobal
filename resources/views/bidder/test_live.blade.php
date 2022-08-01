@extends('layouts.home')

@section('content')

<p id="power">0</p>

@endsection

@section('footer_scripts')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>


<!-- <script src="{{PREFIX}}socket.io.js"></script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js.map"></script> -->


<!-- <script src="{{PREFIX}}node_modules/socket.io-client/dist/socket.io.js"></script> -->


<!-- <script src="{{PREFIX}}node_modules/socket.io-client/lib/socket.js"></script> -->

 <!-- <script src="{{PREFIX}}socket.js"></script> -->

 <!-- <script src="https://js.pusher.com/4.2/pusher.min.js"></script> -->


<script src="//js.pusher.com/2.2/pusher.min.js"></script>

    <script>

      

        // var socket = io('',

            // {path:'/{{URL_TEST}}',
             // key: 'http://localhost/Global-Auction/global-auction/'}
             
            // );

        // var socket = io.connect('{{URL_TEST}}');
        
      // var socket = io('http://localhost', { path: '/Global-Auction/global-auction/fire/socket.io'});

        /*var socket = io.connect('', {
          'path': '/fire'
        });*/

        // var socket = io.connect('/fire/socket.io');
           
        
        // var socket = io('http://localhost/Global-Auction/global-auction', { path: '/fire/socket.io'});

        // var socket = io.connect('https://streamer.cryptocompare.com/');

        // var socket = io.connect();
        
        /*socket.on("test-channel:App\\Events\\EventName", function(message){
            console.log("BORLADKJF ");

            // increase the power everytime we load test route
            $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        });*/

       /* socket.on('/fire', function(message) {
            console.log("dfsd");
        });*/


        var pusher = new Pusher('69e9a2bc295b6ca2c212');
        var channel = pusher.subscribe('test-channel');

        channel.bind('App\\Events\\EventName', function(data) {
           console.log(data);
        });

    </script>

@endsection