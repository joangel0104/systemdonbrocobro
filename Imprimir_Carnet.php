

<?php
     
     include"Conexion_local.php";
     require_once('lib/mpdf.php');
     require 'phpqrcode/qrlib.php'; 
 
     $conexion=mysqli_connect('localhost','root','','servidor.cobro');
     
     $name=$_POST['name'];

      


               $sql="SELECT codigo,nombre_alumno,grado_alumno,seccion_alumno FROM tabla_alumno WHERE codigo='$name'";
               $stmt1 = mysqli_query($conexion, $sql);
 
                   $row=mysqli_fetch_array($stmt1, MYSQLI_NUM);
                  
                   $aux1=$row['0'];
                    $aux2=$row['1'];
                     $aux3=$row['2'];
                      $aux4=$row['3'];
                  

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

                         $contenido= "$aux1" ."  ". "$aux2" ." ". "$aux3" . "$aux4" ;
                       
                      
                      
                   QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);


                   $html .='

                        
                              
                           
                            
      
                            
                             <div  id="logo">
                                    
                                     <img  height="160" src="images/modelo.png">
                                     <td style="font-size: 2em; text-align: center;"  height="10"  bgcolor="#fff">N° '.$aux1.' </td>

                                     
                                     <img  style=" margin-left: 200px; margin-bottom:200px;  margin-top: -150px; height: 70px; width: 70px;"  src="'.$filename.'" />
                                     


   
                             </div>


                            
                             
                            



                            
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
   <style >
.title
{
  margin-left: 100px;
  width: 100
}

</style>   