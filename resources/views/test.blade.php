@extends('layouts.home')


@section('content')


 <section class="au-categorys">
      <div class="container">
<?php $your_socket_io_server  = PREFIX.'socket.js';?>
      	<div class="row">

      		<div class="col-md-6">
      			<input type ="text" id="input"/>
	        	<button type="button" id="submit">Submit Bid</button>
	        	<p id="bids">t</p>
	    	</div>

      	</div>

      	</div>
      </section>
@endsection


@section('footer_scripts')


<!-- <script src="https://github.com/typicaljoe/taffydb/raw/master/taffy.js"/> -->


<!-- <script src="{{PREFIX}}socket.io.js"></script> -->

<!-- <script src="{{PREFIX}}node_modules/socket.io-client/dist/socket.io.js"></script> -->


<!-- <script src="{{PREFIX}}socket.io/socket.io.js"/> -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>



<script>

$(document).ready(function() { 


// var httpd = require('http').createServer(handler);
// var io = require('socket.io').listen(httpd);


var socket = io.connect('http://localhost:8000');

// var socket = io.connect('<?php echo $your_socket_io_server;?>');


 socket.on('bid', function(content) {
  console.log('On socket');
      $('#bids').append(content + "");
 });

$('#submit').click(function(){
  console.log('hey submit');
     socket.emit('bid', { "amount" : $('#input').val() });
     console.log('after emit');
});
});

/*var app = require('http').createServer(handler)
var io = require('socket.io')(app);
var fs = require('fs');

app.listen(80);


io.on('connection', function (socket) {
  socket.emit('news', { hello: 'world' });
  socket.on('my other event', function (data) {
    console.log(data);
  });
});
*/

</script>

@endsection
