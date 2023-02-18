<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carreras - Niveles - Departamentos - Materias</title>
</head>
<body>
	 <?php
		 	
	 $materias=array(
	 array("Fundamentos de Programacion","Programacion I","Programacion II","Programacion III","Matematicas Discretas","Multimedia","Mantenimiento PC","Comp Grafica","Estructura De Datos"), //Sistemas
	 array("Circuitos Digitales","Electronica Basica","Arquitectura de PC","Circuitos Electricos","Electrotecnia","Electronica Potencia","PICs","Maquinas I","Antenas"),//Electronica
	 array("Calculo Diferencial","Algebra Lineal","Calculo Vectorial","Estadistica I","Ecuaciones Diferenciales","Fisica I","Fisica II","FisicaIII"),//Exactas
	 array("COE","Metodologia Investigacion"),//Humnanas
	 array("Cinetica","Mecanica Fluidos","Estatica","Dinamica","Ciencia Materiales","Vectores")//Mecanica
								 );
	$departamento=array(
		 'Computacion'=>$materias[0],
		 'Electrica y electronica'=>$materias[1],
		 'Ciencias Exactas'=>$materias[2],
		 'Humanas y Sociales'=>$materias[3],
		 'Mecanica'=>$materias[4]
	 );
	 
	 
$sistemas= array (
		'I NIVEL' => array(
					'Computacion' => array ($materias[0][0]),
					'Electrica y electronica' => array ($materias[1][0],$materias[1][1]),
					'Ciencias Exactas' =>array ($materias[2][0],$materias[2][1]),
					'Humanas y Sociales' => array ($materias[3][0],$materias[3][1])
					),

        'II NIVEL'=>array(
					'Computacion' =>array ($materias[0][1],$materias[0][4],$materias[0][5]),
       				'Electrica y electronica' => array ($materias[1][2]),
       				'Ciencias Exactas' => array ($materias[2][2],$materias[2][3])
 					),

    	'III NIVEL' =>array(
					'Computacion' => array ($materias[0][2],$materias[0][6],$materias[0][7],$materias[0][8]),
	                'Ciencias Exactas' => array ($materias[2][4])
					)
	   			);

$electronica= array (
		'I NIVEL' => array(
		            'Computacion' => array ($materias[0][0]),
					'Electrica y electronica' => array ($materias[1][3]),
					'Ciencias Exactas' =>array ($materias[2][0],$materias[2][1],$materias[2][5]),
					'Humanas y Sociales' => array ($materias[3][0],$materias[3][1])
					),

		'II NIVEL'=>array(
                    'Computacion' =>array ($materias[0][2]),
					'Electrica y electronica' => array ($materias[1][4],$materias[1][5]),
					'Ciencias Exactas' => array ($materias[2][2],$materias[2][3])
					),

        'III NIVEL' =>array(
		            'Electrica y electronica' => array ($materias[1][6],$materias[1][7],$materias[1][8]),
					'Ciencias Exactas' => array ($materias[2][4])
					)
				);

$mecanica= array (
		'I NIVEL' => array(
				    'Computacion' => array ($materias[0][0]),
					'Mecanica' => array ($materias[4][0]),
					'Ciencias Exactas' =>array ($materias[2][0],$materias[2][1],$materias[2][5]),
					'Humanas y Sociales' => array ($materias[3][0])
					),

		'II NIVEL'=>array(
				    'Computacion' =>array ($materias[0][2]),
					'Mecanica' => array ($materias[4][1],$materias[4][2]),
					'Ciencias Exactas' => array ($materias[2][2],$materias[2][3],$materias[2][6])
					),
        
        'III NIVEL' =>array(
		            'Mecanica' => array ($materias[4][3],$materias[4][4],$materias[4][5]),
					'Ciencias Exactas' => array ($materias[2][4],$materias[2][7])
					)
				);



?>



</body>
</html>
 

