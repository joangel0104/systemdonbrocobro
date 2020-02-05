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
	<form id="frmajax" method="post" >
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
                                            
											

											<div class="4u$ 12u$(xsmall)" style="text-align: left">
												<input type="text" name="numer" id="numer" value="" placeholder="N° CURP" maxlength="18" required oninput="validacion(this)" pattern="[A-Z0-9]{18,18}" onkeypress="mayus1(this)" />
											</div>
										    <ul class="actions" style="text-align:center" >
										    <li><input id="buscar" style="text-align: center"  name="guardar" type="button" value="Buscar Alumno" class="principal"/></li>
										  
											
											<div class="8u 12u$(xsmall)">
												<input type="text" name="name" id="name" value=""  placeholder="Nombre y Apellido" maxlength="50"  pattern="([A -z]{3,50})" required oninput="validacion(this)" onkeypress="mayus(this)"/>
											</div>
											<br/>

											

											<div class="4u$ 12u$(xsmall)">
												<input type="text" name="telefono" id="telefono" value=""  placeholder="N° Celular Reprecentante " pattern="([1-9][0-9]{9,9})" required oninput="validacion(this)" maxlength="10" />
											</div>
											<br/>
											<select name="tipo_Estatus" id="tipo_Estatus">
                                                 <option value='0'>Seleccione Tipo Alumno..</option>
                                                 <option value='1'>Regular</option>
                                                 <option value='2'>Becado 50%</option>
                                                 <option value='3'>Becado 100%</option>
                                            </select>
                                          
											<br/>
											<select name="tipo" id="tipo">
                                                 <option value='0'>Seleccione Estatus Alumno..</option>
                                                 <option value='1'>Activo</option>
                                                 <option value='2'>Inactivo</option>
                                                 
                                            </select>
                                            <br/>
											

											<div class="2u 12u$(xsmall)">
												<input type="text" name="cantidad" id="cantidad" value="" placeholder="°Grado alumno "  pattern="([1-9])" required oninput="validacion(this)" maxlength="1" />
											</div>
											<br/>

											<div class="2u$ 12u$(xsmall)">
												<input type="text" name="precio" id="precio" value="" placeholder="Sección alumno "   pattern="([a-z])" required oninput="validacion(this)" maxlength="1" />
											</div>	

										    <br/>
										
															
												<ul class="actions" style="text-align: center" >
												<li><input id="boton_4" style="text-align: center"  name="guardar" type="button" value="Actualizar  Alumno" class="principal"/></li>


											</ul>
										
										<br>
										<br>

										
									</form>
								</section>
								
							</div>
						</section>
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

         </form> 
	</body>
</html>

<script type="text/javascript">
 var band=0;
 var pol=1;

function mayus(e) 
{
	 var tecla=e.value;
     var tecla2=tecla.toUpperCase();
     $('#name').val(tecla2);
    
}
function mayus1(e) 
{
    var tecla=e.value;
    var tecla2=tecla.toUpperCase();
    $('#numer').val(tecla2);
   
    
}
   

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
</script>