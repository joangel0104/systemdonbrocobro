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

						<h1><a href="">System Don BRO</a></h1>
						
						<nav id="nav">

							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="Pantalla_precio_comida.php"><img height="20" src="images/nuevo.png"> Nuevo Precio Comida</a></li>
										</ul> 
										<ul>
											<li><a href="Pantalla_carnet.php"><img height="20" src="images/carnet.png"> Generar Carnet</a></li>
										</ul>
                                         <ul>
											<li><a href="Pantalla_cobro.php"><img height="20" src="images/pago.png"> Control de Pago</a></li>
										</ul>
										
										  <ul>
											<li><a href="Pantalla_asistencia.php"><img height="20" src="images/control.png"> Control Asistencia  </a></li>
										</ul>
									    <ul>
											<li><a href="Pantalla_alunno.php"><img height="20" src="images/agregar.png">   Agregar Alumno  </a></li>
										</ul>
										 <ul>
											<li><a href="Pantalla_m_alumno.php"><img height="20" src="images/recargar.png"> Actualizar Alumno  </a></li>
										</ul>
										 <ul>
											<li><a href="Pantalla_consulta_alumno.php"><img height="20" src="images/lupa.png">  Consultar Alumno</a></li>
										</ul>
										 



										 <ul>
											<li><a href=""><img height="20" src="images/reportar.png"> Reportes</a></li>
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
									
									<br/>
                                           

									<form method="post" action="#">
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
													       value="Agregar" 
													       class="principal" 
													      ></li>


											</ul>
										</div>
										
										

										<div class="table-wrapper">

											<table id="tabla_factura">
												<thead>
													<tr>
														<th>N°</th>
												        <th>Nombre y Apellido</th>
														<th>Grado</th>
														<th>Seccion</th>
														<th>N° Comida</th>
														<th>Credito Actual</th>
														<th>Fecha Actual</th>
														

													</tr>
												</thead>
												<tbody id="content_table">
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="7"></td>
														
														<td id="total_total">Total Comidas</td>
														<td></td>
													</tr>
												</tfoot>
											</table>
										</div>
									</form>
								</section>
								<br> 
								<br>
								<br>
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

     
 

    
 </script>
