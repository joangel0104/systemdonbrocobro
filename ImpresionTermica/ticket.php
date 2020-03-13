




<?php

require __DIR__ . '/ticket/autoload.php'; 
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;




$connector = new WindowsPrintConnector("Generic");
$printer = new Printer($connector);
echo 1;

$printer->setJustification(Printer::JUSTIFY_CENTER);

$printer->setTextSize(2, 2);
$printer->text("\n"."COMEDORES DONBRO" . "\n");
$printer->text("--------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->setTextSize(1, 1);
$printer->text(date("Y-m-d H:i:s") . "\n");
$printer->text("GABRIEL JOANGEL CORDERO SANCHEZ" . "\n");

$printer->text("Grado: 4" . "\n");
$printer->text("Seccion: a" . "\n");
$printer->text("Codigo: 402" . "\n");
$printer->text("Tipo Alumno: Regular" . "\n");
$printer->text("Forma de Pago: Efectivo" . "\n");
$printer->setTextSize(2, 2);
$printer->text("---------------------" . "\n");
$printer->setTextSize(1, 1);
$printer->text("N° Comidas: 10" . "\n");
$printer->text("Credito Actual:$240" . "\n");
$printer->text("Total pagado: $120" . "\n");
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
