const express = require('express')
const cors = require('cors')
const { MongoDBConexion } = require('../public/db/config.db')

class Server {

    constructor(){
        this.app = express();

        //Conexión
        this.ConexionDBs();

        // Definición del puerto
        this.port = process.env.PORT;

        // Middleware
        this.middleware();

        // Routes
        this.route();
       
    }


    //Conexión a la DB
    ConexionDBs(){
        MongoDBConexion();
    }

    middleware(){

        // Definición carpeta pública
        this.app.use( express.static('public') );

        //Tipos de datos a recibir JSON
        this.app.use( express.json() )

        // Definición de los cors
        this.app.use(cors())

    }

    route(){
        
        this.app.use( '/api/user/', require('../public/routes/users.routes'));
        this.app.use( '/api/products/', require('../public/routes/products.routes'));

    }

    listen(){
        this.app.listen(this.port, () => {
            console.log(`El servidor esta activo en http://localhost:${this.port}`)
        })
    }

}

module.exports = Server;

