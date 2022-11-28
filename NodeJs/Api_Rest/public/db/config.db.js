
const mongoose = require('mongoose')

const MongoDBConexion = ()=>{

    try {
        
        mongoose.connect(process.env.MONGO_CNN);
        console.log("Conexión exitosa")

    } catch (error) {
        console.log("Error de conexión : "+error)
    }

}

module.exports = {
    MongoDBConexion
}


// callback
// promises
