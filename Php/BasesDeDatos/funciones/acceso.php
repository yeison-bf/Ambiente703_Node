<?php
    require_once '../db/db.php';
    if(isset($_POST['acceso_btn'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $si_existe = false;
        foreach ($aprendices as $key => $value) {
            if ($value['userName'] == $usuario && $value['password'] == $password) {
                header('Location: ../inicio.php');
                $si_existe = true;
            }
        }

        if($si_existe == false){
            header('Location: ../index.php?id=0');
        }
    }