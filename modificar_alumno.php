<?php
  
 $conex=mysqli_connect('localhost','root','','servidor.cobro');

 $v0=$_POST['numer'];
 $v1=$_POST['name'];
 $v2=$_POST['curp'];
 $v3=$_POST['telefono'];
 $v4=$_POST['tipo_Estatus'];
 $v5=$_POST['cantidad'];
 $v6=$_POST['precio'];




    $vSQL1="UPDATE tabla_alumno SET nombre_alumno='$v1',curp_alumno=' $v2',celular_alumno=' $v3',estatus_alumno=' $v4',seccion_alumno=' $v5',grado_alumno=' $v6' WHERE codigo='$v0'";
    mysqli_query($conex, $vSQL1);
    echo 1;



























 ?>