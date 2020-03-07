<?php 

	//require_once('Librerias/Tickera.php');
	require_once './Librerias/Tickera.php';
	$valores = get_declared_classes();
	var_dump($valores[sizeof($valores)-1]);
	var_dump(class_exists($valores[sizeof($valores)-1]));

	$tickera = new Librerias\Tickera();
	$tickera->test();
	
	
?>