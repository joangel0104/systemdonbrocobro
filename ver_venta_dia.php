
<?php

$conexion=mysqli_connect('localhost','root','','servidor.cobro');
$hasta=$_POST['hasta'];


           $sql1="SELECT fecha FROM pagos WHERE fecha='$hasta' ORDER BY id DESC LIMIT 1";
           $stmt2 = mysqli_query($conexion, $sql1);
           $row1=mysqli_fetch_array($stmt2, MYSQLI_NUM);
           $fechadata=$row1['0'];

if($fechadata==0){
  echo 2;
}
else{
  $sql="SELECT SUM(forma_pago.monto) AS TotalEfectivo,
(SELECT SUM(forma_pago.monto)
        FROM `forma_pago` 
        INNER JOIN pagos ON forma_pago.pago_id=pagos.id        
        WHERE   forma_pago.tipo_pago_id='2' AND pagos.fecha='$fechadata' ) AS Totalmixto,
(SELECT SUM(forma_pago.monto)
        FROM `forma_pago` 
        INNER JOIN pagos ON forma_pago.pago_id=pagos.id        
        WHERE   forma_pago.tipo_pago_id='3' AND pagos.fecha='$fechadata' ) AS totaldiario,
(SELECT SUM(forma_pago.monto)
        FROM `forma_pago` 
        INNER JOIN pagos ON forma_pago.pago_id=pagos.id        
        WHERE   forma_pago.tipo_pago_id='4' AND pagos.fecha='$fechadata' ) AS Totalvales,
  (SELECT COUNT(asistencias.id ) 
        FROM `asistencias` 
        WHERE asistencias.fecha='$fechadata') AS numerocomida      
        
        FROM `forma_pago` 
        INNER JOIN pagos ON forma_pago.pago_id=pagos.id        
        WHERE   forma_pago.tipo_pago_id='1' AND pagos.fecha='$fechadata' ";
        

        $stmt1 = mysqli_query($conexion, $sql);
        $row=mysqli_fetch_array($stmt1, MYSQLI_NUM);

             $aux0=$row['0'];
             $aux2=$row['2'];
             
             $aux1=$row['1'];
             $aux3=$row['3'];
             $aux4=$row['4'];
             $suma= $aux0+$aux1+$aux2+$aux3;
             $totalEfectivo= $aux0+ $aux2;

             $newDate = date("d/m/Y", strtotime($fechadata)); 

     $res='1&'.$totalEfectivo.'&'.$aux1.'&'.$aux3.'&'.$aux4.'&'.$newDate.'&'.$suma.'&';
     echo  $res;
  }

?>