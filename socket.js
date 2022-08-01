var express = require('express'),
    http = require('http');
var app = express();
var server = http.createServer(app);

var io = require('socket.io').listen(server);


server.listen(3000);


// when a client connects
io.sockets.on('connection', function (socket) {
	console.log('a user connected');
      // listen to incoming bids
      socket.on('bid', function(content) {

      	console.log("listen to bid");
           // echo to the sender
           socket.emit('bid', content["amount"]);

        // broadcast the bid to all clients
           socket.broadcast.emit('bid', socket.id + 'bid: ' + content["amount"]);

      });




      // listen to incoming bids - live auction
      socket.on('au_bid', function(content) {
      	
           socket.broadcast.emit('place', {
            "placeholder" : content["placeholder"]
           });

          
            socket.broadcast.emit('lts_bids', {
            "latest_bids" : content["latest_bids"]
           });


      });

 });