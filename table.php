<?php

  $conexion=mysqli_connect('localhost','root','','servidor.cobro');
  $sql="SELECT codigo,nombre,beca_id,celular,grado,seccion,estatus
FROM alumnos
 ORDER BY grado ASC ,seccion ASC  "; 
  $stmt1 = mysqli_query($conexion, $sql);
  
 

?>



<!DOCTYPE html>
<html lang="en">
<head>

  <link  rel="icon"   href="images/logo.png" type="image/png" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DataTable Responsive</title>

<script type="text/javascript" src="./assets/js/jquery-3.3.1.js"></script>

<script type="text/javascript" src="./assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="./assets/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="./datatable.js"></script>
<link rel="stylesheet" href="assets/css/main.css" />

<link rel="stylesheet" href="./assets/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="./assets/css/responsive.dataTables.min.css">



</head>
<body>
<div id="page-wrapper">

        <!-- Header -->


          <header id="header">
            <img name="imagen" src="images/logo.png" >

            <h1><a href="index.html">System Don BRO</a></h1>
            
            <nav id="nav">

              <ul>
                <li class="special">
                  <a href="#menu" class="menuToggle"><span>Menu</span></a>
                  <div id="menu">
                    <ul>
                      <li><a href="Pantalla_precio_comida.php">Establezer Precio Comida</a></li>
                    </ul> 


                    <ul>
                      <li><a href="Pantalla_cobro.php">Control de Pago</a></li>
                    </ul>
                    
                      <ul>
                      <li><a href="Pantalla_asistencia.php">Control Asistencia  </a></li>
                    </ul>
                      <ul>
                      <li><a href="Pantalla_alunno.php">Agregar Alumno  </a></li>
                    </ul>
                     <ul>
                      <li><a href="Pantalla_m_alumno.php">Actualizar Alumno  </a></li>
                    </ul>
                     <ul>
                      <li><a href="Pantalla_consulta_alumno.php">Consultar Alumno</a></li>
                    </ul>
                     



                     <ul>
                      <li><a href="">Reportes</a></li>
                    </ul>

                  </div>
                </li>
              </ul>
            </nav>
          </header>
        <!-- Main -->
          <article id="main">
            
            <section class="wrapper style5">
                         <div class="inner">
               
                
              </div>

  <table id="miTabla" class="display responsive nowrap" style="width:80%">
          <thead>
              <tr>
                   <th>
                       Código
                  </th>
           

           <th>
              Nombres y Apellidos
           </th>
           <th>
              CURP
           </th>
           <th >
              Teléfono Representante  
           </th>
           <th>
              Tipo Alumno
           </th>
           <th>
              Grado 
           </th>
           <th>
              Sección 
           </th>
           <th>
              Estatus  
           </th>
           <th>
             
           </th>


                  
                 
              </tr>
          </thead>
         
       
            <?PHP while( $row=mysqli_fetch_array($stmt1, MYSQLI_NUM)) {?>
  <tr>
  
    
    <th><?php echo $row['0']; ?></th>
    <th><?php echo $row['1']; ?></th>
    <th><?php echo $row['2']; ?></th>
    <th><?php echo $row['3']; ?></th>
    <th><?php echo $row['4']; ?></th>
    <th><?php echo $row['5']; ?></th>
    <th><?php echo $row['6']; ?></th>
     <th><?php echo $row['7']; ?></th>
      <th><?php echo $row['8']; ?></th>
 
 

 




  </tr>
  <?PHP }?> 
      </table>

      
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      
      <script src="assets/js/main.js"></script>
      <script src="lib/js/invoice.js"></script>


</body>
</html>
