
<?php
  
 $conexion=mysqli_connect('localhost','root','','servidor.cobro');
 
 $v1=$_POST['name'];
 $v2=$_POST['numero'];
 $v3=$_POST['tipo_Estatus'];
 $fecha=date("Y-m-d"); 
  
    
   
        $sql="SELECT id_alumno,nombre_alumno,grado_alumno,seccion_alumno FROM tabla_alumno WHERE codigo='$v1'";
        $stmt1 = mysqli_query($conexion, $sql);
        $row=mysqli_fetch_array($stmt1, MYSQLI_NUM);
        
       
        $id_alumno= $row['0']; 
        $nombre= $row['1'];  
        $seccion=$row['3']; 
        $grado=$row['2']; 
  
    
        $sql2="SELECT precio_actual,credito_actual FROM tabla_r_precio";
        $stmt2 = mysqli_query($conexion, $sql2);
        $row2=mysqli_fetch_array($stmt2, MYSQLI_NUM);
       
        $precio= $row2['0']; 
        $credito= $row2['1']; 



        $montop=$precio*$v2;
        $creditonew=$precio*$credito;
        $ncomida=$credito+$numed;




            $sql3="INSERT INTO tabla_control_pago(id_alumno,id_tipo_pago,monto_pago,credito_pago,cantidad_comida_dia,fecha_pago) VALUES ('$id_alumno','$v3','$montop','$creditonew','$ncomida','$fecha')";
            echo mysqli_query($conexion, $sql3);
           
          

           
            
         
?>