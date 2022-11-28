
const { Router } = require('express');
const { check } = require('express-validator');

const { getUsers, postUser, putUser, deleteUser } = require('../controllers/users.controller');
const { validator_routes } = require('../middlewares/validator-routes');

const route = Router();

route.get('/',getUsers);

route.post('/', [
    check('identificacion', "La identificacion es requerida").isNumeric(),
    check('identificacion', "El documento debe de minimo 7 numeros y maximo 10 numeros").isLength({ min:7, max:10 }),
    check('identificacion', "El documento es requerido").not().isEmpty(),
    check('nombre', "El nombre es requerido").not().isEmpty(),
    check('apellidos', "El apellido es requerido").not().isEmpty(),
    check('telefono','El número de contacto registrado no es valido').isNumeric(),
    check('email','El correo no es válido').isEmail(),
    check('password', "La longitud del password tiene que ser mayor a 12 caracteres").isLength({ min:7 }),
    check('role', 'El rol no es el permitido').isIn(["ADMINISTRADOR", "VENDEDOR"]),
    validator_routes
], postUser);

route.put('/:id', [
    check('identificacion', "La identificacion es requerida").isNumeric(),
    check('identificacion', "El documento debe de minimo 7 numeros y maximo 10 numeros").isLength({ min:7, max:10 }),
    check('identificacion', "El documento es requerido").not().isEmpty(),
    check('nombre', "El nombre es requerido").not().isEmpty(),
    check('apellidos', "El apellido es requerido").not().isEmpty(),
    check('telefono','El número de contacto registrado no es valido').isNumeric(),
    check('email','El correo no es válido').isEmail(),
    check('password', "La longitud del password tiene que ser mayor a 12 caracteres").isLength({ min:7 }),
    check('role', 'El rol no es el permitido').isIn(["ADMINISTRADOR", "VENDEDOR"])
], putUser);

route.put('/:id', deleteUser);


module.exports = route;