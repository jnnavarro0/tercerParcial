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
        private $numnivel;

        function __construct($Nom, $Num, $titulo, $Carrera, $numnivel)
        {
            parent::__construct($Nom, count($Num));
            $this->Carrera = $Carrera;
            $this->titulo = $titulo;
            $this->numnivel = $numnivel;
        }

        public function GetCarrera()
        {
            return $this->Carrera;
        }

        public function Gettitulo()
        {
            return $this->titulo;
        }

        public function Getnumnivel()
        {
            return $this->numnivel;
        }


        public function CalcularMaxColum($cara)
        {
            $maxColum = null;
            foreach ($cara as $arreglo) {
                // $numProv = count($data[$prov]);
                $tam = count($arreglo);
                $maxColum = ($maxColum >= $tam) ? $maxColum : $tam;
            }

            return $maxColum;
        }


        public function ImprimirNivel()
        {

            $table = '<div class="container"><center><table class="table table-bordered table-striped"><tr><td colspan=' .
                count($this->GetCarrera()) . ' class="table-success"><center><b>  '. $this->Getnumnivel() . ' NIVEL de ' . $this->Gettitulo() .
                '</b></center></td></tr>';

            foreach ($this->GetCarrera() as $indices => $departamentos)
                $table .= '<th class="table-secondary">' . $indices . '</th>';

            $table .= '</tr>';


            for ($i = 0; $i < $this->CalcularMaxColum($this->GetCarrera()); $i++) {
                $table .= '<tr>';
                foreach ($this->GetCarrera() as $materias)
                    $table .= (isset($materias[$i])) ? '<td>' . $materias[$i] . '</td>' : '<td></td>';

                $table .= '</tr>';
            }

            $table .= '</table></center></div>';
            echo '<br>' . $table . '<br><br>';
        }
    }
    ?>

</body>

</html>