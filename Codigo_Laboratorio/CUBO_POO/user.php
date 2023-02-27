<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php
include_once("./cubo.php");
global $departamento;
$cont = 0;
$niveles = ['I', 'II', 'III'];
global $carreras;
echo '<br><a class="btn btn-primary" href="../index.html">Regresar</a>';

?>

<body>
    <br><br>
    <div class="container col-lg-4 shadow p-3 mb-2 bg-light text-dark">
        <h3 class="text-center">Ingreso de Datos</h3>
        <form method="POST" action="./index.php">
            <br>
            <label class="form-label">Carrera:</label>
            <select class="form-select" aria-label="Default select example" name="carrera" id="carrera" require>
                <option>Seleccione una opción</option>
                <?php foreach ($carreras as $carrera) {
                    echo '<option value="' . $cont . '">' . $carrera . '</option>';
                    $cont++;
                } ?>
            </select>
            <br>
            Niveles:
            <?php foreach ($niveles as $nivel) {
                echo '
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="' . $nivel . '" require>' .
                    $nivel . ' NIVEL' .
                '</label></div>';
            } ?>
            <br>
            <center><hr width="80%"><input type="submit" value="Buscar" class="btn btn-primary"></center>
        </form>
    </div>

</body>

</html>