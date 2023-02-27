<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<?php
	include("include/class.figura.php");
	include("include/Interface.formulas.php");
	include("figuras/class.cuadrado.php");
	include("figuras/class.rectangulo.php");
	include("figuras/class.triangulo.php");

	echo figura::get_form();

	if (isset($_POST['calcular']))
		switch ($_POST['tipo']) {
			case "cuadrado":
				$objCuadrado = new cuadrado($_POST['lado_1']);
				mostrar($objCuadrado);
				break;
			case "rectangulo":
				$objRectangulo = new rectangulo($_POST['lado_1'], $_POST['lado_2']);
				mostrar($objRectangulo);
				break;
			case "triangulo":
				$objTriangulo = new triangulo($_POST['lado_1'], $_POST['lado_2'], $_POST['lado_3']);
				mostrar($objTriangulo);
				break;
		}


	function mostrar($figura)
	{
		$figura->area();
		$figura->perimetro();
		echo '<div class="text-center">
			<br><br><h4> Resultado: </h4>
			El área del ' . $figura->GetTipo() . ' es:  ' . $figura->GetArea() . ' m^2
			<br>El perímetro del ' . $figura->GetTipo() . ' es:  ' . $figura->GetPerimetro() . ' m
			<div>';
	}
	?>

</body>

</html>