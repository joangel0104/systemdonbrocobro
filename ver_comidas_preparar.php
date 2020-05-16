

<?php


$fecham='2020-03-16';
require 'fpdf/fpdf.php';
$conexion=mysqli_connect('localhost','root','','servidor.cobro');


function generarCodigo($longitud) 
{
     $key = '';
     $pattern = '1234567890';
     $max = strlen($pattern)-1;
     for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
     return $key;
}
 //cosultar fecha si existe 


           
           $sql1="SELECT fecha
                  FROM asistencias 
                  WHERE fecha='2020-03-16' 
                  ORDER BY id DESC LIMIT 1";
           $stmt2 = mysqli_query($conexion, $sql1);
           $row1=mysqli_fetch_array($stmt2, MYSQLI_NUM);
           $fechaexiste=$row1['0'];
 //condicion para verificar fecha

if ($fecham=!$fechaexiste) 
   {
         echo 2;
   }
else
{
           $sql="SELECT  a.grado,a.seccion,COUNT(b.id ) AS comida
                 FROM alumnos a
                 INNER JOIN asistencias b ON a.id=b.alumno_id 
                 WHERE b.fecha='$fechaexiste' 
                 GROUP BY a.grado,a.seccion  ";
           $stmt1 = mysqli_query($conexion, $sql);
          //clase encabezado del pdf
           class PDF extends FPDF
           {
              function Header()
              {
                   $this->Image('images/logooo.png', 8, 30, 200 );
                   $this->SetFont('Arial','B',23);
                   $this->Cell(40);
                   $this->Ln(10);
                   $this->Cell(190,20, 'COMEDORES DONBRO',0,0,'C');
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
    
   
  }













?>