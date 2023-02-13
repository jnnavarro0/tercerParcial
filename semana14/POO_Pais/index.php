<?php
/*
  PAISES CUBOS _POO
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>

	<?php

	include_once("./POO/class.Nacion.php");
	include_once("POO/class.Pais.php");



	$titulo = ["ECUADOR", "ESTADOS UNIDOS", "ARGENTINA", "ESPAÑA"];

	// INDICES NUMERICOS
	$cantonesECU = array(
		array("QUITO", "CAYAMBE", "RUMIÑAHUI"),
		array("GUAYAQUIL", "DAULE"),
		array("CUENCA", "CHORDELEC"),
		array("MANTA", "CHONE", "JIPIJAPA", "PUERTO LOPEZ", "ROCAFUERTE", "SUCRE")
	);


	// INDICES ASOCIATIVOS
	$ciudadesECU = array('ECUADOR' => array(
		'Pichincha' => array($cantonesECU[0][0], $cantonesECU[0][1], $cantonesECU[0][2]),
		'Guayas' => array($cantonesECU[1][0], $cantonesECU[1][1]),
		'Azuay' => array($cantonesECU[2][0], $cantonesECU[2][1]),
		'Manabi' => $cantonesECU[3],
		'Esmeraldas' => array("ATACAMES", "TONSUPA")
	));

	$ciudadesUSA = array('USA' => array(
		'NEW YORK' => ["BUFALO", "ALBANY", "TROY", "NEW YORK"],
		'PENSILVANNIA' => ["FILALDEFIA", "PISTBURG"],
		'FLORIDA' => ["MIAMI", "ORLANDO", "TAMPA", "FORT LOUDARLE"],
		'COLORADO' => ["GOLDEN", "AVON", "DURANGO", "COMMERCECITY", "STERLING", "PUEBLOWEST"]
	),);

	$ciudadesArgentina = array('ARGENTINA' => array(
		'BUENOS AIRES' => ["BUFALO", "ALBANY", "TROY", "NEW YORK"],
		'JUJUY' => ["FILALDEFIA", "PISTBURG"],
		'LA PAMPA' => ["MIAMI", "ORLANDO", "TAMPA"]
	),);

	$ciudadesColombia = array('COLOMBIA' => array(
		'ANTIOQUIA' => ["MEDELLIN", "PASTO"],
		'ARAUCA' => ["RUMBA", "BOGOTA", "BARANQUILLA"]
	),);

	







	$objECU = new Pais($titulo[0], $ciudadesECU);
	$objUSA = new Pais($titulo[1], $ciudadesUSA);
	$objArgentina = new Pais($titulo[2], $ciudadesArgentina);
	$objColombia = new Pais($titulo[3], $ciudadesColombia);

	$objECU->
	$arrayPaises = [$objECU, $objUSA, $objArgentina, $objColombia];

	for ($i = 0; $i < count($arrayPaises); $i++) {
		$html = '<h2>';
		$html .= $arrayPaises[$i]->GetNombPais() . '</h2>';
		echo $html;

		// IMPRIME EL NUMERO DE CANTONES
		$cara = $arrayPaises[$i]->GetCiudades();

		/*
	echo "<pre>";
    	print_r($cara);
	echo "</pre>";  
	*/

		$arrayPaises[$i]->CalcularMaxColum($cara);
		echo "NUMERO DE PROVINCIAS: " . count($cara) . "<br>";
		echo "NUMERO DE CANTONES: " . $arrayPaises[$i]->GetNumCuidades() . "<br>";

		//IMPRIMIR LA TABLA DE DATOS
		$arrayPaises[$i]->ImprimirNacion();
	}



	?>


</body>

</html>