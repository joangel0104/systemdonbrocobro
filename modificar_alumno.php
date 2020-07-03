<?php
  
$conex=mysqli_connect('localhost','root','','servidor.cobro');
var_dump($_POST);

 $numer=$_POST['numer'];
 $nombre=$_POST['name'];

 $v3=$_POST['telefono'];
 $v4=$_POST['tipo_Estatus'];
 $v7=$_POST['tipo']; 
 $v5=$_POST['cantidad'];
 $v6=$_POST['precio'];
 $comentarios=$_POST['comentarios'];

    $vSQL="UPDATE alumnos 
           SET nombre='$nombre',celular='$v3',beca_id='$v4',seccion='$v6',grado='$v5',estatus='$v7',observacion='$comentarioss' 
           WHERE codigo='$numer'";
           echo mysqli_query($conex,$vSQL);
?>