
<?php
   
   $conexion=mysqli_connect('localhost','root','','servidor.cobro');


   $sql="SELECT precio_actual FROM tabla_r_precio";
   $stmt1 = mysqli_query($conexion, $sql);
   $row=mysqli_fetch_array($stmt1, MYSQLI_NUM);
   echo $row[0];

?>

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
											<li><a href="Pantalla_alunno.php">Agregar Alumno</a></li>
										</ul>
										 <ul>
											<li><a href="Pantalla_m_alumno.php">Modificar Alumno</a></li>
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
						
						<section class="wrapper style5" >
                         <div class="inner">
								<section>
									<h4 style="text-align: center;">Datos Iniciales</h4>
									
									
                                    <br/>
									<form method="post" id="frmajax">
										<div class="row uniform">

											<div class="8u 12u$(xsmall)">
												<input type="text" name="precio" id="precio" value=""  pattern="([1-9][0-9]{1,1})" required oninput="validacion(this)" placeholder="Introduzca Precio Actual Comida  " maxlength="2"/>
											</div>

											<div class="4u$ 12u$(xsmall)">
												<input type="text" name="credito" id="credito" value=""  pattern="([1-9])" required oninput="validacion(this)" placeholder="N° Dias de Credito" maxlength="1"/>
											</div>

														
										</div>
										<br/>
										<div class="12u$">

											     				
												<ul class="actions" style="text-align: center" >
												<li><input id="boton_3" style="text-align: center" name="boton_3" type="button" value="Agregar Cambio" class="principal" id="add_row"/></li>
                                                </ul>
										
										</div>
										<div>

												<h4  id="titulo" >Precio actual Comida</h4>

												<input  style="text-align:left;" type="text" name="precios" id="precios" value= "" placeholder="$" value="<?php echo $row ?>"/>
										
										</div>
										
									</form>
								</section>
								<br> 
								<br>
								<br>
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

	</body>
</html>
<script type="text/javascript">
 var band=0;

   document.getElementById("precios").disabled =true;

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
		$('#boton_3').click(function(){
            
      
      
      pol=1;  

      pol=pol*validacion(document.getElementById("precio"));
      pol=pol*validacion(document.getElementById("credito"));
      
      pol=1; 


      var precio="&precio="+$('#precio').val();
      var credito="&credito="+$('#credito').val();
     
   
     
       
       if(pol==0)
       {
                  
              
             alert('Por favor, Verificar los datos');

                  
       }      
       else
       {

           if($('#precio').val()==""||$('#credito').val()=="")
           {
               alert("Por favor, Verificar los datos");
           }
           else
           {     
                      
                    var datos=$('#frmajax').serialize();
			        $.ajax({
			        type:"POST",
				    url:"agregar_precio_actual.php",
				    data:datos,
				    success:function(r)
				    {
				   
				    if(r==1)
 				    {
 				        alert("Actualizado con Exito");
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
 

 
  

  

