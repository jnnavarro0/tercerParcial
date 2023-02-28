<?php
class rectangulo extends figura implements formulas{
    
    private $base;
    private $altura;

    function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
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
    
    public function GetTipo(){
        return "Resctangulo";
    }

    public function area(){
        return $this->base * $this->altura;
    }
    public function perimetro(){
        return 2 * ($this->base + $this->altura);
    }
}
