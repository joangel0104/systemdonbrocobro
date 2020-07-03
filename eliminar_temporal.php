<?php

  $conexion=mysqli_connect('localhost','root','','servidor.cobro');
  $v1=$_POST['num']; 
  
  $sql="DELETE FROM temporal_codigos where codigos='$v1'"; 
  //$stmt1 = mysqli_query($conexion, $sql);
  
  echo mysqli_query($conexion, $sql);

?>