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
									<br/>
                                        <select name="tipo_Estatus" id="tipo_Estatus">
                                             <option value='0'>Seleccione Forma de Pago..</option>
                                             <option value='1'>Efectivo</option>
                                             <option value='2'>Deposito</option>
                                             <option value='3'>Pago Diario</option>
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
														oninput="validacion(this)" onkeyup="saltar(event,'numero')"/>
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
														onkeyup="calculo_a_pagar();saltar(event,'boton_6')" />

											</div>		
										</div>
										<br/>
										<div class="12u$">
											<ul class="actions" style="text-align: center" >
												<li>
													<button id="boton_6" 
															style="text-align: center" 
															name="guardar" 
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

			<!-- Scripts -->
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
			JSON.parse(argument)
		} catch (e){
			return false;
		}
		return true;
	}
	//ajax del metodo get para consultar la relacion pecio;
	async function get_relacion_creditos() {
		let response = await $.ajax({
						type:"GET",
					    url:"consulta_relacion_credito.php",
					    success: await function(repuesta) {
						    if(isJson(repuesta)) {
						        return repuesta;
						    } else {
						       alert("Error de Servidor");
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
							    	console.log('erre',r);
								    if(r==1) {
								        alert("Pago Exitoso");
								        get_render_table();
								        //window.location.reload(); 
								    } else {
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
		console.log(datos);
		//return;
		if($('#name').val()==""||$('#numero').val()=="") {
	       alert("Por favor, Verificar los datos");
	   	} else {           

	        await post_agregar_pago(datos);
	        
	    }
	
	}

	async function main() {
		relacion_credito = await get_relacion_creditos();
		if(isJson(relacion_credito)){
			relacion_credito = JSON.parse(relacion_credito);
		}
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
		relacion_credito;
		numero = await parseInt($('#numero').val());
		await console.log(numero);
		if (isNaN(numero)) {
			$('#monto').val('');	
		} else {
			let precio = (parseInt(numero)/parseInt(relacion_credito.credito_actual))*parseFloat(relacion_credito.precio_actual)
			$('#monto').val(parseFloat(precio).toFixed(2));
		}
	}

	$(document).ready(main());




	function saltar(e,id)
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

	/* aqui preuba*/
}

</script>
