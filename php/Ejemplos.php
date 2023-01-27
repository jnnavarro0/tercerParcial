<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Documento sin título</title>
</head>

<body>
	<?php

	//your code here!

	$s = "OPERADORES ARITMETICOS";
	//operadores aritmeticos
	echo $s;
	$a = 25;
	$b = 15;

	echo "<br>", $c = $a + $b,
	"<br>", $c = $a - $b,
	"<br>", $c = $a * $b,
	"<br>", $c = $a / $b,
	"<br>", $c = $a % $b,
	"<br>", $c = -$a,
	"<br>", $c = -$b;


	$d = "<br><br>OPERADOR DE ASIGNACION COMBINADO";
	//operadores de asignación
	echo "<br>", $d;
	$e = 7;
	$f = 9;

	echo "<br>", $e += $f,
	"<br>", $e -= $f,
	"<br>", $e *= $f,
	"<br>", $e /= $f,
	"<br>", $e %= $f,
	"<br>", $e .= $f;




	//ejemplo de .=
	$q = "<br><br>EJEMPLO DEL OPERADOR .=";
	echo "<br>", $q;
	$nombre2 = "Genesis";
	$apellido2 = "Anchundia";
	$nombre2 .= $apellido2;
	echo "<br>", $nombre2, "<br>";



	$s = "<br><br>OPERADORES DE COMPARACION";

	echo $s;
	$a = 25;
	$b = 25;

	if ($a == $b)
		echo "<br>", "a igual que b", "<br>";


	$s = "<br><br>OPERADORES DE INCREMENTO";

	echo $s;
	$a = 25;
	$b = 25;

	echo "<br>", "variable a sin incrementar: ", $a++, "<br>", "variable incrementada: ", $a, "<br>";

	$s = "<br><br>OPERADORES LOGICOS";

	echo $s;
	$a = 27;
	$b = 25;

	if ($a > $b and $b < $a) {
		echo "<br>", "a es mayor", "<br>";
	} else {
		echo "<br>", "a es mayor", "<br>";
	}


	$s = "<br><br>OPERADORES TERNARIOS";

	echo $s;
	$a = 17;
	$texto .= "Valor de la variable: ";
	$texto = ($a < 0) ? "Negativo<br>" . "Valor absoluto " . ~$a : "valor positivo<br>" . "Valor" . $a;
	echo "<br>" . $texto;
	echo "Variable: " . $a;
	echo "<br>", $a;
	echo ($edad = $a < 18 ? " es menor de edad" : "Es mayor de edad");

	$s = "<br><br>OPERADORES DE CADENA DE TEXTO";

	echo "<br>", $s;

	$a = 1;
	$b = 2;
	echo ($c = "<br> El resultado de " . $a . " + " . $b . " es " . ($a
		+ $b));


	?>
</body>

</html>