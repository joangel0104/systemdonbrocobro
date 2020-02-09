<?php
  
$conexion=mysqli_connect('localhost','root','','servidor.cobro');
$fecha = date('Y-m-d');
$sql="	SELECT 
			tabla_alumno.nombre_alumno as nombre, 
		    tabla_alumno.grado_alumno as grado,  
		    tabla_alumno.seccion_alumno as seccion, 
		    tabla_control_pago.id_tipo_pago as forma_pago, 
		    tabla_control_pago.monto_pago as monto_pagado, 
		    tabla_control_pago.cantidad_comida_dia as n_comida,
		    tabla_control_pago.credito_pago as credito,
		    tabla_control_pago.fecha_pago as fecha
		FROM `tabla_alumno` 
		INNER JOIN tabla_control_pago ON tabla_alumno.id_alumno = tabla_control_pago.id_alumno
		WHERE tabla_control_pago.fecha_pago = '$fecha'
		ORDER BY tabla_control_pago.id_control_pago ASC";
$result=mysqli_query($conexion,$sql);
$resultados = [];
$i = 1;
while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	$resultados[] = $row;
	$resultados[$i-1]['numero'] = $i;
	$i++;
}
//$monto = round($monto,2,PHP_ROUND_HALF_UP);

$total = 0;

$tabla= "	<table id='tabla_factura'>
				<thead>
					<tr>
						<th>N°</th>
				        <th>Nombre y Apellido</th>
						<th>Grado</th>
						<th>Seccion</th>
						<th>Forma de Pago</th>
						<th>monto Pagado</th>
						<th>N° Comida</th>
						<th>Credito</th>
						<th>Fecha Actual</th>
					</tr>
				</thead>
				<tbody id='content_table'>";
foreach ($resultados as $key => $value) {
	$fila = "<tr>";
	$fila .= "<td>".$value['numero']."</td>";
	$fila .= "<td>".$value['nombre']."</td>";
	$fila .= "<td>".$value['grado']."</td>";
	$fila .= "<td>".$value['seccion']."</td>";
	$fila .= "<td>".$value['forma_pago']."</td>";
	$fila .= "<td>".$value['monto_pagado']."</td>";
	$total+= (float)$value['monto_pagado'];
	$fila .= "<td>".$value['n_comida']."</td>";
	$fila .= "<td>".$value['credito']."</td>";
	$fila .= "<td>".$value['fecha']."</td>";
	$fila .= "</tr>";
	$tabla.=$fila;
}

$total = round($total,2,PHP_ROUND_HALF_UP);
$tabla.= "	</tbody>
			<tfooter>
				<tr>
					<td colspan='7'></td>
					<td>Total</td>
					<td>".$total."</td>
				</tr>
			</tfooter>
		</table>";
echo $tabla;

         
?>