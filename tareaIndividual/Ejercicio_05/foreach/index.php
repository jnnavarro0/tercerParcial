<?php
$alumnos = ['Juan', 'María', 'Pedro', 'Adrés', 'Luis', 'Teresa', 'Mario', 'Agusto'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For each</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Alumnos matriculados</h1>
    <div class="contenedor">
        <?php
        foreach ($alumnos as $alumno) {
            echo "<p>$alumno</p>";
            unset($alumno);
        }
        ?>
    </div>
    <br>
    <center><button onclick="location.href='../../index.html'">Regresar a Inicio</button></center>
</body>

</html>