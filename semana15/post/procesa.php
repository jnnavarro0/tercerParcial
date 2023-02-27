<?php

//****************************************************************
function get_name_file($nombre_original, $tamanio){
	$tmp = explode(".",$nombre_original); //Divido el nombre por el punto y guardo en un arreglo
	
	/*
		echo "<br>TEMP: <br>";
			echo "<pre>";
				print_r($tmp);
			echo "</pre>"; 
	*/
	
	$numElm = count($tmp); //cuento el número de elemetos del arreglo
	$ext = $tmp[$numElm-1]; //Extraer la última posición del arreglo.
	
	$cadena = "";
	for($i=1;$i<=$tamanio;$i++){
		$c = rand(65,122);
		if(($c >= 91) && ($c <=96)){
			$c = NULL;
			 $i--;
		 }else{
		    $cadena .= chr($c);
		 }
	}
	
	//echo "ARCHIVO TEMPORAL: " . $cadena . "." . $ext . "<br><br><br>";
	return $cadena . "." . $ext;
	
}


//*******************************************************************
function show_data($post, $files){
	$nombre_foto = 'images/' . get_name_file($files['foto']['name'],8);
	move_uploaded_file($files['foto']['tmp_name'],$nombre_foto);
	
		
	//Algoritmo para manipular CheckBox
	$accesorios ="";
	
	if(isset($post['radio'])){
		$accesorios = "Radio<br>";
	}
	
	if(isset($post['aros'])){
		$accesorios .= "Aros";
	}
	
	
	$html = '
	<table border=1 align="center">
		<tr>
			<th colspan="2">DATOS DEL VEHÍCULO</th>
		</tr>
		<tr>
			<td>Placa: </td>
			<td>' . $post['placa'] . '</td>
		</tr>
		<tr>
			<td>Marca: </td>
			<td>' . $post['marca'] . '</td>
		</tr>
		<tr>
			<td>Combustible: </td>
			<td>' . $post['combustible'] . '</td>
		</tr>
		<tr>
			<td>Accesorios: </td>
			<td>' . $accesorios . '</td>
		</tr>
		<tr>
			<td>Comentarios: </td>
			<td>' . $post['comentarios'] . '</td>
		</tr>
		<tr>
			<th colspan="2"><img src="' . $nombre_foto . '" width="300px"></th>
		</tr>

         <tr>
		   <th colspan="2"><a href="index.html">Continuar .....</a>
		 </tr>
		 
	</table>';
	
	return $html;
}
//*********************************************************************************
		echo "<br>PETICION POST: <br>";
			echo "<pre>";
				print_r($_POST);
			echo "</pre>";
			
		echo "<br> VARIABLE FILES: <br>";
			echo "<pre>";
				print_r($_FILES);
			echo "</pre>";   


echo show_data($_POST,$_FILES);
//header("location: metodoPOST.php");

?>
