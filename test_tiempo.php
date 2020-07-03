<?php 

setlocale(LC_TIME, "es_ES.UTF-8");
$mysql_tiempo = "2021-11-19";
$tiempo = strtotime($mysql_tiempo);
$cadena =strftime("Hoy es %A, %d de %B de %Y",  $tiempo);
$varieble = date('d/m/Y',$tiempo);
var_dump($varieble);
var_dump($cadena);
?>