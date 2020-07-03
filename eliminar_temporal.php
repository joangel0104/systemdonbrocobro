<?php

  $conexion=mysqli_connect('localhost','root','','servidor.cobro');
  $v1=$_POST['num']; 
  
     $sql="DELETE FROM temporal_codigos 
           WHERE codigos='$v1'"; 
           echo mysqli_query($conexion, $sql);

?>