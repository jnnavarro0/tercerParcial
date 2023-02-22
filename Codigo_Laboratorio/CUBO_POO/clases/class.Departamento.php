<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php

    use JetBrains\PhpStorm\Internal\ReturnTypeContract;

    class Departamento extends Nivel
    {
        private $Carrera;    // Matriz de datos
        private $titulo;

        function __construct($Nom, $Num, $titulo, $Carrera)
        {
            parent::__construct($Nom, count($Num));
            $this->Carrera = $Carrera;
            $this->titulo = $titulo;
        }

        public function GetCarrera()
        {
            return $this->Carrera;
        }

        public function Gettitulo()
        {
            return $this->titulo;
        }


        public function CalcularMaxColum($cara)
        {
            $maxColum = null;
            foreach ($cara as $prov => $arreglo) {
                // $numProv = count($data[$prov]);
                $tam = count($cara[$prov]);
                $maxColum = ($maxColum >= $tam) ? $maxColum : $tam;
            }

            return $maxColum;
        }


        public function ImprimirNivel()
        {
            $niveles = [];
            $cont = 0;

            foreach ($this->GetCarrera() as $indice => $materias) {
                $niveles[$cont] = $indice;
                $cont++;
            }

            $cont = 0;

            foreach ($this->GetCarrera() as $indice => $materias) {
                if ($indice == $niveles[$cont]) {

                    $table = '<div class="container"><center><table class="table table-bordered table-striped"><tr><td colspan=' . 
                    count($materias) .' class="table-success"><center><b>' . $indice . ' de ' . $this->Gettitulo() . 
                    '</b></center></td></tr><tr>';

                    foreach ($materias as $carrera => $materia)
                        $table .= '<th class="table-secondary">' . $carrera . '</th>';

                    $table .= '</tr>';

                    for ($i = 0; $i < $this->CalcularMaxColum($materias); $i++) {

                        $table .= '<tr>';

                        foreach ($materias as $carrera => $materia)
                            $table .= (isset($materia[$i])) ? '<td>' . $materia[$i] . '</td>' : '<td></td>';

                        $table .= '</tr>';
                    }

                    $table .= '</table></center></div>';
                }

                echo '<br>' . $table . '<br><br>';
                $cont++;
            }
        }
    }
    ?>

</body>

</html>
