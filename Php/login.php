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
        <div class="wraper w-100 vh-100 col-6 d-flex justify-content-center align-items-center">
            <form class="col-6" action="php/accesos.php" method="post">
                <div class="row col-12">
                    <div class="col-12">
                    <div class="form-group">
                            <label for="" class="form-label">Nombre completo</label>
                            <input type="text" name="nombre" class="form-control col-12">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Usuario</label>
                            <input type="text" name="usuario" class="form-control col-12">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control col-12">
                        </div>
                        <div class="form-group mt-4">
                            <input type="submit" name="acceso_btn" value="Acceder" class="btn btn-success col-6">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Link CDN Alertar de Sewwalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>

<?php

    if($_GET['id'] != 1){
        echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Lo siento, los campos son obligatorios...!'
              })
            </script>
        ";
    }