
const { Router } = require('express');

const route = Router();

route.get('/', (req, res) => {
    res.send({
        "ok": 200,
        "Nombre" : "Manuela",
        "Apellido" : "De Giraldo",
        "Direccion" : "Medellin",
        "Estado" : true
    })
})

route.post('/', (req, res) => {
    res.send('Peticion desde producto - Post!')
})

route.put('/', (req, res) => {
    res.send('Peticion desde producto - Put!')
})

route.delete('/', (req, res) => {
    res.send('Peticion desde producto - Delete!')
})




module.exports = route;