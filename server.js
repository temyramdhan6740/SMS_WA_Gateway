// var socket = require('socket.io');
// var express = require('express');
// var app = express();
// var server = require('http').createServer(app);
// var io = socket.listen(server);
// var port = process.env.PORT || 3000;

const express = require('express');
const app = express();
const http = require('http');
const server = http.createServer(app);
const port = process.env.PORT || 3000;
const io = require("socket.io")(server, {
    cors: {
        origin: '*',
    }
});

app.get('/', (req, res) => {
    res.sendFile(__dirname + '/application/index.html');
    console.log('Tes');
});

server.listen(port, function() {
    console.log('Server listening at port %d', port);
});

io.on('connection', function(socket) {
    socket.on('new_message', function(data) {
        io.sockets.emit('new_message', {
            message: data.message,
            date: data.date,
            msgcount: data.msgcount
        });
    });
});