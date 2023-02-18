<?php
	abstract class Nivel{
		private $NomDep;//Nombre del departamento de carrera
		private $NumMat;//Materias por nivel

		//Constructor
		function __construct($Nom,$Num){
			$this->NomDep = $Nom;
			$this->NumMat = $Num;
		}

		public abstract function ImprimirNivel();

		public function GetNomDep(){
			return $this->NomDep;
		}

		public function GetNumMat(){
			return $this->NumMat;
		}
	}
?>
