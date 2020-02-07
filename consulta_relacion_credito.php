<?php
  
$conexion=mysqli_connect('localhost','root','angel','servidor.cobro');
     
$sql="SELECT * FROM tabla_r_precio ORDER BY id_precio_actual DESC LIMIT 1";

$result=mysqli_query($conexion,$sql);
$datos=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo json_encode($datos);
         
?>