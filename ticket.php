<?php

require __DIR__ . '/ticket/autoload.php'; 
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;

 $conexion=mysqli_connect('localhost','root','','servidor.cobro');
 

 $codigo=$_POST['codigo'];

 $sql="SELECT a.nombre,a.grado,a.seccion,a.codigo,c.nombre,d.nombre,b.credito_generado,b.monto
FROM alumnos a
INNER JOIN pagos b ON a.id=b.alumno_id
INNER JOIN becas c ON c.id=a.beca_id
INNER JOIN tipo_pago d ON d.id=b.tipo_pago_id
WHERE codigo='$codigo' ORDER BY b.id DESC LIMIT 1";
 $stmt1 = mysqli_query($conexion, $sql);
 
 $row=mysqli_fetch_array($stmt1, MYSQLI_NUM);

             $aux0=$row['0'];
             $aux1=$row['1'];
             $aux2=$row['2'];
             $aux3=$row['3']; 
             $aux4=$row['4']; 
             $aux5=$row['5']; 
             $aux6=$row['6']; 
             $aux7=$row['7'];


$connector = new WindowsPrintConnector("Generic");
$printer = new Printer($connector);
echo 1;

$printer->setJustification(Printer::JUSTIFY_CENTER);

$printer->setTextSize(2, 2);
$printer->text("\n"."COMEDORES DONBRO" . "\n");
$printer->text("--------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->setTextSize(1, 1);
date_default_timezone_set("America/Mexico_City");
$printer->text(date('m/d/Y g:ia'). "\n");
$printer->text( $aux0. "\n");

$printer->text("Grado:".$aux1. "\n");
$printer->text("Seccion:".$aux2. "\n");
$printer->text("Codigo:".$aux3. "\n");
$printer->text("Tipo Alumno:".$aux4. "\n");
$printer->text("Forma de Pago:".$aux5. "\n");
$printer->setTextSize(2, 2);
$printer->text("---------------------" . "\n");
$printer->setTextSize(1, 1);
$printer->text("N° Comidas: ".$aux6 . "\n");

$printer->text("Total pagado:$".$aux7 . "\n");
$printer->setTextSize(2, 2);
$printer->text("---------------------"."\n");
$printer->setTextSize(1, 1);
$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->text("Muchas gracias por su Pago\n");




$printer->feed(5);
$printer->cut();
$printer->pulse();
$printer->close();

?>
