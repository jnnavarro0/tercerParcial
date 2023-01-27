<?php

// IF
echo "----------------------<br>";
echo "<b>Sentencia IF</b><br>";
echo "----------------------<br>";
$a = 10;
$b = 5;
if ($a > $b) { 
 echo "a es mayor que b<br><br>"; 
}

echo "---------------------------<br>";

// IF - ELSE
echo "<b>Sentencia IF - ELSE</b><br>";
echo "----------------------------<br>";

$a = 10;
$b = 5;
if ($a < $b) { 
	echo "a es mayor que b<br><br>"; 
}else{
	echo "a NO es mayor que b<br><br>";
}

echo "---------------------------<br>";
// ELSEIF
echo "<b>Sentencia ELSEIF</b><br>";
echo "---------------------------<br>";

if ($a > $b) {
	echo "a es mayor que b<br><br>"; 
} elseif ($a == $b) {
	echo "a es igual a b<br><br>";
} else { 
	echo "b es mayor que a<br><br>";
}
echo "--------------------------<br>";
// SWITCH
echo "<b>Sentencia SWITCH</b><br>";
echo "--------------------------<br>";

$i=0;
switch ($i) { 
	case 0: 
	echo "i es igual a 0<br><br>\n"; 
	break; 
	case 1: 
	echo "i es igual a 1<br><br>\n"; 
	break; 
	case 2: 
	echo "i es igual a 2<br><br>\n";
	break;
	default: echo "i no es igual a 0,1 o 2<br><br>\n";
} 
echo "----------------------<br>";
// FOR
echo "<b>Sentencia FOR</b><br>";
echo "----------------------<br>";

for ($i = 1; $i <= 10; $i++) { 
	echo "$i </br>"; 
}
echo "</br>";
// WHILE
echo "----------------------------------------<br>";
// WHILE ++
echo "<b>Sentencia While Incremento</b><br>";
echo "----------------------------------------<br>";

$i = 1;
while ($i <= 10) { 
	echo $i++;
	echo "</br>";
}
echo "</br>";
echo "----------------------------------------<br>";
// WHILE --
echo "<b>Sentencia While Decremento</b><br>";
echo "----------------------------------------<br>";

$i = 20;
while ($i >= 10) { 
	echo $i--;
	echo "</br>";
}
echo "</br>";
echo "----------------------------<br>";
// Do While
echo "<b>Sentencia Do While</b><br>";
echo "----------------------------<br>";

$i = 0; 
do { 
	echo $i; 
} while ($i>0);
echo "</br>";
?>
<!--
1. Usuario ingresa  la caja de texto la cedula. Utilizando en la caja de texto que sea mas de 10
Mediante el jqury la cadena solo esté formada por dígitos
2.Caracteres alfanumérico. En caso de que exista un error despegar una alerta
3. Utilizar el boton berificar, el mismo que ejecuta un script de php
4. El scrip´t de php "verificar.php" utiliza el método post para obtener la cadena de 
texto ingresada y ejecuta el argoritmo de verificación de la cedula.