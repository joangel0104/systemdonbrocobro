<?php

  $conexion=mysqli_connect('localhost','root','','servidor.cobro');
  $sql="SELECT a.codigo,a.nombre_alumno,a.curp_alumno,a.celular_alumno,b.tipo,a.grado_alumno,a.seccion_alumno,c.estatus
FROM tabla_alumno AS a, tipo_alumno AS b ,estatus_alumno AS c
WHERE a.id_tipo=b.id_tipo AND a.id_estatus=c.id_estatus ORDER BY a.grado_alumno ASC ,a.seccion_alumno ASC  "; 
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
		<!-- Page Wrapper -->

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
								<section>
									<h4 style="text-align: center;">Datos Iniciales</h4>
									
                                           

									<form method="post" action="Imprimir_Carnet.php">
										<div class="row uniform">

											<div class="8u 12u$(xsmall)">
												<input type="text" 
												       name="name" 
												       id="name" 
												       value="" 
												       placeholder="Introduzca N° Carnet "  
												       maxlength="3" pattern="([0-9]{3,3})" 
												       required oninput="validacion(this)"
												       onkeyup="saltar(event,'boton_5')"/>
											</div>

											
														
										</div>
										<br/>
										<div class="12u$">
															
												<ul class="actions" style="text-align: left" >
												<li><input id="boton_5" 
													       style="text-align:center" 
													       name="boton_5" 
													       type="button" 
													       value="Generar Carnet " 
													       class="principal" 
													      ></li>


											</ul>
										</div>
										<br/>
										<center>
         
  <div class="derecha" id="buscar"><input  maxlength="20" type="search" class="light-table-filter" data-table="order-table" placeholder="Búsqueda "></div>
  </center>
  
  <div class="datagrid">
    <table class="order-table table">
      <thead>
        <tr class="titulo"> 
           <td>
             Código
          </td>
           

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
              Tipo Alumno
           </td>
           <td>
              Grado 
           </td>
           <td>
              Sección 
           </td>
           <td>
              Estatus  
           </td>
        </tr>
 
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
     <td><?php echo $row['7']; ?></td>
 
 




  </tr>
  <?PHP }?> 
 </table>			
						
					    
					</article>

				
			</div>

		
			

      </thead>  
      
    </table>			  
    </article>
	</div>
										

						</section>
					</article>

				
			</div>

		<!-- Scripts -->
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




 var band=0;

   

       function validacion(elem)
         {
           if (elem.checkValidity()) 
             {   
                elem.style.color="black";
                  
                return band;
             }
             else
             {
                elem.style.color="red";
                band=0;
                 
                return band;
             }
         }
         
       function saltar(e,id)
         {
	       (e.keyCode)?k=e.keyCode:k=e.which;
           if(k==13)
	       {
		     if(id=="submit")
		     {
			    document.forms[0].submit();
		     }
		     else
		     {
			    document.getElementById(id).focus();
		     }
	      }

	
}


    

     function saltar(e,id)
         {
	       (e.keyCode)?k=e.keyCode:k=e.which;
           if(k==13)
	       {
		     if(id=="submit")
		     {
			    document.forms[0].submit();
		     }
		     else
		     {
			    document.getElementById(id).focus();
		     }
	      }

	
}

 </script>

 <style >
 
table td {
      padding: 0.2em 0.2em;
      font-size: 12px;
   text-align: center;
    }


 #buscar
{
 width: 100%;
  font-size: 20px;
  color: #2e3842;
   background: #2e3842 ;
  padding-left: 20px ;
 
  border-radius: 0px;
  padding: 10px;
  margin:10px; 
}
input[type="search"]{
   
  width: 450px;
  height: 30px;
  margin-left: 0px;
  margin-top: 10px;
  padding-left: 10px;
  outline: none;
  font-size: 0.8em;
  color: #2e3842;
}


</style>   