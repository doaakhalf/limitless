const fs = require('fs');
const https = require('https');
const WebSocket = require('ws');
 
var server = https.createServer(function(request, response) {
    console.log((new Date()) + ' Received request for ' + request.url);
    response.writeHead(404);
    response.end();
    });
   
const wss = new WebSocket.Server({ server });
 
wss.on('connection', function connection(ws) {
    console.log("ggggggggg");
    
  ws.on('message', function incoming(message) {
    console.log('received: %s', message);
  });
 
  ws.send('something');
});
 
server.listen(9000, function() {
    console.log((new Date()) + ' Server is listening on port 8080');
    });