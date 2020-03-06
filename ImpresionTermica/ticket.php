<?php

require __DIR__ . '/ticket/autoload.php'; 
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;



$nombre_impresora = "POS-58";

$connector = new WindowsPrintConnector($nombre_impresora);
$printer = new Printer($connector);
echo 1;

$printer->setJustification(Printer::JUSTIFY_CENTER);



$printer->setTextSize(2, 2);
$printer->text("Ticket prueba");
$printer->setTextSize(2, 1);
$printer->feed();
$printer->text("Hola mundo\n\n");


$printer->feed(15);
$printer->cut();
$printer->pulse();
$printer->close();