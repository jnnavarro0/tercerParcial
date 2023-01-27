<?php
if (!isset($_POST))
    header('Location:index.html');

$tabla = $_POST['tabla'];
$nMaximo = $_POST['maximo'];
$multiplicador = 1;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta</title>

</head>

<body>
    <h1>Tabla del <?php echo $tabla ?></h1>
    <?php
    while($multiplicador <= $nMaximo){
        echo "<p>{$tabla} * {$multiplicador} = " . $tabla * $multiplicador . "</p>";
        $multiplicador++;
    }
    ?>
</body>

</html>