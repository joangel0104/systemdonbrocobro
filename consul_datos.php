<?php
  
 $conexion=mysqli_connect('localhost','root','','servidor.cobro');
 $v1=$_POST['codigo'];

      $sql="SELECT nombre,grado,seccion 
            FROM alumnos 
            WHERE codigo='$v1'";
            $stmt1 = mysqli_query($conexion, $sql);
            $row=mysqli_fetch_array($stmt1, MYSQLI_NUM);
            
                $aux0=$row['0'];
                $aux1=$row['1'];
                $aux2=$row['2'];
                if ($aux0){
                    $res='1&'.$aux0.'&'.$aux1.'&'.$aux2.'&';
                    echo  $res;
                }
?>