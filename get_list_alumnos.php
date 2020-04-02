<?php 

	require 'conexion.php';
    date_default_timezone_set("America/Mexico_City");
	$fecha = date("Y-m-d");

	$sql= "	SELECT `alumnos`.`grado`,`alumnos`.`seccion` 
			From `alumnos` 
			LEFT Join `billetera` on `alumnos`.`id` = `billetera`.`alumno_id`
			Inner Join `becas` on `alumnos`.`beca_id` = `becas`.`id`
			Where ((`billetera`.`numero_comida`+`billetera`.`credito_comida`) > 0 
			OR (`becas`.`precio_comida`) = 0) 
			AND (`alumnos`.`id` NOT IN (SELECT `asistencias`.`alumno_id` FROM `asistencias` WHERE `asistencias`.`fecha` = '".$fecha."'))
			Group by `alumnos`.`grado`, `alumnos`.`seccion`
			Order by `alumnos`.`grado` ASC, `alumnos`.`seccion` ASC";

	$resultado = mysqli_query($conexion, $sql);
	$resultados = [];
	while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
		$resultados[] = $fila;
	}

	foreach ($resultados as $key => $value) {
		$resultados[$key]['alumnos'] = Alumnos_por_grupos($value,$conexion,$fecha);
	}

	echo json_encode($resultados);

	function Alumnos_por_grupos($valor,$conexion,$fecha) {

		$sql = "SELECT 	`alumnos`.`id`,`alumnos`.`nombre`, `alumnos`.`codigo`
				From 	`alumnos` 
				LEFT Join `billetera` on `alumnos`.`id` = `billetera`.`alumno_id`
				Inner Join `becas` on `alumnos`.`beca_id` = `becas`.`id`
				Where 	`alumnos`.`grado` ='".$valor['grado']."' 
				AND 	`alumnos`.`seccion` = '".$valor['seccion']."'
				AND 	((`billetera`.`numero_comida`+`billetera`.`credito_comida`) > 0 OR `becas`.`precio_comida` = 0)
				AND (`alumnos`.`id` NOT IN (SELECT `asistencias`.`alumno_id` FROM `asistencias` WHERE `asistencias`.`fecha` = '".$fecha."'))
				Order by `alumnos`.`nombre` ASC";
		$resultado = mysqli_query($conexion, $sql);
		$resultados = [];
		while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
			$resultados[] = $fila;
		}
		return $resultados;
	}
	die;
	