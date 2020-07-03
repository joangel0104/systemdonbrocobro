
<?php
	$conexion=mysqli_connect('localhost','root','','servidor.cobro');
 require 'phpqrcode/qrlib.php'; 
 require_once('fpdf/fpdf.php');


 $sql="SELECT temporal_codigos.codigos AS codigo,
       temporal_codigos.nombres AS nombre,
       temporal_codigos.grado AS grado,
       temporal_codigos.seccion AS seccion
       FROM `temporal_codigos` "; 
       $stmt = mysqli_query($conexion, $sql);
     
        
            class PDF extends FPDF
            {
    	        function Header()
    	        {
    	            $this->Image('images/logooo.png', 8, 45, 200 );
    	            $this->SetFont('Arial','B',23);
    	            $this->Cell(190,20, 'COMEDORES DONBRO',0,0,'C');
    	            $this->Ln(25);
                }
            }
 
            $num=0;
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFillColor(232,232,232);
            $pdf->SetFont('Arial','B',14);
            $pdf->Ln(-12);
            
            //generador de QR
            $dir = 'temp/';
            if(!file_exists($dir))
                mkdir($dir);
                $filename = $dir.'test.png';
                $tamanio = 5;
                $level = 'H';
                $frameSize = 1;
                
                
            while ( $row=mysqli_fetch_array($stmt, MYSQLI_NUM)) 
            {         
                $v1=$row['0'];
                $v2=$row['1'];
                $v3=$row['2'];   
                $v4=$row['3'];
            	
           
            	 $contenido= "COMEDORES DONBRO"  ;
            	 QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);  
               
            
                 

              
                      $pdf->Ln(15);
                      $pdf->Cell(86, 52, '',1,0,'C'); $pdf->Cell(86, 52, '',1,0,'C'); 
                      $pdf->Cell(6, 52,$pdf->Image($filename, $pdf->GetX()-110,  $pdf->GetY()+15, 20),0,0,'C'); 
                  	  
                      $pdf->SetFont('Arial','B',16);
                  	  $pdf->Cell(-100, 15, 'COMEDORES DONBRO',0,0, 'C');  

                  	  $pdf->SetFont('Arial','B',11);
                  	  $pdf->Cell(64, 30, 'Nombres y Apellidos:',0,0, 'C'); 	 
                      
                      $pdf->Ln(3);
                      $pdf->SetFont('Arial','',9);
                  	  $pdf->Cell(252, 35,utf8_decode( $v2),0,0, 'C'); 
                  	  $pdf->SetFont('Arial','B',10);
                  	  $pdf->Cell(-311, 45, "Grado:",0,0, 'C'); 
                  	  $pdf->Ln(0);
                  	  $pdf->SetFont('Arial','',10);
                  	  $pdf->Cell(207, 45, $v3,0,0, 'C'); 
                      $pdf->Ln(0);
                      $pdf->SetFont('Arial','B',10);
                  	  $pdf->Cell(196, 55,utf8_decode('Sección:'),0,0, 'C'); 
                  	  
                  	  $pdf->SetFont('Arial','',10);
                  	  $pdf->Ln(0);
                  	  $pdf->Cell(214, 55, $v4,0,0, 'C'); 

                  	  $pdf->SetFont('Arial','B',10);
                  	  $pdf->Cell(-233.4, 65, utf8_decode('Codigo:'),0,0, 'C'); 

                  	  $pdf->SetFont('Arial','',10);
                  	  $pdf->Ln(0);
                  	  $pdf->Cell(215, 65, $v1,0,0, 'C'); 
                  	  $pdf->Ln(60);
                      $pdf->Cell(86, $pdf->Ln(-10), $pdf->Image('images/modelo.png', $pdf->GetX()+0,  $pdf->Ln(-53), 60), 0,0,'C');
                      $pdf->Ln(15);

            }


       $pdf->Output('carnet.pdf','I');

?>