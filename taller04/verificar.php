<?php
$cedula = $_POST['cedula'];
$calculo = [];
$suma = 0;
$size = strlen($cedula) - 1;

for ($i = 0; $i < $size; $i++) {
    if (!($i % 2 == 0))
        $calculo[$i] = $cedula[$i];
    else {
        $calculo[$i] = $cedula[$i] * 2;
        if ($calculo[$i] > 9)
            $calculo[$i] = abs($calculo[$i] - 9);
    }
}


for ($i = 0; $i < $size; $i++)
    $suma += $calculo[$i];


$verificador =  $suma % 10;
$verificador -=  10;

if (abs($verificador) == $cedula[9])
    echo '<center><br><br><br><br><h1 style="color:green;">El formato de la cédula ' . $cedula . ' está correcto</h1></center>';
else
    echo '<center><br><br><br><br><h1 style="color:red;">El formato de la cédula ' . $cedula . ' está incorrecto</h1></center>';
