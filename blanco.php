
<?php
$conexion=mysqli_connect('localhost','root','','servidor.cobro');
$v1='002';

$sql="SELECT id_alumno,nombre_alumno,grado_alumno,seccion_alumno FROM tabla_alumno WHERE codigo='$v1'";
$stmt1 = mysqli_query($conexion, $sql);
$row=mysqli_fetch_array($stmt1, MYSQLI_NUM);
$fecha=date("Y-m-d"); 
$numed='4';  

$id_alumno= $row['0']; 
$nombre= $row['1']; 
$seccion=$row['3']; 
$grado=$row['2']; 
  
    
    
     
     
   
      $sql2="SELECT precio_actual,credito_actual FROM tabla_r_precio";
      $stmt2 = mysqli_query($conexion, $sql2);
      $row1=mysqli_fetch_array($stmt2, MYSQLI_NUM);
        
       $precio= $row1['0']; 
       $credito= $row1['1']; 



$montop=$precio*$numed;
$creditonew=$precio*$credito;
$ncomida=$credito+$numed;



echo "id:",$id_alumno;
echo "Nombre:",$nombre;
echo "grado:",$grado;
echo "Seccion:",$seccion;



echo "monto pagar :$",$montop;

echo "N° Comidas :",$ncomida;

echo "credito :$",$creditonew;

echo "Fecha actual :",$fecha;

?>