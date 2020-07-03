<?php
  
$conexion=mysqli_connect('localhost','root','','servidor.cobro');
 $tipo_grado=($_GET['tipo_grado']);
 $tipo_seccion=($_GET['tipo_seccion']);


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
        WHERE alumnos.grado='$tipo_grado'AND alumnos.seccion='$tipo_seccion'   ";


$result=mysqli_query($conexion,$sql);

$resultados = [];
$i = 1;
while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	$resultados[] = $row;
	$resultados[$i-1][6] = $i;
	$i++;
}


$tabla= "	<table class='order-table table' id='tabla_2'>
				<thead>
					<tr>
						<th>Código</th>
				        <th>Nombre y Apellido</th>
						<th>Observaciones</th>
						<th>Teléfono Contacto </th>
						<th>Tipo Alumno</th>
						<th>Grado</th>
						<th>Sección</th>
						<th>Estatus</th>
						<th>Actualizar</th>
						
					</tr>
				</thead>
				<tbody id='content_table'>";
 foreach ($resultados as $key => $value) {
	$fila = "<tr>";
	$fila .= "<td>".$value['codigo']."</td>";
	$fila .= "<td>".$value['nombre']."</td>";
	$fila .= "<td>".$value['observacion']."</td>";
	$fila .= "<td>".$value['celular']."</td>";
	$fila .= "<td>".$value['tipo_beca']."</td>";
	$fila .= "<td>".$value['grado']."</td>";
	$fila .= "<td>".$value['seccion']."</td>";
	$fila .= "<td>".$value['estatus']."</td>";
	$fila .= "<td>".'<a href="#" onclick="ver_id()">  
      <img height="20" src="images/actualizado.png">Actualizar</a>'."</td>";
	$fila .= "</tr>";
	$tabla.=$fila;
}

echo $tabla;

         
?>
 
                                       
                             