
const { Schema, model } = require('mongoose');

const UserModels = new Schema({

    
    identificacion:{
        type:Number,
        required:["El documento es obligatorio!"],
        unique: true
    }, 

    nombre:{
        type:String,
        required:["El nombre es obligatorio!"]
    }, 

    apellidos:{
        type:String,
        required:["El apellido es obligatorio!"]
    },

    direccion:{
        type:String,
        required:["La dirección es obligatoria!"]
    },

    telefono:{
        type:Number,
        required:["El telefono es obligatorio!"]
    },

    email:{
        type:String,
        required:["El email es obligatorio!"],
        unique:true
    },


    password:{
        type:String,
        required:["El password es obligatorio!"]
    },


    role:{
        type:String,
        required:["El rol es obligatorio!"]
    },

    estado:{
        type:Boolean,
        default:true
    }
})


module.exports = model('User', UserModels)