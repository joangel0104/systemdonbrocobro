<?php
  
 $conex=mysqli_connect('localhost','root','','servidor.cobro');
var_dump($_POST);

 $numer=$_POST['numer'];
 $v1=$_POST['name'];
 $v2=$_POST['comentarios'];
 $v3=$_POST['telefono'];
 $v4=$_POST['tipo_Estatus'];
 $v7=$_POST['tipo']; 
 $v5=$_POST['cantidad'];
 $v6=$_POST['precio'];
 


  


    $vSQL="UPDATE alumnos SET nombre='$v1',observacion='$v2',celular='$v3',beca_id='$v4',seccion='$v6',grado='$v5',id_estatus='$v7' WHERE codigo='$numer'";
    echo mysqli_query($conex,$vSQL);



   
   



























 ?>