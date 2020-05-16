

<?php

require 'fpdf/fpdf.php';
 
function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
 
  
     
class PDF extends FPDF
  {
    function Header()
    {
      
      
      $this->Image('images/logooo.png', 8, 30, 200 );
      
      $this->SetFont('Arial','B',23);
      $this->Cell(40);
      
      $this->Cell(120,20, 'COMEDORES DONBRO',0,0,'C');
       $this->Ln(20);
       $this->Cell(190,0, '',1,0,'C');
        $this->Ln(1);
   
      $this->SetFont('Arial','B',18);
      $this->Cell(120,20, 'Comidas por Grupos',0,0,1);
      $this->Ln(8);
     
      date_default_timezone_set("America/Mexico_City");
      $this->SetFont('Arial','B',14);
      $this->Cell(10,20, 'Fecha:',0,0,20);
      $this->SetFont('Arial','',13);
      $this->Cell(32,21, date('d/m/Y'),0,0,'R');
      $this->Ln(8); 


      $this->SetFont('Arial','B',14);
      $this->Cell(10,20,utf8_decode('N°:'),0,0,20); 
      $this->SetFont('Arial','',13);
      $this->Cell(10,21, generarCodigo(4),0,0,'R');
 




       $this->Ln(20);
       
    }

}



  
  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  
  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(70,6,'GRADO',1,0,'C',1);
  $pdf->Cell(50,6,utf8_decode('SECCIÓN'),1,0,'C',1);
  $pdf->Cell(70,6,utf8_decode('N°COMIDAS'),1,1,'C',1);
  


 
  
  
  $pdf->Output();
    
   
  













?>