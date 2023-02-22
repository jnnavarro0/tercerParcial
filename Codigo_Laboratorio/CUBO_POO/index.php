
	<?php
	include_once("cubo.php");
	require_once("clases/class.Nivel.php");
	require_once("clases/class.Departamento.php");	

	$numcarrera = $_POST['carrera'];

	if (!isset($_POST['carrera']))
		header('location: ./user.php');

	global $carreras;

	echo '<a href="./index.php">Regresar</a><br><h1 class="text-center">' . $carreras[$numcarrera] . '</h1><br>';

	imprimirPoo($numcarrera);

	//REGRESAR

	function imprimirPoo($numcarrera)
	{
		global $sistemas, $mecanica, $electronica, $mecatronica, $civil, $biotecnologia, $departamento;

		$carreras = [$sistemas, $mecatronica, $civil, $biotecnologia, $electronica,  $mecanica];
		$titulo = ["SISTEMAS", "MECATRÓNICA", "CIVIL", "BIOTECNOLOGÍA", "ELECTRONICA", "MECÁNICA"];

		$objCARRERAS = new Departamento('Computacion', $departamento['Computacion'], $titulo[$numcarrera], $carreras[$numcarrera]);
		$objCARRERAS->ImprimirNivel();
	}
	?>

