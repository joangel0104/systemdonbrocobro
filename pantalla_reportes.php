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
						
						<section class="wrapper style5" >
                         <div class="inner">

                         	
								<section>
									<h4 style="text-align: center;">Datos Iniciales</h4>
									<br/>
									<br/>
                                        <select  name="tipo_r" id="tipo_r">
                                             <option value='0'>Seleccione un Reporte..</option>
                                             <option value='1'>Cierre del día</option>
                                             <option value='2'>Cierre semanal</option>
                                             <option value='3'>Lista de Adeudos </option>
                                              
                                        </select>
						            <br/>
				                    <form action="" method="POST"> 
                                    Desde:
                                    <br>
                                    <input 
                                    type="date" 
                                    id="hasta" 
                                    name="hasta" 
                                    step="1"
                                    min="2019-01-01" >
                                    <br>
                                    Hasta:
                                    <br>
                                    <input
                                    type="date" 
                                    id="desde" 
                                    name="desde" 
                                    step="1" 
                                    min="2019-01-01" >
                                    <br/>
                                    <br/>
										
									    <ul class="actions" style="text-align: center" >
										<li><input id="boton_2" style="text-align: center"  name="guardar" type="button" value="Buscar Reporte  " class="principal"/></li>
									    </ul>
								</section>
								
								
							</div>
						
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
 
 



 $(document).ready(function(){
   $('#boton_2').click(function(){
       

       if($('#tipo_r').val()=='0'||$('#hasta').val()=='')
       {
           alert("Por favor, Verificar los datos");
       }
       else
       {  
         if($('#tipo_r').val()=='1')
         {
         	
                 var datos=$('#hasta').serialize();
                 $.ajax({
                       url: "ticket_venta_dia.php",
                       type: "POST",
                       data:datos,
                       success: function(response)
                       {
                          
                        if(response==2)
                        {
                          alert("Por favor, Verificar los datos fecha no existe");
 
                        }
                        else
                        {	
                          if(response==1)
                          {
                             window.location.reload();  
                          }else
                          {
                             alert('Error');
                          }
                        }




                      }
                 }); 
        
           }
         if($('#tipo_r').val()=='2')
         {
         	       var hasta="&hasta="+$('#hasta').val();
         	        var desde="&desde="+$('#desde').val();

         	      
                  
                 var Parametros=desde+hasta;
                 $.ajax({
                       url: "ticket_venta_semanal.php",
                       type: "POST",
                       data:Parametros,
                       success: function(response)
                       {
                          
                        if(response==2)
                        {
                          alert("Por favor, Verificar los datos fecha no existe");
                        }
                        else
                        {	
                          if(response==1)
                          {
                             window.location.reload();  
                          }else
                          {
                             alert('Error'+Parametros);
                          }
                        }




                      }
                 }); 
        
         }




      }






        });
      });













 </script>