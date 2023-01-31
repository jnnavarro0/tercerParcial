<?php
/*
 * ciudades.php
 * 
 * Copyright 2017 ESPE <ESPE@LAPTOP_DELL>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>ARREGLOS</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>
	<?php
	 $Color = array ("BLANCO", "ROJO", "VERDE");
	 $C=["BLANCO","ROJO","VERDE"];
	 $datos=["Juan",44,1500.25];
	 
	  $ciud=array("PICHINCHA","CAYAMBE","RUMIÑAHUI","PORTOVIEJO");
	 
	 $ciudades=array(array("PICHINCHA","CAYAMBE","RUMIÑAHUI"),
	                 array("GUAYAQUIL","DAULE"),
	                 array("CUENCA","GUALACEO"),
	                 array("PORTOVIEJO","MANABI","ROCAFUERTE","CHONE","JIPIJAPA"));
	 
	                 
	 
// IMPRIMIR A LA CRIOLLA
 for ($f=0; $f < count($ciudades); $f++){
		for($c=0; $c < count ($ciudades[$f]); $c++)
		   echo $ciudades[$f][$c] . "            ";
		echo "<br>";
	}   
echo "<br> <br> <br>"; 

// IMPRIME LA ESTRUCTURA DE UN ARREGLO DE FORMA RECURSIVA	
echo "<pre>";
print_r($ciudades);
echo "</pre>";  
	
     ?>                    



	
</body>

</html>
