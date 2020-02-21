

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

                        
                              
                            <table height="100"  width="300" cellspacing="1"  bgcolor="#165480">
                             <tr>
                             <td  text-align="right" height="10"  bgcolor="#fff">
      
                            
                             <div  id="logo">
                                    
                                     <img  height="150" src="images/modelo.png">
                                     <h4 style="">'.$aux1.'</h4>
                                     <img  style=" margin-left: 190px; margin-bottom:200px;  margin-top: -150px; height: 70px; width: 70px;"  src="'.$filename.'" />

                                     <br>

   
                             </div>


                            
                             
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
   