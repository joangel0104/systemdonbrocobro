<?php
  
$conexion=mysqli_connect('localhost','root','','servidor.cobro');
$fecha = date('Y-m-d');
$sql="	SELECT 
			alumnos.nombre as nombre, 
		    alumnos.grado as grado,  
		    alumnos.seccion as seccion, 
		    tipo_pago.nombre as forma_pago, 
		    pagos.monto as monto_pagado, 
		    pagos.credito_generado as n_comida,
		    (pagos.credito_total*pagos.precio_beca) as credito,
		    pagos.fecha as fecha
		FROM `alumnos` 
		INNER JOIN pagos ON alumnos.id = pagos.alumno_id
		INNER JOIN tipo_pago ON pagos.tipo_pago_id = tipo_pago.id
		WHERE pagos.fecha = '$fecha'
		ORDER BY pagos.id ASC";
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
						<th>Sección</th>
						<th>Forma de Pago</th>
						<th>Monto Pagado</th>
						<th>N° Comida</th>
						<th>Crédito</th>
						<th>Fecha de Pago</th>
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
	$fila .= "<td>".'$'.$value['monto_pagado']."</td>";
	$total+= (float)$value['monto_pagado'];
	$fila .= "<td>".$value['n_comida']."</td>";
	$fila .= "<td>".'$'.$value['credito']."</td>";
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
					<td>".'$'.$total."</td>
				</tr>
			</tfooter>
		</table>";
echo $tabla;

         
?>