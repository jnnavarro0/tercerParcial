<?php 
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $total = $precio * $cantidad;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1>Total a pagar:</h1>
    <p>Producto: <?php echo $producto; ?></p>
    <p>Precio: <?php echo $precio; ?></p>
    <p>Cantidad: <?php echo $cantidad; ?></p>
    <p>Total: <?php echo $total; ?></p>
    <br>
    <button onclick="location.href='../index.html'">Regresar a Inicio</button>
</body>

</html>