
const { Router } = require('express');

const { getUsers, postUser, putUser, deleteUser } = require('../controllers/users.controller');

const route = Router();

route.get('/', getUsers)

route.post('/', postUser)

route.put('/:id', putUser)

route.put('/:id', deleteUser)


module.exports = route;