<?php

require __DIR__ . '/ticket/autoload.php'; 
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;

$conexion=mysqli_connect('localhost','root','','servidor.cobro');
$fecham=$_POST['hasta'];
  
      $sql1="SELECT fecha
             FROM asistencias 
             WHERE fecha='$fecham' 
             ORDER BY id DESC LIMIT 1";
             $stmt2 = mysqli_query($conexion, $sql1);
             $row1=mysqli_fetch_array($stmt2, MYSQLI_NUM);
             $fechaexiste=$row1['0'];
 
      if ($fecham=!$fechaexiste){
            echo 2;
      }
      else{
          $sql="SELECT  a.grado,a.seccion,COUNT(b.id ) AS comida
                FROM alumnos a
                INNER JOIN asistencias b ON a.id=b.alumno_id 
                WHERE b.fecha='$fechaexiste' 
                GROUP BY a.grado,a.seccion  ";
                $stmt1 = mysqli_query($conexion, $sql);
                $connector = new WindowsPrintConnector("Generic");
                $printer = new Printer($connector);
                echo 1;
                    
                    $printer->setJustification(Printer::JUSTIFY_CENTER);
                    $printer->setTextSize(2, 2);
                    $printer->text("\n"."COMEDORES DONBRO" . "\n");
                    $printer->text("---------------------" . "\n");
                    $printer->setJustification(Printer::JUSTIFY_CENTER);
                    $printer->setTextSize(2, 2);
                    $printer->text("\n"."Comidas por Grupos" . "\n");
                    $printer->text("---------------------" . "\n");
                    $printer->setJustification(Printer::JUSTIFY_LEFT);
                    $printer->setTextSize(1, 1);
                    date_default_timezone_set("America/Mexico_City");
                    $printer->text("fecha:".date('d/m/Y g:ia'). "\n");
                    $suma=0;
                    while($row=mysqli_fetch_array($stmt1, MYSQLI_NUM)){
                          
                          $printer->setJustification(Printer::JUSTIFY_CENTER);
                          $printer->setTextSize(2, 2);
                          $printer->text("---------------------" . "\n");
                          $printer->setJustification(Printer::JUSTIFY_LEFT);
                          $printer->setTextSize(1, 1);        
                          $aux0=$row['0'];
                          $aux1=$row['1'];
                          $aux2=$row['2'];
                          $printer->text("Grado:".$aux0. "\n");
                          $printer->text("Seccion:".$aux1. "\n");
                          $printer->text("N°Comidas:".$aux2. "\n");
                          $suma=$suma+$aux2;
                    }
                    $printer->setJustification(Printer::JUSTIFY_CENTER);
                    $printer->setTextSize(2, 2);
                    $printer->text("---------------------"."\n");
                    $printer->text("Total de Comidas:".$suma. "\n");
                    $printer->feed(5);
                    $printer->cut();
                    $printer->pulse();
                    $printer->close();
     }

?>