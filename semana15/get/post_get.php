<?php
//****************************************************************
function data($data, $files,$label){
	$nombre_foto = 'images/' . $files['foto']['name'];

	$html = '
	<table border=1 align="center">
		<tr>
			<th colspan="2">DATOS DEL VEHÍCULO</th>
		</tr>
		<tr>
			<td>' . $label . '</td>
			<td>' . $data . '</td>
		</tr>
		<tr>
			<th colspan="2"><img src="' . $nombre_foto . '" width="300px"></th>
		</tr>	
        <tr>
			<th colspan="2"><a href="index.html"> Regresar</a></th>
		</tr>			
	</table>';
	
	return $html;
}

//*******************************************************************
function show_data($post, $files){
	$nombre_foto = 'images/' . $files['foto']['name'];

	
	
	//Algoritmo para manipular CheckBox
	$accesorios ="";
	if(isset($post['radio'])){
		$accesorios = "Radio<br>";
	}
	
	if(isset($post['aros'])){
		$accesorios .= "Aros";
	}
	
	if(empty($post['radio']) && empty($post['aros'])){
		$accesorios="Sin accesorios<br>";
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
			<td>' . utf8_decode($post['marca']) . '</td>
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
			<th colspan="2"><a href="index.html"> Regresar</a></th>
		</tr>		
	</table>';
	
	return $html;
}
//*********************************************************************************
echo "<br>PETICION GET: <br>";
echo "<pre>";
		print_r($_GET);
echo "</pre>";
			
    

    $u=urldecode($_GET['post']);
    $post=unserialize($u);
	
	 echo "<br>VARIABLE post: <br>";
			echo "<pre>";
				print_r($post);
			echo "</pre>";
	
    $v=urldecode($_GET['file']);
    $file=unserialize($v);
				
			echo "<br> VARIABLE file: <br>";
			echo "<pre>";
				print_r($file);
			echo "</pre>"; 
    
    switch($_GET['d']){
        case "0":
            echo show_data($post,$file);
            break;
        case "1":
            echo data($post['placa'],$file,"Placa: ");
            break;
        case "2":
            echo data($post['marca'],$file,"Marca: ");
            break;
        case "3":
            echo data($post['combustible'],$file,"Combustible: ");
            break;
    }
    
 //   echo "<br> <br>";
 //   echo "<a href='index.html'> Regresar</a>";
?>