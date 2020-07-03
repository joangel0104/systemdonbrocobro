<html>
	<?php require_once './vistas/head2.php'; ?>
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


  <form id="frmajax" method="post" >
     <div id="page-wrapper">
        <header id="header">
            <img name="imagen" src="images/logo.png" >
            <h1><a>System Don BRO</a></h1>
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
							  <li><a href="Pantalla_alumno.php">
							  	      <img height="35" src="images/agregar-usuario.png">   Agregar Alumno  
							  	  </a>
							  </li>
						   </ul>
						  <hr id="linea_menu_2"  size=3>
						   <ul>
                              <li><a href="Pantalla_carnet.php">
                              	    <img height="30" src="images/carnet-de-identidad.png"> Generar Carnet
                              	  </a>
                              </li>
						   </ul>
                          <hr id="linea_menu_2"  size=3>
                            <ul>
							  <li><a href="Pantalla_consulta_alumno.php">
							  	     <img height="30" src="images/informacion.png">  Consultar Alumno
							  	 </a>
							  </li>
							</ul>
						  <hr id="linea_menu_2"  size=3>
                             <ul>
							   <li><a href="Pantalla_cobro.php">
							   	      <img height="30" src="images/banca-en-linea.png"> Control de Pago
							   	   </a>
							   </li>
							 </ul>
						  <hr id="linea_menu_2"  size=3>
							 <ul>
							   <li><a href="test_asistencia.php">
							   	      <img height="30" src="images/informacion-personal.png"> Control Asistencia  </a></li>
							 </ul>
						  <hr id="linea_menu_2"  size=3>
							 <ul>
								<li><a href="pantalla_reportes.php">
									  <img height="30" src="images/datos.png"> Reportes
									</a>
								</li>
							 </ul>
						  <hr id="linea_menu_2"  size=3>
							 <ul>
								<li><a href="sesion.php">
									  <img height="30" src="images/apagar.png"> Cerrar sección 
							        </a>
							    </li>
							 </ul>
					 </div>
                    </li>
                  </ul>
               </nav>
          </header>
<article id="main">
   <div id="page-wrapper">
			<?php require_once './vistas/header.php' ?>
				<article id="main">

					<section class="wrapper style5">
                       <div class="inner">
						 <section>
							<form method="post" action="#">
							   <div class="row uniform">
								   <div id="general_1">	
										 
										 <h4 id="text_1" style="text-align: left;">Datos Iniciales</h4>

									          <div class="8u 12u$(xsmall)">
												<input 	type="text" 
														name="codigo" 
														id="codigo" 
														value="" 
														maxlength="3" 
														placeholder="Introduzca código alumno " 
														required 
														onblur="relacion_credito = get_relacion_creditos()" 
														
											            onkeyup="saltar(event,'numero');datos()" 
											             onkeypress="return validar_numero(event)"/>

											  </div>
											  <div class="4u$ 12u$(xsmall)">
												<input 	type="text" 
														name="numero" 
														id="numero" 
														value="" 
														maxlength="3" 
														placeholder="N° Dias a Pagar" 
														required 
														
														onkeypress="javascript:return isNumberKey(event);return validar_numero(event)" 
														onkeyup="calculo_a_pagar();saltar(event,'efectivo');saltar(event,'recibe')" />
                                                </div>

                                                <h4 id="text_2" style="text-align: left;">Formas de pago</h4>
                                 			<?php 
                                 				require_once './componentes/tipos_pagos.php'
                                 			?>
									 </div>
                                     <div id="fondo_tabla_pago">
									    <br><div class="table-wrapper" id="facturas"></div>
									  </div>

                                   <div id="general_3"> 

									   <h4 id="text_1" style="text-align: left;">Datos Alumno</h4>
                                           <div class="8u 12u$(xsmall)">
											    <input 	type="text" 
													name="nombres" 
													id="nombres" 
													value=""  
													placeholder="Nombres y Apellidos" 
													maxlength="50"  
													pattern="([A -z]{3,50})" 
													required oninput="validacion(this)" 
													onkeyup="mayus(this)"/>
										   </div>
                                           <br>
                                           <div class="2u 12u$(xsmall)">
											    <input 	type="text" 
													name="grados" 
													id="grados" 
													value="" 
													placeholder="°Grado alumno "  
													pattern="([1-9])" 
													required 
													oninput="validacion(this)" 
													maxlength="1" />
										   </div>
										   <br>
										   <div class="2u$ 12u$(xsmall)">
											    <input 	type="text" 
													name="secc" 
													id="secc" 
													value="" 
													placeholder="Sección alumno "   
													pattern="([a-z])" 
													required 
													oninput="validacion(this)" maxlength="1" />
										    </div>	
											<br>
                                             <h4 id="text_3" style="text-align: left;">Total a pagar</h4>
										
										    <div>
												<input  style="text-align:left;
															" 
														type="text" 
														name="monto" 
														id="monto" 
														value="$" 
														placeholder="$"
														readonly />
										    </div>
										
                                 		
										   	<div class="12u$">
											  <ul class="actions"   style="text-align: center" >
												<li>
													<button 
													        id="btn-abrir-popup"
															style="text-align: center" 
															name="cobrar" 
															type="button" 
															value="" 
															class="principal" 
															onclick="agregar_pago()" />
														    Agregar Pago            
												    </button>
												</li>
											</ul>
										</div>
								    </div>
							 </div>
                                         
							</form>
						</section>
					</section>
				</article>
			</div>
        </div>
         </div>


<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>Pago Exitoso..</h3>
				<br>
				<form action="">
					<div class="contenedor-inputs">
					   
						<input  maxlength="4" pattern="([1-9][0-9]{4,4})" onkeyup="vueltas();saltarr(event,'impre')" id="recibe" name="recibe" type="text" placeholder="Recibe" autofocus>
						<label style="font-size: 1.5em;">Cambio</label>
						<input id="cambio" name="cambio"  type="text" placeholder="$">
					</div>
					                      <div class="12u$">
											<ul class="actions"   style="text-align: center" >
												<li>
													<button 
													        id="impre"
															style="text-align: center" 
															name="impre" 
															type="button" 
															value="" 
															class="principal" 
															
														/>
														Imprimir ticket
														</button>
												</li>
											</ul>
										</div>
				</form>
			</div>
		</div>
	</div>



  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.scrollex.min.js"></script>
  <script src="assets/js/jquery.scrolly.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>
  
  </body>
</html>

<script type="text/javascript">


document.getElementById("cambio").disabled =true;
document.getElementById("nombres").disabled =true;
document.getElementById("grados").disabled =true;
document.getElementById("secc").disabled =true;
document.getElementById("monto").disabled =true;

	var relacion_credito={};
	function validacion(elem) {
		var band=1;
		if (elem.checkValidity()) {   
			elem.style.color="black";
			return band;
		} else {
			elem.style.color="red";
			band=0;
			return band;
		}
	}

	function isJson(argument) {
		try{
			let a = JSON.parse(argument);
			if (a == null) {
				return false;
			}
		} catch (e){
			return false;
		}
		return true;
	}
	//ajax del metodo get para consultar la relacion pecio;
	async function get_relacion_creditos() {
		let datos = {};
		datos.codigo = $('#codigo').val();
		let response = await $.ajax({
						type:"POST",
						data:datos,
					    url:"consulta_relacion_credito.php",
					    success: await function(repuesta) {
						    if(isJson(repuesta)) {
								relacion_credito = JSON.parse(repuesta);
						        return relacion_credito;
						    } else {
						       alert("Codigo invalido");
						       return false;
				            }
						}
					});
		return response;
	}

	async function post_agregar_pago(datos) {
		let response = await $.ajax({
								type:"POST",
							    url:"agregar_pago.php",
							    data:datos,
							    success: await function(r) {
								    if(r==1) {
								        
								        overlay.classList.add('active');
	                                    popup.classList.add('active');
	                                    
	                                     document.getElementById("btn-abrir-popup").disabled = true;


								        get_render_table();




								    } else {
								    	console.log(r);
								    	alert("Error de Servidor");
						            }
								}
							});		
		return response; 
	}

	async function get_render_table() {
		let response = await $.ajax({
						type:"GET",
					    url:"consulta_contro_pago.php",
					    dataType: 'html',
					    success: await function(repuesta) {
						    $('#facturas').html(repuesta);
						}
					});
		return response;
	}

	async function agregar_pago() {
		validador=1;  
		validador=validador*validacion(document.getElementById("codigo"));
		validador=validador*validacion(document.getElementById("numero")); 
		
		if (validador==0) {
			alert("Por favor, Verificar los datos");
			return;
		}
		let datos = {}
		datos.codigo = $('#codigo').val();
		datos.numero = $('#numero').val();
		
		datos.monto = parseFloat($('#monto').val()).toFixed(2);
		//validaciones extras
		if(!relacion_credito.hasOwnProperty('precio_comida')){
			alert('no se puede realizar la peticion');
			return;
		} else if(parseInt(relacion_credito.precio_comida) == 0){
			alert('no se puede realizar la peticion a alumnos cuya beca es gratuita');
			return;
		} else if(parseFloat(datos.monto) <=0){
			alert('el valor del monto es inapropiado');
			return;
		}
		if($('#name').val()==""||$('#numero').val()=="") {
	       alert("Por favor, Verificar los datos");
	   	} else {           
	        await post_agregar_pago(datos);
	    }
	}

	async function main() {
		get_render_table(); 
	};

	function isNumberKey(evt){

		var e = evt || window.event;
		var charcode = e.which || evt.keyCode;
		if(charcode > 31 && (charcode < 47 ||charcode >57)){
			return false;
		}
		if (e.shiftKey) {
			return false;
		}
		return true;
	}

	async function calculo_a_pagar() {
		if(!relacion_credito.hasOwnProperty('precio_comida')){
			alert('no se ha adquirido el precio de pago de este codigo');
			return;
		}
		numero = await parseInt($('#numero').val());
		if (isNaN(numero)) {
			$('#monto').val('');	
		} else {
			let precio = (parseInt(numero))*parseFloat(relacion_credito.precio_comida)
			$('#monto').val("$"+parseFloat(precio).toFixed(2));
			
		}
	}

	$(document).ready(main());

	function saltar(e,id){
		// Obtenemos la tecla pulsada
		(e.keyCode)?k=e.keyCode:k=e.which;
		// Si la tecla pulsada es enter (codigo ascii 13)
		if(k==13) {
			// Si la variable id contiene "submit" enviamos el formulario
			if(id=="submit"){
				//hacemos el pago
				agregar_pago();
			}else{		
				document.getElementById(id).focus();
			}
		}
		/* aqui prueba*/
	}

	async function vueltas() 
	{
         var calculo,num1,num2;
		 $('#cambio').val('');

          num1=parseInt($('#recibe').val());
          num2=parseInt($('#monto').val());

         calculo=num1-num2;
         if(num1>=num2) 
         {

          $('#cambio').val("$"+calculo);

         }


	}


	
$(document).ready(function(){
        $('#impre').click(function(){
          var datos=$('#codigo').serialize();
           $.ajax({
               url: "ticket.php",
               type: "POST",
               data:datos,
               success: function(response){
                   if(response==1){
                       window.location.reload();  
                   }else{
                       alert('Error.....');
                   }
               }
           }); 
        });
    });

function saltarr(e,id){
 (e.keyCode)?k=e.keyCode:k=e.which;
    if(k==13){
       if(id=="submit"){
          document.forms[0].submit();
    }else{
      document.getElementById(id).focus();
    }
  }
}

async function datos(){
   $('#nombres').val('');
   $('#grados').val('');
   $('#secc').val('');
   var Parametros="&codigo="+$('#codigo').val();
       $.ajax({
         url: "consul_datos.php",
         data: Parametros,
         type: 'POST',
         beforeSend: function(){     
             //$("#Loading").css("display","");
         },
            success: function(Resultado){
                  var valor = Resultado.split('&');
                  if(valor[0]==1){
                      $('#nombres').val(valor[1]);
                      $('#grados').val('°Grado: '+valor[2]);
                      $('#secc').val('Sección: '+valor[3]);
                  }
                           
            }
        });
}
 function validar_numero(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8){
        return true;
    }
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}




var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	
});

btnCerrarPopup.addEventListener('click', function(e)
{
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
</script>
