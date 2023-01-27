<?php
if (!isset($_POST))
    header('Location:index.html');

$tabla = $_POST['tabla'];
$nMaximo = $_POST['maximo'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Tabla del <?php echo $tabla ?></h1>
    <?php
    for($i = 1; $i <= $nMaximo; $i++){
        echo "<p>{$tabla} * {$i} = " . $tabla * $i . "</p>";
    }
    ?>
</body>

</html>