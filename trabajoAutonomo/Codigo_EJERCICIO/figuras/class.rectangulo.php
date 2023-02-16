<?php
class rectangulo extends figura implements formulas{
    
    private $lados;

    function __construct($tp, $a, $p, $lds){
        parent::__construct($tp, $a, $p);
        $this->lados = $lds;
    }

    public function GetArea(){
        return pow($this->lados, 2);
    }
    public function GetPerimetro(){
        return $this->lados * 4;
    }
    public function GetTipo(){
        return "Cuadrado";
    }

    public function area(){

    }
    public function perimetro(){

    }
}
?>
