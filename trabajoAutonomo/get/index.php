<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="js/funcion.js"></script>
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
	


</head>
<body>
	<h1> -- Áreas y Perímetros -- </h1>
	<br>
	<!--<select id="figuras" onchange="seleccionFig();">
		<option value="Cuadrado">Cuadrado</option>
		<option value="Rectangulo">Rectangulo</option>
		<option value="Triangulo">Triangulo</option>		
	</select>
	<br>
	<p id="texto"></p>
	<form id="formLados">
		<label></label>
		<input type="text" name=""></ins>

		
	</form>-->

	<?php
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.triangulo.php");


			echo figura::get_form();		

		/*
		
		function mostrar(formulas $fig){
			$fig->area();
			$fig->perimetro();
			echo "<form id='respuesta'";
			echo "<p id='sub'> Resultado: </p>";
			echo "<br><br>El área del " . $fig->GetTipo() . " es:  " . $fig->GetArea() . " m^2 <br>";
			echo "<br>El perímetro del " . $fig->GetTipo() . " es:  " . $fig->GetPerimetro(). " m";
			echo "<br><br><br><button class='action-button' name='regresar'><a href='index.php'>Regresar</a></button></form>";
		}
		
		*/


	?>
	
</body>

</html>
