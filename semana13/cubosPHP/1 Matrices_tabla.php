<?php
/*
  indices.php   */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>EJERCICIO 2</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>
	<h1> INDICES ASOCIATIVOS</h1>

	<?php

	//INDICES NUMERICOS
	$cantones = array(
		array("QUITO", "CAYAMBE", "RUMIÑAHUI"),
		array("GUAYAQUIL", "DAULE"),
		array("CUENCA", "GUALACEO"),
		array("PORTOVIEJO", "MANTA", "ROCAFUERTE", "PERDERLANES")
	);



	// MATRICES ASOCIATIVAS	           
	$ciudades = [
		'Pichincha' => array("QUITO", "CAYAMBE", "RUMIÑAHUI", "MEJIA"),
		'Guayas' => array($cantones[1][0], $cantones[1][1]),
		'Azuay' => ["Cuenca"],
		'Manabi' => $cantones[3],
		'Tunguragua' => array ("Ambato", "Buenos Aires", "Lima", "Bogota")
	];

	// IMPRIME LA ESTRUCTURA DE UN ARREGLO DE FORMA RECURSIVA	
	echo "<pre>";
	print_r($ciudades);
	echo "</pre>";
	echo "<br>";


	?>


	<!-- CREA UNA TABLA EN HTML	 -->
	<table border=1 style="text-align:center;width:80%">

		<!-- CREA CODIGO PHP  -->
		<?php
		$tam = count($ciudades);  //CUENTA EL TOTAL DE FILAS DE LA MATRIZ
		echo "<br>NUMERO DE PROVINCIAS:  $tam <br>";
		$html = NULL;
		$maxColum = 0;


		// ************* AVERIGUA LA MAXIMA COLUMNA DE LA TABLA ***********************
		foreach ($ciudades as $f => $info) {
			//for($i=0;$i<$tam;$i++){
			$tam2 = count($info);   // AVERIGUA EL TAMAÑO DE COLUMNAS POR CADA FILA
			//echo "tam2: $tam2 <br>";
			$maxColum = ($maxColum >= $tam2) ? $maxColum  : $tam2;   // ALMACENA EL VALOR MAXIMO DE LAS COLUMNAS DE LA MATRIZ
		}
		//****************************************************


		echo "<br>MAXCOLUM:  $maxColum <br>";
		// $html .= 'CODIGO HTML'    .  $variable  . 'CODIGO HTML' ;

		$html .= ' <tr>  
  <th colspan=" ' . $maxColum . '" bgcolor="#EC7063">ECUADOR</th>
  </tr>';

		// ALGORITMO PARA IMPRIMIR EN UNA PAGINA WEB UTILIZANDO TABLAS EN FORMA DINAMICA
		$bandera = true;
		foreach ($ciudades as $f => $info) {    // RRECORRE LAS FILAS

			// ALTERNAR LOS COLORES DE LA FILA EN UNA TABLA
			if ($bandera)
				$html .= '<tr bgcolor="#D6FAF2">';
			else
				$html .= '<tr bgcolor="#D6DEFA">';               // CREA CADA FILA HTML

			$bandera = !$bandera;


			// *****  CREA CADA COLUMNA EN HTML *************
			for ($c = 0; $c < $maxColum; $c++) {
				if (empty($ciudades[$f][$c]))  // AVERIGUA SI LA CADENA ES VACIA
					$html .= '<td bgcolor="#454444">' . ' </td>';    // IMPRIME UNA CELDA DE COLOR PLOMO
				else
					$html .= '<td>' . $ciudades[$f][$c] . ' </td>';  // IMPRIME EL VALOR DE LA CELDA      

				//   $html.= (empty($ciudades[$f][$c])) ? "<td bgcolor='#454444'>" . " </td>" : "<td> " . $ciudades[$f][$c] . " </td>" ;
			}

			$html .= '</tr>';  // CIERRA LA FILA HTML
		}

		// IMPRIME TODA LA TABLA  
		echo $html;

		// CIERRA EL ALGORITMO PHP   
		?>

	</table>


</body>

</html>