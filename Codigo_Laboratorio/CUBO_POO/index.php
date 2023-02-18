<?php
include_once("cubo.php");
require_once("clases/class.Nivel.php");	
require_once("clases/class.Departamento.php");

imprimirPoo();


//REGRESAR
echo "<a href='../index.html'>Regresar</a>";


function imprimirPoo(){
	global $sistemas,$mecanica,$electronica;
	$titulo = ["SISTEMAS","ELECTRONICA","MECANICA"];
	$objSIS = new Departamento($titulo[0],$sistemas);
    $objELE = new Departamento($titulo[1],$electronica);
	$objMEC = new Departamento($titulo[2],$mecanica);
    $objSIS->ImprimirNivel();
	$objELE->ImprimirNivel();
	$objMEC->ImprimirNivel();
}

?>