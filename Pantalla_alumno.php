<!DOCTYPE HTML>

<html>
	<head>
		<title>System Don BRO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="jquery-3.2.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
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
                                        <div class="8u 12u$(xsmall)">
											<input 	type="text" 
													name="nombre" 
													id="nombre" 
													value=""  
													placeholder="Nombre y Apellido" 
													maxlength="50"  
													pattern="([A -z]{3,50})" 
													required oninput="validacion(this)" 
													onkeyup="mayus(this)"/>
										</div>
										<br/>
										<br/>
										<div class="4u$ 12u$(xsmall)">
											<input 	type="text" 
													name="celular" 
													id="celular" 
													value=""  
													placeholder="N° Celular Reprecentante "
													pattern="([1-9][0-9]{9,9})" 
													required 
													oninput="validacion(this)" 
													maxlength="10" />
										</div>
										<br/>
										<select name="beca_id" id="beca_id">
                                             <option value='0'>Seleccione Tipo Alumno..</option>
                                             <option value='1'>Regular</option>
                                             <option value='2'>Becado 50%</option>
                                             <option value='3'>Becado 100%</option>
                                        </select>
                                        <br/>
										<div class="2u 12u$(xsmall)">
											<input 	type="text" 
													name="grado" 
													id="grado" 
													value="" 
													placeholder="°Grado alumno "  
													pattern="([1-9])" 
													required 
													oninput="validacion(this)" 
													maxlength="1" />
										</div>
										<br/>
										<div class="2u$ 12u$(xsmall)">
											<input 	type="text" 
													name="seccion" 
													id="seccion" 
													value="" 
													placeholder="Sección alumno "   
													pattern="([a-z])" 
													required 
													oninput="validacion(this)" maxlength="1" />
										</div>	
										<br/>
										<div class="2u$ 12u$(xsmall)">
											<input 	type="text" 
													name="observacion" 
													id="observacion" 
													value="" 
													placeholder="Observacion"    
													pattern="([A -z]{3,50})" 
													required 
													oninput="validacion(this)" maxlength="255" />
										</div>	
										<br/>			
										<ul class="actions" 
											style="text-align: center" >
											<li>
												<input 
													id="guardaralumno" 
													style="text-align: center"  
													name="guardar" 
													type="button" 
													value="Agregar Alumno" 
													class="principal"
													onclick="enviarDatos()" />
											</li>
										</ul>
									</form>
								</section>
							</div>
						</section>
						<div id="respuesta"></div>
					</article>
                
            <!--SCRIPTS-->
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
	$('#nombre').val(tecla2);   
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

$(document).ready();

function enviarDatos(){
	console.log('llamos');
 	pol=1;  

    pol=pol*validacion(document.getElementById("nombre"));
    pol=pol*validacion(document.getElementById("beca_id"));
    pol=pol*validacion(document.getElementById("celular"));
    pol=pol*validacion(document.getElementById("grado"));
    pol=pol*validacion(document.getElementById("seccion"));  
    pol=pol*validacion(document.getElementById("observacion")); 
    pol=1; 


	var nombre=$('#nombre').val();
	var beca_id=$('#beca_id').val();
	var celular=$('#celular').val();
	var grado=$('#grado').val();
	var seccion=$('#seccion').val();
	var observacion=$('#observacion').val();

	if(pol==0){
	    alert('Por favor, Verificar los datos');
	    return;
	}

   	if(	$('#nombre').val()==""||
   		$('#beca_id').val()=='0'||
   		$('#celular').val()==""||
   		$('#grado').val()==""|| 
   		$('#seccion').val()=="" || 
   		$('#observacion').val()=="" ) {
       		alert("Por favor, Verificar los datos");
       	return;
   	}     
    let datos= {};
    datos.nombre = nombre;
    datos.beca_id = beca_id;
    datos.celular = celular;
    datos.grado = grado;
    datos.seccion = seccion;
    datos.observacion = observacion;
    console.log(datos);
    $.ajax({
	    type:"POST",
	    url:"agregar_alumno.php",
	    data:datos,
	    success:function(r){
		    if(r==1){
		    	alert("Alumno Agregado con Exito");    
		    }
		    else {
		       alert("no se pudo almacenar el alumno");
		    }
	   	}
 	});
 }
    
  
 </script>