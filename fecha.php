<?php



$conexion=mysqli_connect('localhost','root','','servidor.cobro');
 




$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


 



 $sql="SELECT b.fecha
FROM alumnos a
INNER JOIN asistencias b ON a.id=b.alumno_id
WHERE a.codigo='690'";
 $stmt1 = mysqli_query($conexion, $sql);
 
while( $row=mysqli_fetch_array($stmt1, MYSQLI_NUM))
{
          
         


           $aux0=$row['0'];
           $mysql_tiempo=$aux0;
           $tiempo=strtotime($mysql_tiempo);
           $variable=date('d/m/Y',$tiempo);

          echo "\n" .$diassemana[date('w',$tiempo)]." ".date('d',$tiempo)." de ".$meses[date('n',$tiempo)-1]. " del ".date('Y',$tiempo) ;

}          

?>