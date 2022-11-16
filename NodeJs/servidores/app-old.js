

const http = require('http')


const { readFile } = require('fs');

readFile('./public/views/home.html', (err, html) => {
  if (err) throw err;
    http.createServer( (req, resp) =>{
        resp.write(html)
        resp.end();

    }).listen(8081)
});





console.log("El servidor está activo y escucha por : http://localhost:8081")