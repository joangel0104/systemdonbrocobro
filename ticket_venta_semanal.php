<?php

require __DIR__ . '/ticket/autoload.php'; 
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;

 $conexion=mysqli_connect('localhost','root','','servidor.cobro');
 
$final=$_POST['desde'];

$inicio=$_POST['hasta'];
 
 




 $sql1="SELECT fecha AS fechainc,(SELECT a.fecha FROM pagos a WHERE a.fecha=' $final' ORDER BY a.id DESC LIMIT 1) AS fechaf

FROM pagos WHERE fecha='$inicio' ORDER BY id DESC LIMIT 1";


$stmt2 = mysqli_query($conexion, $sql1);
 
$row1=mysqli_fetch_array($stmt2, MYSQLI_NUM);

              $fechai=$row1['0'];
              $fechafinal=$row1['1'];

if($fechai==''|| $fechafinal=='')
{
  echo 2;
  

}
else
{


 $sql="SELECT SUM(a.monto) AS TotalEfectivo,
(SELECT SUM(e.monto) AS totaldeposito FROM pagos e WHERE e.fecha BETWEEN '$inicio' AND '$final' AND e.tipo_pago_id='2') AS deposito,
(SELECT SUM(c.monto) AS totalvale FROM pagos c WHERE c.fecha BETWEEN '$inicio' AND '$final' AND c.tipo_pago_id='4') AS vale,
(SELECT COUNT(id) FROM asistencias WHERE fecha BETWEEN '$inicio' AND '$final') AS comidaspreparadas

FROM pagos a
WHERE a.fecha BETWEEN '$inicio' AND '$final'
 AND tipo_pago_id='1'
";


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
$printer->text("\n"."Cierre Semanal" . "\n");
$printer->text("--------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->setTextSize(1, 1);
date_default_timezone_set("America/Mexico_City");
$printer->text(date('d/m/Y g:ia'). "\n");
$printer->text("" . "\n");
$printer->text("Fecha inicial:".$inicio . "\n");
$printer->text("Fecha final:".$final . "\n");
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