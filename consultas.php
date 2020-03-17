<?php 

	require 'conexion.php'

	$fecha = date('Y-m-d');

	$sql = "SELECT 	COUNT(`asistencias`.`id`) as comidas, 
					`alumnos`.`grado` as grado, 
					`alumnos`.`seccion` as seccion
			FROM `alumnos` 
			INNER JOIN `asistencias`.`alumno_id` = `alumnos`.`id`
			WHERE `asistencias`.`fecha` ='".$fecha."' 
			GROUP BY `alumnos`.`grado`, `alumnos`.`seccion`"

	var_dump($sql);

	$resultado = mysqli_query($conexion, $sql);

	$resultados = [];
	while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
		$resultados[] = $fila;
	}

	var_dump($resultados);
	