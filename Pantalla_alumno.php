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
  		 
    </head>
    <body>
	<form id="frmajax" method="post" >
	    <div id="page-wrapper">
			<header id="header">
						<img name="imagen" src="images/logo.png" >

						<h1><a>           System Don BRO</a></h1>
						
						<nav id="nav">

							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span><?php $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                             $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                             date_default_timezone_set("America/Mexico_City");
                                             $mysql_tiempo=date('Y/m/d');
                                             $tiempo=strtotime($mysql_tiempo);
                                             $variable=date('d/m/Y',$tiempo);
                                             echo  $fecha_escrita=$diassemana[date('w',$tiempo)]." ".date('d',$tiempo)." de ".$meses[date('n',$tiempo)-1]. " del ".date('Y',$tiempo) ;?></span></a>
									<div id="menu">
										<div id="menus"><img id="imagen" height="160" src="images/user01.png"> </div>
										<br/>
																				
										<ul>
											<li><a href="Pantalla_alumno.php"><img height="35" src="images/agregar-usuario.png">   Agregar Alumno  </a></li>
										</ul>
										<hr id="linea_menu_2"  size=3>
										<ul>
											<li><a href="Pantalla_carnet.php"><img height="30" src="images/carnet-de-identidad.png"> Generar Carnet</a></li>
										</ul>
                                        <hr id="linea_menu_2"  size=3>
                                        <ul>
											<li><a href="Pantalla_consulta_alumno.php"><img height="30" src="images/informacion.png">  Consultar Alumno</a></li>
										</ul>
										<hr id="linea_menu_2"  size=3>
                                        <ul>
											<li><a href="Pantalla_cobro.php"><img height="30" src="images/banca-en-linea.png"> Control de Pago</a></li>
										</ul>
										<hr id="linea_menu_2"  size=3>
										<ul>
											<li><a href="test_asistencia.php"><img height="30" src="images/informacion-personal.png"> Control Asistencia  </a></li>
										</ul>
										<hr id="linea_menu_2"  size=3>
									    <ul>
											<li><a href="pantalla_reportes.php"><img height="30" src="images/datos.png"> Reportes</a></li>
										</ul>
										<hr id="linea_menu_2"  size=3>
										<ul>
											<li><a href="sesion.php"><img height="30" src="images/apagar.png"> Cerrar sección </a></li>
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
									
                                   <div id="fondo_1">
                                   	<br/>
									<h4  id="tex1" ><img height="30" src="images/agregar.png"> Agregar Alumno</h4>
									</div>
									
									<div id="fondo_2">
                                        <div class="8u 12u$(xsmall)">
											<input 	type="text" 
													name="nombre" 
													id="nombre" 
													value=""  
													placeholder="Nombre y Apellido" 
													maxlength="50"  
													pattern="([A -z]{3,50})" 
													onkeypress="return solo_letra(event)"
													oninput="mayus(this)"/>
										</div>
										<br/>
										
										<div class="4u$ 12u$(xsmall)">
											<input 	type="text" 
													name="celular" 
													id="celular" 
													value=""  
													placeholder="Teléfono Contacto "
													pattern="([1-9][0-9]{9,9})" 
													required 
													onkeypress="return solo_numero(event)"
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
													onkeypress="return solo_numero(event)"
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
													onkeypress="return solo_letra(event)" 
													maxlength="1" />
										</div>	

									
										
										
                                        <hr id="linea2"  size=3>
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
                                        <div class="2u$ 12u$(xsmall)">
										<textarea 
										            id="observacion" 
										            name="observacion" 
										            oninput="validacion(this)" maxlength="500"
										            rows="3" cols="35">Escriba aquí sus observaciones..
										 </textarea>
										</div>	
										
									</form>
								</section>
							</div>
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



$(document).ready();

function enviarDatos(){
	console.log('llamos');
 	


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
		    	 window.location.reload();  
		    }
		    else {
		       alert("no se pudo almacenar el alumno");
		    }
	   	}
 	});
 }
 //validar solo letra
function solo_letra(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8){
        return true;
    }
    patron = /[ A-Za-z]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
//validar solo numero
function solo_numero(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8){
        return true;
    }
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
  
 </script>
