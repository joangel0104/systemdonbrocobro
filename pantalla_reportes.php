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
											<li><a href="Pantalla_carnet.php"><img height="20" src="images/carnet.png"> Generar Carnet</a></li>
										</ul>
                    <ul>
											<li><a href="Pantalla_cobro.php"><img height="20" src="images/pago.png"> Control de Pago</a></li>
										</ul>
										
										  <ul>
											<li><a href="test_asistencia.php"><img height="20" src="images/control.png"> Control Asistencia  </a></li>
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
                                        <select  name="tipo_r" id="tipo_r" oninput="activa()">
                                             <option value='0'>Seleccione un Reporte..</option>
                                             <option value='1'>Cierre del día</option>
                                             <option value='2'>Cierre semanal</option>
                                             <option value='3'>Estado de alumno</option>
                                             <option value='4'>Copia de ticket</option>
                                             <option value='6'>Comidas por grupos</option>
                                             <option value='5'>Lista de Adeudos </option>
                                             
                                               
                                        </select>
                                        <br/>
                                        <div class="8u 12u$(xsmall)">
                        <input  type="text" 
                            name="carnet" 
                            id="carnet" 
                            value="" 
                            
                            placeholder="Introduzca N° Carnet " 
                            maxlength="3" pattern="([0-9]{3,3})" 
                            required oninput="validacion(this)"
                            oninput="validacion(this)" 
                            />
                      </div>



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


 
 document.getElementById("carnet").disabled =true;

 
function activa()
{
 if ($('#tipo_r').val()=='3'||$('#tipo_r').val()=='4') 
 {
   document.getElementById("carnet").disabled =false;
   document.getElementById("desde").disabled =true;
   document.getElementById("hasta").disabled =true;


 }
else
{
  document.getElementById("carnet").disabled =true;
  document.getElementById("desde").disabled =false;
   document.getElementById("hasta").disabled =false;
}
}

 $(document).ready(function(){
   $('#boton_2').click(function(){
       
 if($('#tipo_r').val()=='5')
         {

             alert('No existe alumno con Adeudo');
         }
  else
  {


       if($('#tipo_r').val()=='0')
       {
           alert("Por favor, Verificar los datos");
       }
       else
       {  
          if ($('#hasta').val()=='0') 
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
                          alert("Por favor, Verificar los datos no existe pago en esta fecha");
 
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
                          alert("Por favor, Verificar los datos no existe pago en esta fecha");
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
         }


        if($('#tipo_r').val()=='3')
         {
                 var carnet="&carnet="+$('#carnet').val();
                 

                
                  
                 var Parametros=carnet;
                 $.ajax({
                       url: "ticket_estado.php",
                       type: "POST",
                       data:Parametros,
                       success: function(response)
                       {
                          
                        if(response==2)
                        {
                          alert("Por favor, Verificar los datos Codigo no tiene pago registrado");
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
         
        
         
          if($('#tipo_r').val()=='4')
         {
                 var carnet="&carnet="+$('#carnet').val();
                 

                
                  
                 var Parametros=carnet;
                 $.ajax({
                       url: "ticket_copia.php",
                       type: "POST",
                       data:Parametros,
                       success: function(response)
                       {
                          
                        if(response==2)
                        {
                          alert("Por favor,Por favor, Verificar los datos Codigo no tiene pago registrado");
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
          if($('#tipo_r').val()=='6')
          {
                 
                  var entrada="&hasta="+$('#hasta').val();
                 

                
                  
                 var Parametros=entrada;
                
                 $.ajax({
                       url: "ticket_comida_preparar.php",
                       type: "POST",
                       data:Parametros,
                       
                       success: function(response)
                       {
                          
                        if(response==2)
                        {
                          alert("Por favor,Verificar los datos no hay lista cargada");
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



      






      }


}



        });
      });













 </script>