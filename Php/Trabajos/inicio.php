<?php
session_start();
if (!isset($_SESSION['nombreCompleto'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?= $_SESSION['nombreCompleto'] ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?= $_SESSION['nombreCompleto'] ?></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <?php
                            if ($_SESSION['rol'] == 'Administrador') {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Productos</a>
                                </li>
                            <?php
                            }
                            ?>

                            <?php
                            if ($_SESSION['rol'] == 'Vendedor' || $_SESSION['rol'] == 'Administrador') {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Ventas</a>
                                </li>
                            <?php
                            }
                            ?>

                            <?php
                            if ($_SESSION['rol'] == 'Administrador') {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Compras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Servicios</a>
                                </li>

                            <?php
                            }
                            ?>



                            <?php
                            if ($_SESSION['rol'] == 'Vendedor' || $_SESSION['rol'] == 'Administrador') {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Cotizaciones</a>
                                </li>
                            <?php
                            }
                            ?>


                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="logout/salir.php">Salir</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>

        <div class="wraper w-100 vh-100 flex-column d-flex justify-content-center align-items-center">
            <h1>Bienvenido <?= $_SESSION['rol'] ?></h1>
            <p class="h2"><?= $_SESSION['nombreCompleto'] ?></p>
            <p>Programa : <?= $_SESSION['programa'] ?></p>
            <p>Cargo : <?= $_SESSION['rol'] ?></p>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>