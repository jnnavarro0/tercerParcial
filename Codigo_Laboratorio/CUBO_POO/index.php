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
	
	<?php
	include_once("cubo.php");
	require_once("clases/class.Nivel.php");
	require_once("clases/class.Departamento.php");	

	$numcarrera = $_POST['carrera'];

	if (!is_numeric($numcarrera))
		header('location: ./user.php');

	global $carreras;

	echo '<br><a class="btn btn-primary" href="./user.php">Regresar</a><br><h1 class="text-center">' . $carreras[$numcarrera] . '</h1><br>';

	imprimirPoo($numcarrera, $_POST);

	//REGRESAR

	function imprimirPoo($numcarrera, $post)
	{
		global $sistemas, $mecanica, $electronica, $mecatronica, $civil, $biotecnologia, $departamento;

		$carreras = [$sistemas, $mecatronica, $civil, $biotecnologia, $electronica,  $mecanica];
		$titulo = ["SISTEMAS", "MECATRÓNICA", "CIVIL", "BIOTECNOLOGÍA", "ELECTRONICA", "MECÁNICA"];

		if(isset($post['I'])){
			$objCARRERAS = new Departamento($departamento, $departamento['Computacion'], $titulo[$numcarrera], $carreras[$numcarrera]['I NIVEL'],'I');
			$objCARRERAS->ImprimirNivel();
		}
		
		if(isset($post['II'])){
			$objCARRERAS = new Departamento($departamento, $departamento['Computacion'], $titulo[$numcarrera], $carreras[$numcarrera]['II NIVEL'],'II');
			$objCARRERAS->ImprimirNivel();
		}
	
		if(isset($post['III'])){
			$objCARRERAS = new Departamento($departamento, $departamento['Computacion'], $titulo[$numcarrera], $carreras[$numcarrera]['III NIVEL'],'III');
			$objCARRERAS->ImprimirNivel();
		}

	}
	?>

</body>
</html>