
const { Router } = require('express');

const { postAuthJwt } = require('../controllers/auth.controller.js');

const route = Router();

route.post('/login',postAuthJwt);


module.exports = route;