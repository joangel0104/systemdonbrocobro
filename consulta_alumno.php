<?php
  
 $conexion=mysqli_connect('localhost','root','','servidor.cobro');
 

 $v1=$_POST['numer'];

 $sql="SELECT codigo,nombre_alumno,curp_alumno,celular_alumno,grado_alumno,seccion_alumno FROM tabla_alumno WHERE codigo='$v1'";
 $stmt1 = mysqli_query($conexion, $sql);
 
 $row=mysqli_fetch_array($stmt1, MYSQLI_NUM);



             $aux0=$row['0'];
             $aux1=$row['1'];
             $aux2=$row['2'];
             $aux3=$row['3']; 
             $aux4=$row['4']; 
             $aux5=$row['5']; 
            

              if ($aux0) 
              {
               $res='1&'.$aux1.'&'.$aux2.'&'.$aux3.'&'.$aux4.'&'.$aux5.'&';
               echo  $res;
              
              }
              

?>