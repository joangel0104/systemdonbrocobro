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
											<li><a href="Pantalla_m_alumno.php">Modificar Alumno  </a></li>
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
									
									<br/>
                                           

									<form method="post" action="#">
										<div class="row uniform">

											<div class="8u 12u$(xsmall)">
												<input type="text" name="name" id="name" value="" placeholder="Introduzca N° Carnet " />
											</div>

											
														
										</div>
										<br/>
										<div class="12u$">
															
												<ul class="actions" style="text-align: left" >
												<li><input id="boton_5" style="text-align:center" name="guardar" type="button" value="Agregar" class="principal" id="add_row"/></li>


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