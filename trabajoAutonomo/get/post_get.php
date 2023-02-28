
<?php
include("include/class.figura.php");
include("include/Interface.formulas.php");
include("figuras/class.cuadrado.php");
include("figuras/class.rectangulo.php");
include("figuras/class.triangulo.php");

$u=urldecode($_GET['post']);
    $post=unserialize($u);
    echo "<br>VARIABLE post: <br>";
    echo "<pre>";
        print_r($post);
    echo "</pre>";

    switch($_GET['d']){
        case "cuadrado":
            $f = new cuadrado($post['lado_1']);
            break;
        case "rectangulo":
            $f = new rectangulo($post['lado_1'],$post['lado_2']);
            break;
        case "2":
            case "triangulo": $f = new triangulo($post['lado_1'],$post['lado_2'],$post['lado_3']);
            break;
    }
    mostrar($f);

    


function mostrar(formulas $post){
    $post->area();
    $post->perimetro();
    echo "<form id='respuesta'";
    echo "<p id='sub'> Resultado: </p>";
    echo "<br><br>El área del " . $post->GetTipo() . " es:  " . $post->GetArea() . " m^2 <br>";
    echo "<br>El perímetro del " . $post->GetTipo() . " es:  " . $post->GetPerimetro(). " m";
    echo "<br><br><br><button class='action-button' name='regresar'><a href='index.php'>Regresar</a></button></form>";
}  

?>