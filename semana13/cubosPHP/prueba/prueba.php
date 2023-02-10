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
</head>

<body>
	<h1> PAISES DEL G8 </h1>

	<?php


	//INDICES ASOCIATIVOS     
	$Pais = array(
		'G8' => array(
			'EUROPA' => array("Alemania", "Francia", "Italia", "Reino Unido"),
			'ASIA' => array("Rusia", "Japón"),
			'AMERICA' => array("Estados Unidos", "Canada"),
			'AFRICA' => array("Sudafrica"),
			'OCEANIA' => null
		),

		'BRICS' => array(
			'EUROPA' => null,
			'ASIA' => array("Rusia", "India", "China"),
			'AMERICA' => array("Brasil"),
			'AFRICA' => array("Sudáfrica"),
			'OCEANIA' => null
		),

		'COMEBOL' => array(
			'EUROPA' => NULL,
			'ASIA' => NULL,
			'AMERICA' => array("Argentina", "Uruguay", "Chile", "Paraguay" ,"Brasil", "Peru", "Colombia", "Ecuador", "Colombia", "Venezuela", "Bolivia"),
			'AFRICA' => NULL,
			'OCEANIA' => NULL
		),

		'FIFA' => array(
			'EUROPA' => array("España", "Croacia", "Alemania"),
			'ASIA' => array("Korea del Sur", "Iran", "Arabia Saudita"),
			'AMERICA' => array("Canada", "USA", "Mexico"),
			'AFRICA' => array("Senegal", "Camerun"),
			'OCEANIA' => array("Nueva Zelanda", "Australia", "Islandia")
		)
	);

	// IMPRIME LA ESTRUCTURA DE UN ARREGLO DE FORMA RECURSIVA	
	echo "<pre>";
	print_r($Pais);
	echo "</pre>";


	echo  "</br> </br> PAISES DEL G8: </br> </br>";

	// IMPRIMA LA INFORMACION EN UNA TABLA  
	// LA PRIMERA FILA ES EL NOMBRE DE CADA CONTINENTE (CELDAS DE COLOR BLANCO CON NEGRILLAS) 
	// LAS SIGUIENTES FILAS TIENEN COLORES ALTERNADOS
	//  LAS CELDAS VACIAS SON DE COLOR PLOMO

	foreach ($Pais as $cara => $info) {


			   
		$html = '
    <table border=1 alingn="center">
    <tr>';


		echo "<br><br>";
		echo "PAIS : $cara  <br>  ";


		//CALCULO EL MAXIMO DE LAS COLUMAS DE LA MATRIZ
		$maxColum = null;
		foreach ($info as $prov => $arreglo) {
			$tam = count($info[$prov]);
			$maxColum = ($maxColum >= $tam) ? $maxColum : $tam;
		}

		// PRUEBA DE ESCRITORIO
		echo "MAXCOLUM: $maxColum <br> ";

		// TITULO DE LA TABLA
		$tam = count($info);
		echo "NUMERO DE PROVINCIAS: $tam <br> ";



		$html .= ' <tr>  
             <th colspan=" ' . $tam . '" bgcolor="#EC7063"> ' . $cara . ' </th>
             </tr>';

		// IMPRIMIR LA CABECERA
		foreach ($info as $prov => $arreglo) {
			$html .= "<th> $prov </th>";
		}

		// ALGORITMO PARA IMPRIMIR LA TABLA EN HTML 
		for ($f = 0; $f < $maxColum; $f++) {   // $max para recorrer hacia abajo
			$html .= '<tr>';
			foreach ($info as $data) {
				$html .= (isset($data[$f])) ? '<td bgcolor="#D6FAF2">' . $data[$f] . '</td>' : '<td bgcolor="#D6DEFA">&nbsp;</td>';
			}
			$html .= '</tr>';
		}

		$html .= "</tr>";
		$html .= "</table>";
		$html .= "<br> <br>";

		echo $html;
	}

	?>


</body>

</html>