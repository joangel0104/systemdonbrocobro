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
											
											

											<div class="2u 12u$(xsmall)">
												<input type="text" name="cantidad" id="cantidad" value="" placeholder="°Grado alumno "  pattern="([1-9])" required oninput="validacion(this)" maxlength="1" />
											</div>
											<br/>

											<div class="2u$ 12u$(xsmall)">
												<input type="text" name="precio" id="precio" value="" placeholder="Sección alumno "   pattern="([a-z])" required oninput="validacion(this)" maxlength="1" />
											</div>	

										<br/>
										<textarea id="comentarios" name="comentarios" rows="5" cols="35">Escriba aquí sus observaciones..</textarea>
												
										<br/>			
												

												<ul class="actions" style="text-align: center" >
												<li><input id="boton_2" style="text-align: center"  name="guardar" type="button" value="Agregar Alumno" class="principal"/></li>


											</ul>
										
	


										
									</form>
								</section>
								
							</div>
						</section>
						<div id="respuesta"></div>
					</article>
                





               
		
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

     
 

     $(document).ready(function(){
		$('#boton_2').click(function(){
            
      
      
      pol=1;  

      pol=pol*validacion(document.getElementById("name"));
      pol=pol*validacion(document.getElementById("numer"));
      pol=pol*validacion(document.getElementById("telefono"));
      pol=pol*validacion(document.getElementById("tipo_Estatus"));
      pol=pol*validacion(document.getElementById("cantidad"));  
      pol=pol*validacion(document.getElementById("precio")); 
      pol=1; 


      var name="&name="+$('#name').val();
      var numer="&numer="+$('#numer').val();
      var telefono="&telefono="+$('#telefono').val();
      var tipo_Estatus="&tipo_Estatus="+$('#tipo_Estatus').val();
      var cantidad="&cantidad="+$('#cantidad').val();
      var precio="&precio="+$('#precio').val();

   
     
       
       if(pol==0)
       {
                  
              
             alert('Por favor, Verificar los datos');

                  
       }      
       else
       {

           if($('#name').val()==""||$('#numer').val()==""||$('#telefono').val()==""||$('#tipo_Estatus').val()=='0'|| $('#cantidad').val()=="" || $('#precio').val()=="" )
           {
               alert("Por favor, Verificar los datos");
           }
           else
           {     
                      
                    var datos=$('#frmajax').serialize();
			        $.ajax({
			        type:"POST",
				    url:"agregar_alumno.php",
				    data:datos,
				    success:function(r){
				    if(r==0)
 				    {
 				        alert("Alumno Agregado con Exito");
 				        window.location.reload(); 
				    }
				    else
				    {
				       alert("CURP ya Existe verifique los datos");
                    }
			       }
			     });
            }
        }
     });
  });
  
 </script>