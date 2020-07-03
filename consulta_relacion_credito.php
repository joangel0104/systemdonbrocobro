<?php
  
$conexion=mysqli_connect('localhost','root','','servidor.cobro');
$codigo = $_POST['codigo'];

      $sql="SELECT `becas`.* FROM `becas` 
		    INNER JOIN `alumnos` ON `becas`.`id` =`alumnos`.`beca_id`
		    WHERE `alumnos`.`codigo` = $codigo
		    LIMIT 1";
            $result=mysqli_query($conexion,$sql);
            $datos=mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo json_encode($datos);
?>