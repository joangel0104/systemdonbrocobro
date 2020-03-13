<!DOCTYPE HTML>

<html>
	<head>
		 <link  rel="icon"   href="images/logo.png" type="image/png" />
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
											<li><a href="Pantalla_alumno.php"><img height="20" src="images/agregar.png">   Agregar Alumno  </a></li>
										</ul>
										 <ul>
											<li><a href="Pantalla_m_alumno.php"><img height="20" src="images/recargar.png"> Actualizar Alumno  </a></li>
										</ul>
										 <ul>
											<li><a href="Pantalla_consulta_alumno.php"><img height="20" src="images/lupa.png">  Consultar Alumno</a></li>
										</ul>
										 <ul>
											<li><a href="pantalla_reportes.php"><img height="20" src="images/reportar.png"> Reportes</a></li>
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

                         	
								<section>
									<h4 style="text-align: center;">Datos Iniciales</h4>
									<br/>
									
                                     <div class="8u 12u$(xsmall)">
                        <input  type="text" 
                            name="codigo" 
                            id="codigo" 
                            value="" 
                            maxlength="3" 
                            placeholder="Introduzca N° Carnet " 
                            required 
                            onblur="relacion_credito = get_relacion_creditos()" 
                            oninput="validacion(this)" 
                            onkeyup="saltar(event,'numero')"/>
                      </div>
						            
				                    <form action="" method="POST"> 
                                    Desde:
                                    <br>
                                    <input 
                                    type="date" 
                                    id="hasta" 
                                    name="hasta" 
                                    step="1"
                                    min="2019-01-01" >
                                    
                                    Hasta:
                                    <br>
                                    <input
                                    type="date" 
                                    id="desde" 
                                    name="desde" 
                                    step="1" 
                                    min="2019-01-01" >
                                    <br/>
                                    
										
									    <ul class="actions" style="text-align: center" >
										<li><input id="boton_buscar" style="text-align: center"  name="guardar" type="button" value="Buscar            " class="principal"/></li>
									    </ul>
								<div class="table-wrapper">

                      <table id="tabla_factura">
                        <thead>
                          <tr>
                            <th>N°</th>
                            <th>Codigo</th>
                            <th>Nombre y Apellido</th>
                            <th>Tipo alumno</th>
                            <th>Grado</th>
                            <th>Sección</th>
                            <th>Estatus</th>
                            <th>Fechas de Asistencia </th>
                            

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
                       
                      </table>
                    </div>
                </section>
								
								
							</div>
						
					    <div id="respuesta"></div>
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
 
 



 


 </script>