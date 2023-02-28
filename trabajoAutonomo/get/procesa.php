<?php

include("include/class.figura.php");
include("include/Interface.formulas.php");
include("figuras/class.cuadrado.php");
include("figuras/class.rectangulo.php");
include("figuras/class.triangulo.php");

if(isset($_POST['calcular'])){
    switch($_POST['tipo']){
        case "cuadrado": $f = new cuadrado($_POST['lado_1']);break;
        case "rectangulo": $f = new rectangulo($_POST['lado_1'],$_POST['lado_2']);break;
        case "triangulo": $f = new triangulo($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3']);break;
    }
    mostrar($f);
}else{ 
    echo figura::get_form();
}

function mostrar(formulas $fig){

}

$opcion=$_POST['tipo'];

$p=urlencode(serialize($_POST));
header("location:post_get.php?post=$p&d=$opcion");


?>