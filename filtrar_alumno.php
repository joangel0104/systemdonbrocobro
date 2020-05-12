<?php
  
$conexion=mysqli_connect('localhost','root','','servidor.cobro');
$v1=$GET['tipo_grado'];
$v2=$_GET['tipo_seccion'];

$sql="	SELECT alumnos.codigo AS codigo,
       alumnos.nombre AS nombre,
        alumnos.observacion AS observacion,
        alumnos.celular AS celular,
        becas.nombre AS tipo_beca ,
        alumnos.grado AS grado,
        alumnos.seccion AS seccion,
        alumnos.estatus AS estatus
        FROM `alumnos` 
        INNER JOIN becas ON alumnos.beca_id = becas.id
        WHERE alumnos.grado='v1'AND alumnos.seccion='v2'   ";


$result=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($stmt1, MYSQLI_NUM);



             $aux0=$row['0'];
             $aux1=$row['1'];
             $aux2=$row['2'];
             $aux3=$row['3']; 
             $aux4=$row['4']; 
             $aux5=$row['5']; 
             $aux6=$row['6']; 
             $aux7=$row['7']; 



$tabla= "	<table id='tabla_factura'>
				<thead>
					<tr>
						<th>Código</th>
				        <th>Nombre y Apellido</th>
						<th>Observaciones</th>
						<th>Teléfono Representante </th>
						<th>Tipo Alumno</th>
						<th>Grado</th>
						<th>Sección</th>
						<th>Estatus</th>
						
					</tr>
				</thead>
				<tbody id='content_table'>";
 {
	$fila = "<tr>";
	$fila .= "<td>".$aux0."</td>";
	$fila .= "<td>".$aux1."</td>";
	$fila .= "<td>".$aux2."</td>";
	$fila .= "<td>".$aux3."</td>";
	$fila .= "<td>".$aux4."</td>";
	$fila .= "<td>".$aux5."</td>";
	$fila .= "<td>".$aux6."</td>";
	$fila .= "<td>".$aux7."</td>";
	
	$fila .= "</tr>";
	$tabla.=$fila;
}


echo $tabla;

         
?>