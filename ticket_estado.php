<?php

require __DIR__ . '/ticket/autoload.php'; 
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;

 $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$conexion=mysqli_connect('localhost','root','','servidor.cobro');
 
 $codigo=$_POST['carnet'];



 $sql1="SELECT b.fecha
FROM alumnos a
INNER JOIN asistencias b ON a.id=b.alumno_id
WHERE a.codigo='$codigo'";


$stmt2 = mysqli_query($conexion, $sql1);
 



 $sql="SELECT a.nombre,a.grado,a.seccion,a.codigo,c.nombre,
(r.numero_comida) AS comidasdiponibles,b.fecha,b.monto,b.credito_generado AS comidaultimopago,
(SELECT precio_actual FROM tabla_r_precio ORDER BY id_precio_actual DESC LIMIT 1) AS preciocomida,
r.credito_comida,a.credito_comida AS creditoalumno


FROM alumnos a
INNER JOIN pagos b ON a.id=b.alumno_id
INNER JOIN billetera r ON a.id=r.alumno_id
INNER JOIN becas c ON c.id=a.beca_id
INNER JOIN tipo_pago d ON d.id=b.tipo_pago_id
WHERE a.codigo='$codigo' ORDER BY b.id DESC LIMIT 1";


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
             $aux8=$row['8'];
             $aux9=$row['9'];
             $aux10=$row['10'];
             $aux11=$row['11'];


if ($codigo=!$aux3) 
{
   echo 2;
}
else
{


$suma=$aux5+$aux10;

if ($suma<$aux11) 
{
  $adeudo=$aux11-$suma;
  $totaladeudo=$adeudo*$aux9;
}
else
{
  $totaladeudo=0;
}


$connector = new WindowsPrintConnector("Generic");
$printer = new Printer($connector);
echo 1;



$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(2, 2);
$printer->text("\n"."COMEDORES DONBRO" . "\n");
$printer->text("--------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(2, 2);
$printer->text("\n"."Estado de Alumno" . "\n");
$printer->text("--------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->setTextSize(1, 1);
date_default_timezone_set("America/Mexico_City");

 

$printer->text( date('d/m/Y'). "\n");
$printer->text("" . "\n");
$printer->text( $aux0. "\n");
$printer->text("Grado:".$aux1. "\n");
$printer->text("Seccion:".$aux2. "\n");
$printer->text("Codigo:".$aux3. "\n");
$printer->text("Tipo Alumno:".$aux4. "\n");
$printer->text("Comidas Disponibles:".$aux5. "\n");
$printer->text("Fecha ultimo pago:".$aux6. "\n");
$printer->text("Monto del ultimo pago:$".$aux7. "\n");
$printer->text("Comidas del ultimo pago:".$aux8. "\n");

$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(2, 2);
$printer->text("---------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(1, 1);
$printer->text("COMIDAS CONSUMIDAS"."\n");
$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(2, 2);
$printer->text("---------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->setTextSize(1, 1);
 $cont=0;
while($row1=mysqli_fetch_array($stmt2, MYSQLI_NUM))
{
          
             
           $aux0=$row1['0'];
           $mysql_tiempo=$aux0;
           $tiempo=strtotime($mysql_tiempo);
           $variable=date('d/m/Y',$tiempo);
           $fecha_escrita=$diassemana[date('w',$tiempo)]." ".date('d',$tiempo)." de ".$meses[date('n',$tiempo)-1]. " del ".date('Y',$tiempo) ;
           
           if ( $mysql_tiempo>=$aux6) {
             $cont++;
             $printer->text( $cont.") ".$fecha_escrita. "\n");
           }
           


}



$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->setTextSize(2, 2);
$printer->text("---------------------"."\n");
$printer->text("Adeudo:$".$totaladeudo. "\n");
$printer->text("---------------------"."\n");





$printer->feed(5);
$printer->cut();
$printer->pulse();
$printer->close();


}



?>