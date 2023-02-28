<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php
    include("include/class.figura.php");
    include("include/Interface.formulas.php");
    include("figuras/class.cuadrado.php");
    include("figuras/class.rectangulo.php");
    include("figuras/class.triangulo.php");

    $u = urldecode($_GET['post']);
    $post = unserialize($u);
    /*echo "<br>VARIABLE post: <br>";
    echo "<pre>";
        print_r($post);
    echo "</pre>";*/

    switch ($_GET['d']) {
        case "cuadrado":
            $f = new cuadrado($post['lado_1']);
            break;
        case "rectangulo":
            $f = new rectangulo($post['lado_1'], $post['lado_2']);
            break;
        case "2":
        case "triangulo":
            $f = new triangulo($post['lado_1'], $post['lado_2'], $post['lado_3']);
            break;
    }
    mostrar($f);




    function mostrar($post)
    {
        $post->area();
        $post->perimetro();
        $html = '
    <center><div class="container">
    <div class="col-lg-3">
    <form id="respuesta table">
    <p id="sub"> Resultado: </p>
    <br><br>El área del ' . $post->GetTipo() . ' es:  ' . $post->GetArea() . ' m^2 <br>
    <br>El perímetro del ' . $post->GetTipo() . ' es:  ' . $post->GetPerimetro() . ' m
    <br><br><br><button class="action-button" name="regresar"><a href="index.php">Regresar</a></button>
    </form>
    </div>
    </div></center>';

    echo $html;
    }

    ?>
</body>

</html>