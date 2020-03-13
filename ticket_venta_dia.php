<?php

require __DIR__ . '/ticket/autoload.php'; 
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;

 $conexion=mysqli_connect('localhost','root','','servidor.cobro');
 

 $hasta=$_POST['hasta'];




 $sql1="SELECT fecha FROM pagos WHERE fecha='$hasta' ORDER BY id DESC LIMIT 1";


$stmt2 = mysqli_query($conexion, $sql1);
 
$row1=mysqli_fetch_array($stmt2, MYSQLI_NUM);

             $fechadata=$row1['0'];

if($fechadata=='')
{
  echo 2;

}
else
{


 $sql="SELECT SUM(a.monto) AS TotalEfectivo,
(SELECT SUM(e.monto) AS totaldeposito FROM pagos e WHERE e.fecha='$hasta' AND e.tipo_pago_id='2') AS deposito,
(SELECT SUM(c.monto) AS totalvale FROM pagos c WHERE c.fecha='$hasta' AND c.tipo_pago_id='4') AS vale,
(SELECT COUNT(id) FROM asistencias WHERE fecha='$hasta') AS comidaspreparadas

FROM pagos a
WHERE a.fecha='$hasta' AND tipo_pago_id='1'";


$stmt1 = mysqli_query($conexion, $sql);
 
$row=mysqli_fetch_array($stmt1, MYSQLI_NUM);

             $aux0=$row['0'];
             $aux1=$row['1'];
             $aux2=$row['2'];
             $aux3=$row['3'];
            

$suma= $aux0+ $aux1+ $aux2;




$connector = new WindowsPrintConnector("Generic");
$printer = new Printer($connector);
echo 1;

$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(2, 2);
$printer->text("\n"."COMEDORES DONBRO" . "\n");
$printer->text("--------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(2, 2);
$printer->text("\n"."Cierre del Día" . "\n");
$printer->text("--------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->setTextSize(1, 1);
date_default_timezone_set("America/Mexico_City");
$printer->text(date('m/d/Y g:ia'). "\n");
$printer->text("" . "\n");
$printer->text("Fecha de Cierre:".$fechadata . "\n");
$printer->text("N° Comidas preparadas:".$aux3 . "\n");
$printer->text("Total Efectivo:$".$aux0. "\n");
$printer->text("Total Deposito:$".$aux1. "\n");
$printer->text("Total Vale:$".$aux2. "\n");


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