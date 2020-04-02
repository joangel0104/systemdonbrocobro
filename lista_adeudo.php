<?php
     
     
     require_once('lib/mpdf.php');
     require 'phpqrcode/qrlib.php'; 



function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}





$fechaactual = date("d/m/Y");





$html .=' <header class="clearfix">
      <div id="logo">
        <img src="Images/logo.png">
    <p id="titulo">Fecha: '.$fechaactual.'<p/>
        
   
      </div>';
 
$html .='<h1>LISTA DE ADEUDO</h1>
     
      
    <main>
      <table>
        <thead>
          <tr>
            <th>Código</th>
            <th>Nombre y Apellido</th>
            <th>Grado</th>
            <th>Sección </th>
            <th>Teléfono</th>
            <th>Monto de Adeudo</th>
            <th>Fecha del último pago</th>
          </tr>
        </thead>
        <tbody>';
        
       $html .='  
            
        <tr>
            <td >jdhdfjdhd</td>
            <td >kdmdkdmdfkdf</td>
            <td >kddmkdmd</td>
            <td >kdjmdkd</td>
            <td >kdkjmdkd</td>
            <td >kdkjdfkd</td>
            <td >lkdkjfdkdm</td>
             

           
          </tr>
           <tr>
            <td >jdhdfjdhd</td>
            <td >kdmdkdmdfkdf</td>
            <td >kddmkdmd</td>
            <td >kdjmdkd</td>
            <td >kdkjmdkd</td>
            <td >kdkjdfkd</td>
            <td >lkdkjfdkdm</td>
             

           
          </tr>';
      
      $html .='  

      </tbody>
      </table>
     
    </main>';



$mpdf= new mPDF('c','A4');


$mpdf->writeHTML($html);
$mpdf->Output('reporte.pdf','I');


?>
<style >
body {
  position: relative;
  width: 21cm;  
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 18px; W
}
 
.padding {
  padding: 60px 0;
}
 
.h1 
{
  color: #5D6975;
  font-size: 5.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align:center;
}

</style>   