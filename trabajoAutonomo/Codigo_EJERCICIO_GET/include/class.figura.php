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
	abstract class figura
	{
		private $tipo;
		private $a; //area
		private $p; //perimetro

		function __construct($tp, $area, $perimetro)
		{
			$this->tipo = $tp;
			$this->a = $area;
			$this->p = $perimetro;
		}

		public static function get_form()
		{
			$html = '
			<p><br><br></p>
			<center><div class="col-lg-3">
			<form name="figuras" method="POST" action="./procesa.php" class="container">
			<table border=1 align="center" class="table table-striped">
				<tr class="table-success">
					<th colspan="2"><center>INGRESO DATOS DE LA FIGURA</center></th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select class="form-select" aria-label="Default select example" name="tipo" OnChange="validar(this.value)">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input class="form-control" type="text" name="lado_1" id="lado_1"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input class="form-control" type="text" name="lado_2" id="lado_2"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input class="form-control" type="text" name="lado_3" id="lado_3"size="4" disabled></td>
				</tr>	
				<tr>
					<th colspan="2"><center><input type="submit" name="calcular" value="Calcular"></center></th>
				</tr>						
			</table>
			</form>
			</div></center>
			<script src="./script/script.js" type="text/javascript"></script>
			';
			return $html;
		}

		// METODOS ABSTRACTOS	
		public abstract function GetArea();
		public abstract function GetPerimetro();
		public abstract function GetTipo();
	}
	?>
</body>

</html>