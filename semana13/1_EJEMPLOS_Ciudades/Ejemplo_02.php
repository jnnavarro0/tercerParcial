<?php
/*
  indices.php   */
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>EJERCICIO 1</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>
<h1> CAPITALES DE LAS PROVINCIAS </h1>

<?php
	  
	  //INDICES NUMERICOS
	 $cantones=array(array("QUITO","CAYAMBE","RUMIÑAHUI"),
	                 array("GUAYAQUIL","DAULE"),
	                 array("CUENCA","GUALACEO"),
	                 array("PORTOVIEJO","MANTA","ROCAFUERTE","CHONE","JIPIJAPA"));
	  
	  
	 //INDICES ASOCIATIVOS     
	 $capitales=array('Pichincha' => $cantones[0][0],
	                  'Guayas' => $cantones[1][0],
	                  'Azuay' => $cantones[2][0],
					  'Chimborazo' => "RIOBAMBA");
	           
	       	
 // IMPRIME LA ESTRUCTURA DE UN ARREGLO DE FORMA RECURSIVA	
    echo "<pre>";
    	print_r($capitales);
	echo "</pre>";  
	 
	// foreach
	echo "<br><br> LAS CAPITALES SON: <br>";
	foreach($capitales as $c){
		echo $c . "<br>";
	}
	echo "<br> <br> <br>"; 
	
	
	// foreach 2
	foreach($capitales as $in => $c){
	   //echo  "LA CAPITAL DE " . $in . " es " . $c . "<br>"; 
	  echo "La capital de $in es $c </br>";   
	}          

	// CIERRA EL ALGORITMO PHP   
?>
  
	
</body>

</html>
