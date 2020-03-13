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
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	
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
						<section class="wrapper style5">
                         <div class="inner">
							<section>
								<h4 style="text-align: center;">Datos Iniciales</h4>
									<br/>
                                        <select name="tipo_Estatus" id="tipo_Estatus">
                                             <option value='0'>Seleccione Forma de Pago..</option>
                                             <option value='1'>Efectivo</option>
                                             <option value='2'>Deposito</option>
                                             <option value='3'>Pago Diario</option>
                                              <option value='4'>Vale</option>
                                        </select>
						            <br/>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="8u 12u$(xsmall)">
												<input 	type="text" 
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
											<div class="4u$ 12u$(xsmall)">
												<input 	type="text" 
														name="numero" 
														id="numero" 
														value="" 
														maxlength="3" 
														placeholder="N° Dias a Pagar" 
														required 
														oninput="validacion(this)"
														onkeypress="javascript:return isNumberKey(event)" 
														

														onkeyup="calculo_a_pagar();saltar(event,'btn-abrir-popup');saltar(event,'recibe')" />


											</div>		
										</div>
										<br/>
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
															onclick="agregar_pago()" 
															

														/>
														Agregar Pago
														</button>
												</li>
											</ul>
										</div>
										<div>
												<input  style="text-align:left;
															font-size: 20" 
														type="text" 
														name="monto" 
														id="monto" 
														value="$" 
														placeholder="$"
														readonly />
										
										</div>
										<br>
										

										<div class="table-wrapper" id="facturas">

											
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

	<script src="popup.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="lib/js/invoice.js"></script>

	</body>
</html>

<script type="text/javascript">

document.getElementById("cambio").disabled =true;


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
		console.log(document.getElementById("tipo_Estatus").value);
		if (document.getElementById("tipo_Estatus").value == 0) {
			validador =0;
		}
		if (validador==0) {
			alert("Por favor, Verificar los datos");
			return;
		}
		let datos = {}
		datos.codigo = $('#codigo').val();
		datos.numero = $('#numero').val();
		datos.tipo_pago = document.getElementById("tipo_Estatus").value;
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
			$('#monto').val(parseFloat(precio).toFixed(2));
			
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
		/* aqui preuba*/
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
                       alert('Error');
                   }
               }
           }); 
        });
    });




function saltarr(e,id)
{
  // Obtenemos la tecla pulsada
  (e.keyCode)?k=e.keyCode:k=e.which;
 
  // Si la tecla pulsada es enter (codigo ascii 13)
  if(k==13)
  {
    // Si la variable id contiene "submit" enviamos el formulario
    if(id=="submit")
    {
      document.forms[0].submit();
    }else{
      // nos posicionamos en el siguiente input
      document.getElementById(id).focus();
    }
  }

  
}
</script>
