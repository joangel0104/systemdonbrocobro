<?php 
	
	require 'conexion.php';

	$datos = $_POST;

	$ids = implode($datos['ids'], ',');
	

	$sql = "INSERT INTO `asistencias`(`asistencias`.`alumno_id`,`asistencias`.`fecha`) 
			SELECT `alumnos`.`id`,NOW() FROM `alumnos` where id IN (".$ids.")";

	$resultado = mysqli_query($conexion,$sql);

	$sql = "UPDATE `billetera`
			INNER JOIN `alumnos` on `billetera`.`alumno_id` = `alumnos`.`id`
			INNER JOIN `becas` on `becas`.`id` = `alumnos`.`beca_id`
			SET `billetera`.`numero_comida` = CASE 
				WHEN `billetera`.`numero_comida` > 0
				THEN `billetera`.`numero_comida` - 1 
				ELSE  `billetera`.`numero_comida` END,
				`billetera`.`credito_comida` = CASE 
				WHEN `billetera`.`numero_comida` = 0 
				AND `billetera`.`credito_comida` > 0 
				THEN `billetera`.`credito_comida` - 1 
				ELSE  `billetera`.`credito_comida` END
			WHERE `alumnos`.`id` IN (".$ids.")";

	$resultado = mysqli_query($conexion,$sql);
