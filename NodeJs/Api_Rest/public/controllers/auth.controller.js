
const bcryptjs = require("bcryptjs");
const { request, response } = require("express");
const User = require('../models/user.models')


const postAuthJwt = async (req=request, res=response) => {
    
    const {email, password} = req.body;
    
    //Validamos que exista el correo

        const usuario = await User.findOne({email});
        if(!usuario){
            res.json({
                ok: 400,
                "msg" : "El correo no existe"
              });
        }

    //Validamos que el usuario este activo

    //Validamos que coincida la contraseña
        const coincidenciaClave = bcryptjs.compareSync(password, usuario.password)
        if(!coincidenciaClave){
            res.json({
                ok: 400,
                "msg" : "La contraeña es incorrecta"
              });
        }
    // Generamos en JWT
        const token = await generarJwt();
    
    res.json({
        ok: 200,
        "msg" : "Todo bien"
      });
  };

  

module.exports = {
    postAuthJwt
}