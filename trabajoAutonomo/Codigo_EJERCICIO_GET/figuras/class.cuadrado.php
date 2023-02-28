<?php

class cuadrado extends figura implements formulas {

    private $lado;

    function __construct($lado) {
        $this->lado = $lado;
        $area = $this->area();
        $perimetro = $this->perimetro();
        parent::__construct('Cuadrado', $area, $perimetro);
    }

    public function GetArea() {
        return $this->area();
    }

    public function GetPerimetro() {
        return $this->perimetro();
    }

    public function GetTipo() {
        return "Cuadrado";
    }

    public function area() {
        return pow($this->lado, 2);
    }

    public function perimetro() {
        return $this->lado * 4;
    }
}
