<?php
  
 $conex=mysqli_connect('localhost','root','','servidor.cobro');
var_dump($_POST);

 $numer=$_POST['numer'];
 $v1=$_POST['name'];
 $v2=$_POST['curp'];
 $v3=$_POST['telefono'];
 $v4=$_POST['tipo_Estatus'];
 $v7=$_POST['tipo']; 
 $v5=$_POST['cantidad'];
 $v6=$_POST['precio'];
 


  


    $vSQL="UPDATE tabla_alumno SET nombre_alumno='$v1',curp_alumno='$v2',celular_alumno='$v3',id_tipo='$v4',seccion_alumno='$v6',grado_alumno='$v5',id_estatus='$v7' WHERE codigo='$numer'";
    echo mysqli_query($conex,$vSQL);



   
   



























 ?>