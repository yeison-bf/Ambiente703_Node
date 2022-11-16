<?php

$aprendices = array(
    [
        'id' => 1,
        'nombre' => 'Brandon',
        'apellidos' => 'Monsalve',
        'programa' => 'ADSO',
        'estatus' => 1,
        'ficha' => 187483
    ],
    [
        'id' => 2,
        'nombre' => 'Nayibe',
        'apellidos' => 'Castro',
        'programa' => 'ADSO',
        'estatus' => 1,
        'ficha' => 187483
    ],
    [
        'id' => 3,
        'nombre' => 'Estefania',
        'apellidos' => 'Castañeda',
        'programa' => 'ADSO',
        'estatus' => 1,
        'ficha' => 187483
    ],
    [
        'id' => 4,
        'nombre' => 'Alejandra',
        'apellidos' => 'Carrillo',
        'programa' => 'ADSO',
        'estatus' => 1,
        'ficha' => 187483
    ],
);


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
        <div class="wraper w-100 flex-column p-5 vh-100 d-flex justify-content-star align-items-center">
            <h2>Tabla de aprendices</h2>
            <table class="table table-sm ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Programa</th>
                        <th>Estatus</th>
                        <th>Ficha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    //var_dump($aprendices);
                    $estado;
                    foreach ($aprendices as $key => $value) {

                        if($value["estatus"] == 1){
                            $estado = "<button style='cursor:text' class='btn btn-success btn-sm col-12'>Activo</button>";
                        }else{
                            $estado = "<button style='cursor:text' class='btn btn-danger btn-sm col-12'>Inactivo</button>";
                        }


                        echo "<tr>
                                <td>". $value["id"] ."</td>
                                <td>". $value["nombre"] ."</td>
                                <td>". $value["apellidos"] ."</td>
                                <td>". $value["programa"] ."</td>
                                <td>". $estado ."</td>
                                <td>". $value["ficha"] ."</td>
                            </tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>