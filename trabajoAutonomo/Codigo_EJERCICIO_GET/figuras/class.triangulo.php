<?php
class triangulo extends figura implements formulas{
    private $lado1;
    private $lado2;
    private $lado3;

    function __construct($ld1, $ld2, $ld3) {
        $this->lado1 = $ld1;
        $this->lado2 = $ld2;
        $this->lado3 = $ld3;
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
        $semiperimetro = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        return sqrt($semiperimetro * ($semiperimetro - $this->lado1) * ($semiperimetro - $this->lado2) * ($semiperimetro - $this->lado3));
    }
    public function perimetro(){
        return $this->lado1 + $this->lado2 + $this->lado3;
    }
}
