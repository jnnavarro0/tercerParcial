<?php
if (!isset($_POST))
    header('Location:index.html');

$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$subtotal = $precio * $cantidad;
$formaPago = $_POST['formaPago'];

if ($formaPago == 'Tarjeta')
    $descuento = $subtotal  * 0.2;
elseif ($formaPago == 'Cupon')
    $descuento = $subtotal  * 0.15;
else
    $descuento = $subtotal  * 0.1;
$total = $subtotal - $descuento;
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
    <h1>Total a pagar:</h1>
    <p>Producto: <?php echo $producto; ?></p>
    <p>Precio: <?php echo $precio; ?></p>
    <p>Cantidad: <?php echo $cantidad; ?></p>
    <p>Subtotal: <?php echo $subtotal; ?></p>
    <p>Descuento: <?php echo $descuento; ?></p>
    <p>Total: <?php echo $total; ?></p>
    <br>
    <button onclick="location.href='../index.html'">Regresar a Inicio</button>
</body>

</html>