<?php session_start(); 
    if($_SESSION['nombreAdmin'] == ""){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Panel Principal</h1>
    <h3>Bienvenido administrador</h3>
    <h1><?= $_SESSION['nombreAdmin'] ?></h1>
    <a href="salir.php">Salir</a>
</body>
</html>