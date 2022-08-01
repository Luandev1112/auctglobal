/*var socket = io.connect('http://localhost', {path:'/'});

$('#submit').click(function(){
	console.log("testrsddf");
    socket.emit('bid', { "amount" : $('#input').val() });
});


socket.on('bid', function(content) {
 	console.log("cotnent ");
    $('#bids').html(content["amount"]);
});
*/

var socket = io.connect('http://localhost', {path:"/"});


$('#submit').click(function(){


  socket.on('news', function (data) {
    console.log(data);
    socket.emit('my other event', { my: 'data' });
});

});



