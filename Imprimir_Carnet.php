

<?php
     
     include"Conexion_local.php";
     require_once('lib/mpdf.php');
     require 'phpqrcode/qrlib.php'; 
 
     $conexion=mysqli_connect('localhost','root','','servidor.cobro');
     
     $name=$_POST['name'];

      


               $sql="SELECT codigo FROM tabla_alumno WHERE codigo='$name'";
               $stmt1 = mysqli_query($conexion, $sql);
 
                   $row=mysqli_fetch_array($stmt1, MYSQLI_NUM);
                  
                   $aux1=$row['0'];
                  

              if($aux1==!0)
              {
                   //generador de QR
                   $dir = 'temp/';
                   if(!file_exists($dir))
                   mkdir($dir);
  
                       $filename = $dir.'test.png';
                       $tamanio = 5;
                       $level = 'H';
                       $frameSize = 1;
                       $contenido = $aux1;

                   QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);


                   $html .='

                             <table  width="300" cellspacing="1" cellpadding="3" border="1" bgcolor="#165480">
                             <tr>
                             <td  text-align="right" height="110"  bgcolor="#fff">
      
                             <font   size=2 face="verdana, arial, helvetica">
                             <br>  
                             <b >     CARNET DE PAGO COMEDOR DON BRO <br></b>
                             <br>   
                             <b >     Codigo Carnet:  '.$aux1.'</b>
                             <br> 
                             <br>  
                             <div  id="logo">
                                    <img height="120" src="images/logoo.png">
                                     <img height="120" src="'.$filename.'" />
   
                             </div>


                             <b> </b>
                             </font>
                             </td>
                             </tr>
                             </table>
                          ';
                           $mpdf= new mPDF('c','A6'); 
                           $css=file_get_contents('assets/css/style.css');
                           $mpdf->writeHTML($css,1);
                           $mpdf->writeHTML($html);
                           $mpdf->Output('reporte.pdf','I');


                   }
                   else
                   {
                        echo "<script> location.href=\"Pantalla_carnet.php\" </script>";
                   }

                  
                  
               
  ?>
 