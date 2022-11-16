<?php

$usuarioLog= "Administrador";
$claveLogin= "Admin12345678";

    if(isset($_POST['acceso_btn'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $nombre = $_POST['nombre'];

        if($usuario == "" || $password == ""){
            header('Location: ../login.php?id=0');
        }

        if($usuario == $usuarioLog && $password == $claveLogin){
            session_start();
            $_SESSION['nombreAdmin'] = $nombre;
            header('Location: ../inicio.php');

        }

    }
