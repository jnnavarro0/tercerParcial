<?php
if (!$_POST) {
    header('Location:conversor.html');
}
function convertir()
{
    $soles = $_POST['soles'];
    $monedas = $_POST['moneda'];
    if ($monedas == 'usd')
        $precio = 3.28;
    else
        $precio = 3.43;
    $total = $soles / $precio;
    return array($soles, $monedas, $total);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir moneda</title>
</head>

<body>
    <h1>El total es: </h1>
    <?php
    $resultado = convertir();
    echo 'El total de ' . $resultado[0] . ' soles en ' . $resultado[1] . ' es ' . round($resultado[2], 2);
    ?>
    <br><br><br>
    <button onclick="location.href='../index.html'">Regresar a Inicio</button>
</body>

</html>