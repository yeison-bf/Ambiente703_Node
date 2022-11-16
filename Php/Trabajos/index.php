<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background-image: url('../img/fondo.jpeg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="wraper w-100 vh-100  d-flex justify-content-center align-items-center">
            <form class="col-4 card p-5" action="src/acceder.php" method="post">
                <div class="form-group">
                    <label for="" class="form-label">Usuario</label>
                    <input require type="text" name="Usuario" class="form-control col-12">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Password</label>
                    <input require type="password" name="Password" class="form-control col-12">
                </div>

                <div class="form-group mt-3 col-12 text-end mb-5">
                    <input name="acceso" type="submit" value="Acceder" class="rounded-pill btn btn-success col-6">
                </div>


                <?php
                error_reporting(0);

                if($_GET['id'] == null){

                }else if ($_GET['id'] == 0) {
                    echo '<div class="alert alert-danger text-center col-12 alert-sm">Campos obligatorios</div>';
                }

                if ($_GET['id'] == 1) {
                    echo '<div class="alert alert-danger text-center col-12 alert-sm">Usuario no encontrado</div>';
                }

                ?>

            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>