var WebSocketServer = require('websocket').server;
var http = require('http');
var wsServer;
var server = http.createServer(function(request, response) {
console.log((new Date()) + ' Received request for ' + request.url);
response.writeHead(404);
response.end();
});
server.listen(2096, function() {
console.log((new Date()) + ' Server is listening on port 3000');
});
 
 console.log( server.address().address );
wsServer = new WebSocketServer({
httpServer: server
 });
 
// listening request event
wsServer.on('request', function(request) {
 var connection = request.accept(null, request.origin);
 console.log('Connection created at : ', new Date());
 
 // listening message receiving event by client
 connection.on('message', function(message) {
 if (message.type === 'utf8') {
 console.log('Received Message: ' + message.utf8Data);
 
 // Sending message to client
 connection.sendUTF(message.utf8Data);
 }
 else if (message.type === 'binary') {
 console.log('Received Binary Message of ' + message.binaryData.length + ' bytes');
 
 // Sending message to client in binary form
 connection.sendBytes(message.binaryData);
 }
 });
 // listening for connection close event
 connection.on('close', function(reasonCode, description) {
    console.log('Peer ' + connection.remoteAddress + ' disconnected at : ', new Date());
    });
    });