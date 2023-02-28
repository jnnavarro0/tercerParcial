<?php
$p = urlencode(serialize($_POST));

//var_dump($p);
//var_dump($f);

$opcion = $_POST['tipo'];

header("location:post_get.php?post=$p&d=$opcion");


//echo show_data($_POST,$_FILES);
