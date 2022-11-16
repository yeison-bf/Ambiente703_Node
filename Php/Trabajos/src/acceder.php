<?php

require '../db/db.php';

if (isset($_POST['acceso'])) {

    $usuario = $_POST['Usuario'];
    $password = $_POST['Password'];

    if ($usuario == "" || $password == "") {
        header('Location: ../index.php?id=0');
    }

    $si_existe = false;

    foreach ($Aprendices706 as $key => $value) {
        if ($usuario == $value['userName'] && $password == $value['password']) {
            $si_existe = true;

            session_start();
            $_SESSION['nombreCompleto'] = $value['nombre'] . ' ' . $value['apellidos'];
            $_SESSION['programa'] = $value['programa'];
            $_SESSION['rol'] = $value['rol'];

            header('Location: ../inicio.php');
        }
    }

    if ($si_existe == false) {
        header('Location: ../index.php?id=1');
    }


    
}
