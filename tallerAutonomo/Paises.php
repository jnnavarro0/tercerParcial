<?php
/*
  indices.php   */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>EJEMPLO 02</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<h1> PAISES DEL G8 </h1>

	<?php


	//INDICES ASOCIATIVOS     
	$G8 = array(
		'EUROPA' => array("Alemania", "Francia", "Italia", "Reino Unido"),
		'ASIA' => array("Rusia", "Japón"),
		'AMERICA' => array("Estados Unidos", "Canada"),
		'AFRICA' => array("Sudafrica"),
		'OCEANIA' => null
	);

	// IMPRIME LA ESTRUCTURA DE UN ARREGLO DE FORMA RECURSIVA	
	/*echo "<pre>";
	print_r($G8);
	echo "</pre>";*/


	echo  "</br> </br> PAISES DEL G8: </br> </br>";

	// IMPRIMA LA INFORMACION EN UNA TABLA  
	// LA PRIMERA FILA ES EL NOMBRE DE CADA CONTINENTE (CELDAS DE COLOR BLANCO CON NEGRILLAS) 
	// LAS SIGUIENTES FILAS TIENEN COLORES ALTERNADOS
	//  LAS CELDAS VACIAS SON DE COLOR PLOMO
	
	$color = array('danger', 'info', 'warning', 'primary');

	echo '<div class="container"><table class="table"><thead>';
	foreach ($G8 as $indice => $continente)
		echo "<th> $indice </th>";
	echo '</thead><tbody>';

	for ($i = 0; $i < count($G8) - 1; $i++) {
		echo '<tr class="table-'. $color[$i]. '">';
		foreach ($G8 as $indice => $continente) {
			echo (isset($G8[$indice][$i])) ? '<td>' . $G8[$indice][$i] . '</td>' : '<td class="table-secondary"></td>';
		}
		echo '</tr>';
	}
	echo '</tbody></table></div>'
	?>
</body>

</html>