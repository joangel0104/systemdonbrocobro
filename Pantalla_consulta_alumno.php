<?php

  $conexion=mysqli_connect('localhost','root','','servidor.cobro');
  $sql="SELECT * FROM tabla_alumno"; 
  $stmt1 = mysqli_query($conexion, $sql);
?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>System Don BRO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="jquery-3.2.1.min.js"></script>

      </head>


	<body>
		<div id="page-wrapper">
              <header id="header">
						<img name="imagen" src="images/logo.png" >

						<h1><a>System Don BRO</a></h1>
						
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
											<li><a href="Pantalla_alunno.php">Agregar Alumno</a></li>
										</ul>
										 <ul>
											<li><a href="Pantalla_m_alumno.php">Modificar Alumno</a></li>
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
						
						<section class="wrapper style5" >
                         <div class="inner">
							
							
										
									
  <center>
         
  <div class="derecha" id="buscar"><input  maxlength="20" type="search" class="light-table-filter" data-table="order-table" placeholder="Búsqueda "></div>
  </center>
  
  <div class="datagrid">
    <table class="order-table table">
      <thead>
        <tr class="titulo"> 
          
           <td>
              Nombres y Apellidos
           </td>
           <td>
              CURP
           </td>
           <td >
              Teléfono Representante  
           </td>
           <td>
              Estatus alumno
           </td>
           <td>
              Seccion 
           </td>
           <td>
              Grado
           </td>
           <td>
              Codigo
          </td>
        </tr>
 
      </thead>
      
  <?PHP while( $row=mysqli_fetch_array($stmt1, MYSQLI_NUM)) {?>
  <tr>
  
    <td><?php echo $row['1']; ?></td>
    <td><?php echo $row['2']; ?></td>
    <td><?php echo $row['3']; ?></td>
    <td><?php echo $row['4']; ?></td>
    <td><?php echo $row['5']; ?></td>
    <td><?php echo $row['6']; ?></td>
    <td><?php echo $row['7']; ?></td>
  </tr>
  <?PHP }?> 
 </table>			
						
					    
					</article>

				
			</div>

		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="lib/js/invoice.js"></script>


      </thead>  
      <?PHP while( $row=mysqli_fetch_array($stmt1, MYSQLI_NUM)) {?>
        <tr>
          <td><?php echo $row['0']; ?></td>
          <td><?php echo $row['1']; ?></td>
          <td><?php echo $row['2']; ?></td>
          <td><?php echo $row['3']; ?></td>
          <td><?php echo $row['4']; ?></td>
          <td><?php echo $row['5']; ?></td>
          <td><?php echo $row['6']; ?></td>
        </tr>
      <?PHP }?> 
    </table>			  
    </article>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="lib/js/invoice.js"></script>
	</body>
</html>

<script type="text/javascript">
    
(function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>  


</script>   
<style >
 #buscar
{
 width: 100%;
  font-size: 22px;
  color: #fff;
   background: #2e3842 ;
  padding-left: 20px ;
 
  border-radius: 0px;
  padding: 10px;
  margin:10px; 
}
input[type="search"]{
   
  width: 450px;
  height: 25px;
  margin-left: 0px;
  margin-top: 10px;
  padding-left: 10px;
  outline: none;
  font-size: 0.8em;

}


</style>   