const fs = require('fs');
const http = require('http');

http.createServer(function (request, response) {

    fs.readFile('index.html', (err, data) => {
        if(err) throw err;

        // send
        response.writeHead(200, {'content-type': 'text/html'});
        response.write(data);
        response.end();
    });
}).listen(8000);

console.log("server running on http://localhost:8000")