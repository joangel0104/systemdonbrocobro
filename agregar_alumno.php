
<?php
  
 $conexion=mysqli_connect('localhost','root','','servidor.cobro');
 

  
    $v1=$_POST['name'];
    $v2=$_POST['numer'];
    $v3=$_POST['telefono'];
    $v4=$_POST['tipo_Estatus'];
    $v5=$_POST['cantidad'];
    $v6=$_POST['precio'];
    
   
    function generarCodigo($longitud) 
    {
     $key = '';
     $pattern = '1234567890';
     $max = strlen($pattern)-1;
     for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
     return $key;
    }
    $codigos=generarCodigo(3);
   
 
    $sql="SELECT curp_alumno FROM tabla_alumno WHERE curp_alumno='$v2'";

    $result=mysqli_query($conexion,$sql);
         $rowcount=mysqli_num_rows($result); 
        
         if($rowcount > 0)
         {
            
            echo 1;
        
 }  else
         {
            $vSQL1="INSERT INTO tabla_alumno(nombre_alumno,curp_alumno,celular_alumno,estatus_alumno,grado_alumno,seccion_alumno,codigo) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$codigos')";
           
           
            mysqli_query($conexion, $vSQL1);
            echo 0;
            
         }
?>