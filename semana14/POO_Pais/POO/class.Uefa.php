
<?php
class Uefa extends Pais
{

	private $campeon;      // LA CARA
	private $subcampeon;      // LA CARA
	private $anio;   // Numero total de ciudades que tiene un pais

	// CONSTRUCTOR
	function __construct($camp, $sub, $an, $NomPais, $data)
	{
		parent::__construct($NomPais, count($data));
		$this->campeon = $camp;
		$this->subcampeon = $sub;
		$this->anio = $an;
	}

	// IMPLEMENTAR METODOS	


	public function GetCampeon()
	{
		return $this->campeon;
	}

	public function GetSubcampeon()
	{
		return $this->subcampeon;
	}

	public function GetAnio()
	{
		return $this->anio;
	}
}
?>
