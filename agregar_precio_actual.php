
<?php
  
    $conexion=mysqli_connect('localhost','root','','servidor.cobro');
 

  
    $v1=$_POST['precio'];
    $v2=$_POST['credito'];
   
    
   
    $fecha=date("Y-m-d");
   
 
    $sql="INSERT INTO tabla_r_precio(precio_actual,credito_actual,fecha_cambio) VALUES ('$v1','$v2','$fecha')";
    
   echo mysqli_query($conexion, $sql);
    
   
?>