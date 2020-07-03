<?php

require __DIR__ . '/ticket/autoload.php'; 
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;

$conexion=mysqli_connect('localhost','root','','servidor.cobro');

$final=$_POST['desde'];
$inicio=$_POST['hasta'];
 
 $sql1="SELECT pagos.fecha AS fechaincial,
      (SELECT pagos.fecha 
       FROM `pagos` 
       WHERE pagos.fecha='$final' 
       ORDER BY pagos.id DESC LIMIT 1) AS fechafinal
       
       FROM `pagos` WHERE pagos.fecha='$inicio' 
       ORDER BY pagos.id DESC LIMIT 1";
        $stmt2 = mysqli_query($conexion, $sql1);
        $row1=mysqli_fetch_array($stmt2, MYSQLI_NUM);
        $fechai=$row1['0'];
        $fechafinal=$row1['1'];

if($fechai==0|| $fechafinal==0)
{
  echo 2;
  

}
else{
$sql="SELECT SUM(forma_pago.monto) AS TotalEfectivo,
              (SELECT SUM(forma_pago.monto)
               FROM `forma_pago` 
               INNER JOIN pagos ON forma_pago.pago_id=pagos.id        
               WHERE   forma_pago.tipo_pago_id='2' AND pagos.fecha BETWEEN '$inicio' AND 'final' ) AS Totalmixto,
              (SELECT SUM(forma_pago.monto)
               FROM `forma_pago` 
               INNER JOIN pagos ON forma_pago.pago_id=pagos.id        
               WHERE   forma_pago.tipo_pago_id='3' AND pagos.fecha BETWEEN '$inicio' AND 'final' ) AS totaldiario,
              (SELECT SUM(forma_pago.monto)
               FROM `forma_pago` 
               INNER JOIN pagos ON forma_pago.pago_id=pagos.id        
               WHERE   forma_pago.tipo_pago_id='4' AND pagos.fecha BETWEEN '$inicio' AND 'final' ) AS Totalvales,
              (SELECT COUNT(asistencias.id ) 
               FROM `asistencias` 
               WHERE asistencias.fecha BETWEEN '$inicio' AND '$final') AS numerocomida      
        
              FROM `forma_pago` 
              INNER JOIN pagos ON forma_pago.pago_id=pagos.id        
              WHERE   forma_pago.tipo_pago_id='1' AND pagos.fecha BETWEEN '$inicio' AND 'final'
";


$stmt1 = mysqli_query($conexion, $sql);
 $row=mysqli_fetch_array($stmt1, MYSQLI_NUM);

                    $aux0=$row['0'];
                    $aux1=$row['1'];
                    $aux2=$row['2'];
                    $aux3=$row['3'];
                    $aux4=$row['4'];
                    
                    $totalEfectivo=$aux0+$aux2;
                    $suma= $totalEfectivo+$aux1+$aux3;
                    $newinicial = date("d/m/Y", strtotime($inicio)); 
                    $newfinal = date("d/m/Y", strtotime($final)); 

$connector = new WindowsPrintConnector("Generic");
$printer = new Printer($connector);
echo 1;

$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(2, 2);
$printer->text("\n"."COMEDORES DONBRO" . "\n");
$printer->text("--------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(2, 2);
$printer->text("\n"."Cierre Semanal" . "\n");
$printer->text("--------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->setTextSize(1, 1);
date_default_timezone_set("America/Mexico_City");
$printer->text(date('d/m/Y g:ia'). "\n");
$printer->text("" . "\n");
$printer->text("Fecha inicial:".$newinicial . "\n");
$printer->text("Fecha final:".$newfinal . "\n");
$printer->text("N° Comidas preparadas:".$aux4 . "\n");
$printer->text("Total Efectivo:$".$totalEfectivo. "\n");
$printer->text("Total Deposito:$".$aux1. "\n");
$printer->text("Total Vale:$".$aux3. "\n");


$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(2, 2);
$printer->text("---------------------"."\n");
$printer->text("$".$suma. "\n");
$printer->text("---------------------"."\n");

$printer->feed(5);
$printer->cut();
$printer->pulse();
$printer->close();

}


?>