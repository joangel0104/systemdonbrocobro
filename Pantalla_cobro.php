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
                                            <select name="tipo_Estatus" id="tipo_Estatus">
                                                 <option  value='0'>Seleccione Forma de Pago..</option>
                                                 <option value='1' >Efectivo</option>
                                                 <option value='2'>Deposito</option>
                                                 <option value='3'>Pago Diario</option>
                                            </select>
							                <br/>

									<form method="post" action="#">
										<div class="row uniform">

											<div class="8u 12u$(xsmall)">
												<input type="text" name="name" id="name" value="" placeholder="Introduzca N° Carnet " required oninput="validacion(this)"/>
											</div>

											<div class="4u$ 12u$(xsmall)">
												<input type="text" name="numero" id="numero" value="" placeholder="N° Dias a Pagar" required oninput="validacion(this)" />
											</div>

														
										</div>
										<br/>
										<div class="12u$">
															
												<ul class="actions" style="text-align: center" >
												<li><input id="boton_6" style="text-align: center" name="guardar" type="button" value="Agregar Pago" class="principal" id="add_row"/></li>


											</ul>
										</div>
										<div>
												<input  style="text-align:left;" type="text" name="monto" id="monto" value="" placeholder="$"/>
										
										</div>
										<br>
										

										<div class="table-wrapper">

											<table id="tabla_factura">
												<thead>
													<tr>
														<th>N°</th>
												        <th>Nombre y Apellido</th>
														<th>Grado</th>
														<th>Seccion</th>
														 <th>Forma de Pago</th>
														<th>monto Pagado</th>:
														<th>N° Comida</th>
														<th>Credito</th>
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
														<td></td>
														<td></td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="8"></td>
														
														<td id="total_total">$0.00</td>
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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
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

     
 

     $(document).ready(function(){
		$('#boton_6').click(function(){
            
      
      
      pol=1;  

      pol=pol*validacion(document.getElementById("name"));
      pol=pol*validacion(document.getElementById("numero"));
      
      pol=1; 


      var name="&name="+$('#name').val();
      var numero="&numero="+$('#numero').val();
     
   
     
       
       if(pol==0)
       {
                  
              
             alert('Por favor, Verificar los datos');

                  
       }      
       else
       {

           if($('#name').val()==""||$('#numero').val()=="")
           {
               alert("Por favor, Verificar los datos");
           }
           else
           {     
                      
                    var datos=$('#frmajax').serialize();
			        $.ajax({
			        type:"POST",
				    url:"agregar_pago.php",
				    data:datos,
				    success:function(r)
				    {
				   
				    if(r==1)
 				    {
 				        alert("Pago Exitoso");
 				        window.location.reload(); 
				    }
				    else
				    {
				       alert("Error de Servidor");

                    }
			       }
			     });
            }
        }
     });
  });
  
 </script>
