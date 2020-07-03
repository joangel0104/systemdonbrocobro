<?php
  
  $conexion=mysqli_connect('localhost','root','','servidor.cobro');
  $v1=$_POST['num'];
  
       $sql="SELECT alumnos.nombre AS nombre,
                    alumnos.grado AS grado,
                    alumnos.seccion AS seccion
             FROM `alumnos` 
             WHERE alumnos.codigo='$v1'"; 
             $stmt = mysqli_query($conexion, $sql);
             $row=mysqli_fetch_array($stmt, MYSQLI_NUM);
             $v2=$row['0'];
             $v3=$row['1'];   
             $v4=$row['2'];
              
             $sql1="INSERT INTO temporal_codigos(codigos,nombres,grado,seccion) 
                    VALUES ('$v1','$v2','$v3','$v4')";
                    echo mysqli_query($conexion, $sql1);
    
  ?>