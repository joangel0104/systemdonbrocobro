<?php

$conexion=mysqli_connect('localhost','root','','servidor.cobro');
$fecham=($_GET['hasta']);

//cosultar fecha si existe 
$sql1="SELECT fecha
       FROM asistencias 
       WHERE fecha='$fecham' 
       ORDER BY id DESC LIMIT 1";
       $stmt2 = mysqli_query($conexion, $sql1);
       $row1=mysqli_fetch_array($stmt2, MYSQLI_NUM);
       $fechaexiste=$row1['0'];
 //condicion para verificar fecha

if ($fecham=!$fechaexiste) {
        echo 2;
    }
else{
     $sql=" SELECT  alumnos.grado AS grado ,alumnos.seccion AS seccion,COUNT(asistencias.id ) AS comida
        FROM `alumnos` 
        INNER JOIN asistencias  ON alumnos.id=asistencias.alumno_id 
        WHERE asistencias.fecha='$fechaexiste' 
        GROUP BY alumnos.grado,alumnos.seccion  ";
        $result=mysqli_query($conexion,$sql);
        $suma=0;
        $resultados = [];
        $i = 1;
while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $resultados[] = $row;
  $resultados[$i-1][] = $i;
  $i++;
}
$tabla= " <table class='order-table table' id='tabla_9'>
        <thead>
          <tr>
            <th>GRADO </th>
            <th>SECCIÓN </th>
            <th>N° COMIDAS </th>
          </tr>
        </thead>
        <tbody id='content_table'>";
 foreach ($resultados as $key => $value) {
  $fila = "<tr>";
  $fila .= "<td>".$value['grado']."</td>";
  $fila .= "<td>".$value['seccion']."</td>";
  $fila .= "<td>".$value['comida']."</td>";
  $fila .= "</tr>";
  $tabla.=$fila;
  $suma=$suma+$value['comida'];

}
$res='1&'.$tabla.'&'.$suma.'&';
echo  $res;
}?>

