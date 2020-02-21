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

                          <form action="consulta_alumno.php" method="post" >
							<div class="inner">
								<section>
								
                <h4 style="text-align: center;">Datos Iniciales</h4>
									
									<br/>
                                            
											

											<div class="4u$ 12u$(xsmall)" style="text-align: left">
											<input 
                      type="text" 
                      name="numer" 
                      id="numer"  
                      value="" 
                      placeholder="Introduzca N° Carnet " 
                      required oninput="validacion(this)"   
                      maxlength="3" 
                      pattern="([0-9]{3,3})"
                      onkeyup="saltar(event,'buscar')"
                        />
											</div>
										     
										    <ul class="actions" style="text-align:center" >
										    <li><input  id="buscar" style="text-align: center"  name="buscar" type="button" value="Buscar Alumno"  class="principal"/></li>
										  
											
											<div class="8u 12u$(xsmall)">
												<input type="text" name="name" id="name" value=""  placeholder="Nombre y Apellido" maxlength="50"  pattern="([A -z]{3,50})" required oninput="validacion(this)" onkeypress="mayus1(this)"/>
											</div>
											<br/>
                                            <div class="8u 12u$(xsmall)">
												<input type="text" name="curp" id="curp" value=""  placeholder="N° CURP" maxlength="18" pattern="[A-Z0-9]{18,18}" required oninput="validacion(this)" onkeypress="mayus(this)"/>
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
												<li><input id="boton_4" style="text-align: center"  name="boton_4" type="button" value="Actualizar  Alumno" class="principal"/></li>


											</ul>
										
										
										
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
     $('#curp').val(tecla2);
    
}
function mayus1(e) 
{
    var tecla=e.value;
    var tecla2=tecla.toUpperCase();
    $('#name').val(tecla2);
   
    
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

   document.getElementById("boton_4").disabled = true;
   document.getElementById("name").disabled =true;
   document.getElementById("curp").disabled = true;
   document.getElementById("telefono").disabled = true;
   document.getElementById("tipo_Estatus").disabled =true;
   document.getElementById("tipo").disabled =true;
   document.getElementById("cantidad").disabled =true;
   document.getElementById("precio").disabled =true;     
          
    $(document).ready(function()
    {
		$('#buscar').click(function()
		{
            var Parametros=$('#frmajax').serialize();

               $.ajax(
                       {
                          url: "consulta_alumno.php",
                          data: Parametros,
                          type: 'POST',
                          beforeSend: function() 
                          {     
                              //$("#Loading").css("display","");
                          },
                          success: function(Resultado)
                          {

                            var valor = Resultado.split('&');
                            
                            if(valor[0]==1)
                            {
                              $('#name').val(valor[1]);
                              $('#curp').val(valor[2]);
                              $('#telefono').val(valor[3]);
                               $('#cantidad').val(valor[4]);
                              $('#precio').val(valor[5]);
                             
                               
                                document.getElementById("boton_4").disabled = false;
                                document.getElementById("name").disabled =false;
                                document.getElementById("curp").disabled = false;
                                document.getElementById("telefono").disabled = false;
                                
                                document.getElementById("tipo_Estatus").disabled =false;
                                document.getElementById("tipo").disabled =false;
                                document.getElementById("cantidad").disabled =false;
                                document.getElementById("precio").disabled =false;

                              

                            }
                            else
                            {
                              
                               alert('No Existe en el Registro...')

                                document.getElementById("boton_4").disabled = true;
                                document.getElementById("name").disabled =true;
                                document.getElementById("curp").disabled = true;
                                document.getElementById("telefono").disabled = true;
                                
                                document.getElementById("tipo_Estatus").disabled =true;
                                document.getElementById("tipo").disabled =true;
                                document.getElementById("cantidad").disabled =true;
                                document.getElementById("precio").disabled =true;

                            }

                          }
                        });

        

              });
     
      }); 



$(document).ready(function()
    {
		$('#boton_4').click(function()
		{
          pol=1;  

          pol=pol*validacion(document.getElementById("name"));
          pol=pol*validacion(document.getElementById("curp"));
          pol=pol*validacion(document.getElementById("telefono"));
          pol=pol*validacion(document.getElementById("tipo_Estatus"));
          pol=pol*validacion(document.getElementById("cantidad"));  
          pol=pol*validacion(document.getElementById("precio")); 
          pol=1; 

          var numer="&numer="+$('#numer').val();
          var name="&name="+$('#name').val();
          var curp="&curp="+$('#curp').val();
          var telefono="&telefono="+$('#telefono').val();
          var tipo_Estatus="&tipo_Estatus="+$('#tipo_Estatus').val();
          var tipo="&tipo="+$('#tipo').val();
          var cantidad="&cantidad="+$('#cantidad').val();
          var precio="&precio="+$('#precio').val();

          if(pol==0)
          {
                alert('Por favor, Verificar los datos');
          }      
          else
          {

                if($('#name').val()==""||$('#curp').val()==""||$('#telefono').val()==""||$('#tipo_Estatus').val()=='0'||$('#tipo').val()=='0'|| $('#cantidad').val()=="" || $('#precio').val()=="" )
                {
                  alert("Por favor, Verificar los datos");
                }
                else
                {      
                datos=numer+name+curp+telefono+tipo_Estatus+tipo+cantidad+precio;
                $.ajax(
                       {
                          url: "modificar_alumno.php",
                          data: datos,
                          type: 'POST',
                          beforeSend: function() 
                          {     
                              //$("#Loading").css("display","");
                          },
                          success: function(Resultado)
                          {

                           var val = Resultado.split('');
                           
                            if(val==1)
 				                   {
 				                      alert("Error en Servidor....");
				                   }
				                   else
				                   {
				                      
                              alert("Actualizado con éxito....");
                              window.location.reload(); 
                              
                           }

                        }
                  });
            
            }  
        

        }  





    });
     

}); 
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

  
}
     
     



</script>