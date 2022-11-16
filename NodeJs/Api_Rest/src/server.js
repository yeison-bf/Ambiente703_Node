const express = require('express')
const cors = require('cors')

class Server {

    constructor(){
        this.app = express();

        // Definición del puerto
        this.port = process.env.PORT;

        // Middleware
        this.middleware();

        // Routes
        this.route();
       
    }


    middleware(){

        // Definición carpeta pública
        this.app.use( express.static('public') );

        // Definición de los cors
        app.use(cors())

    }


    route(){
        this.app.get('/api', (req, res) => {
            res.send({
                "ok": 200,
                "Nombre" : "Manuela",
                "Apellido" : "De Giraldo",
                "Direccion" : "Medellin",
                "Estado" : true
            })
        })

        this.app.post('/api', (req, res) => {
            res.send('Peticion desde el Post!')
        })

        this.app.put('/api', (req, res) => {
            res.send('Peticion desde el Put!')
        })

        this.app.delete('/api', (req, res) => {
            res.send('Peticion desde el Delete!')
        })
    }

    listen(){
        this.app.listen(this.port, () => {
            console.log(`El servidor esta activo en http://localhost:${this.port}`)
        })
    }

}

module.exports = Server;

