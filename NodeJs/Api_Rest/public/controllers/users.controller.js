
const bcryptjs = require('bcryptjs');


const User = require("../models/user.models");

const getUsers = async (req, res) => {
  const all_user = await User.find();

  res.send({
    all_user,
  });
};

const postUser = async (req, res) => {
  const {identificacion, nombre, apellidos, direccion, telefono, usuario, password } = req.body;
  const user = await new User( {identificacion, nombre, apellidos, direccion, telefono, usuario, password });

  const salt = bcryptjs.genSaltSync();
  user.password = bcryptjs.hashSync( password, salt)

  await user.save();

  res.json({
    ok: 200,
    user,
  });
};

const putUser = async (req, res) => {
  const user_id = req.params.id;
  const data = req.body;
  const user = await User.findByIdAndUpdate(user_id, data);

  await user.save();

  res.json({
    ok: 200,
    msg: "Usuario actualizado",
  });
};

const deleteUser = async (req, res) => {
  // const user = await User.findByIdAndDelete(user_id);

  const user_id = req.params.id;
  const { estado } = req.body;
  const user = await User.findByIdAndUpdate(user_id, { estado });

  let msg = "";
  if(estado === false){
    msg= "Usuario eliminado";
  }else{
    msg= "Usuario activado";
  }
  await user.save();

  res.json({
    ok: 200,
    msg: msg,
  });
};

module.exports = {
  getUsers,
  postUser,
  putUser,
  deleteUser,
};
