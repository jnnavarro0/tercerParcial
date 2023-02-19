<?php
include_once("cubo.php");
require_once("clases/class.Nivel.php");	
require_once("clases/class.Departamento.php");

echo "<a href='../index.html'>Regresar</a>";

imprimirPoo();


//REGRESAR



function imprimirPoo(){
	global $sistemas,$mecanica,$electronica, $departamento;
	$titulo = ["SISTEMAS","ELECTRONICA","MECANICA"];
	$objSIS = new Departamento('',$departamento['Computacion'], $titulo[0],$sistemas);
    $objELE = new Departamento('',$departamento['Electrica y electronica'], $titulo[1],$electronica);
	$objMEC = new Departamento('',$departamento['Mecanica'], $titulo[2],$mecanica);
	$objELE->ImprimirNivel();
}
