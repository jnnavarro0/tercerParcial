<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<div class="container text-center">
		<br>
		<select class="form-select" aria-label="GFG Select">
			<option>Select an Option</option>
			<option value="GFG1">HTML</option>
			<option value="GFG2">CSS</option>
			<option value="GFG3">JavaScript</option>
			<option value="GFG4" selected>Bootstrap</option>
		</select>
		<br><br>
	</div>

	<?php
	include_once("cubo.php");
	require_once("clases/class.Nivel.php");
	require_once("clases/class.Departamento.php");

	echo "<a href='../index.html'>Regresar</a>";

	imprimirPoo();


	//REGRESAR



	function imprimirPoo()
	{
		global $sistemas, $mecanica, $electronica, $departamento;
		$titulo = ["SISTEMAS", "ELECTRONICA", "MECANICA"];
		$objSIS = new Departamento('Computacion', $departamento['Computacion'], $titulo[0], $sistemas);
		$objELE = new Departamento('Electrica y electronica', $departamento['Electrica y electronica'], $titulo[1], $electronica);
		$objMEC = new Departamento('Mecanica', $departamento['Mecanica'], $titulo[2], $mecanica);
		$objSIS->ImprimirNivel();
	}
	?>

</body>

</html>