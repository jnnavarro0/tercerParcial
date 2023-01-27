<?php


$numero = $_POST['txtNum'];

echo 'El factorial del numero:  '.$numero ;
function factorial($numero)
{
	$total=1;
	for ( $i = $numero ; $i >= 1 ; $i--) 
	{
		$total=$total*$i;
	}
	return $total;
}

$resultado=factorial($numero);
echo '<br>Da como resultado: '.$resultado;

$volver = '
<div alig="enter">
	<a href="index.html">Volver</a>
</div>';

echo $volver;