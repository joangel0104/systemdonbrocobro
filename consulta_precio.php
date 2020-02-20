
<?php
   
   $conexion=mysqli_connect('localhost','root','','servidor.cobro');


   $sql="SELECT precio_actual FROM tabla_r_precio ORDER BY id_precio_actual DESC LIMIT 1";
   $result = mysqli_query($conexion, $sql);
    
    $datos=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $precio= (float)$datos['precio_actual']; 


               $res='1&'.'$'.$precio.'&';
               echo  $res;
              
            

?>