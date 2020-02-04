
<?php
$conexion=mysqli_connect('localhost','root','','servidor.cobro');


$sql="SELECT precio_actual FROM tabla_r_precio";
$stmt1 = mysqli_query($conexion, $sql);
$row=mysqli_fetch_array($stmt1, MYSQLI_NUM);

echo $row[0];


?>