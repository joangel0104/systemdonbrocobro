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
<article id="main">
            
    <section class="wrapper style5" >
          <div class="inner">

                          
                <section>

      <div id="general_reporte">  

                <br/>          
                  <h4 id="text_6"><img height="30" src="images/reportar.png"> Reportes</h4>
                  
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
                                   
                                    <br>
                                    <input 
                                    type="date" 
                                    id="hasta" 
                                    name="hasta" 
                                   
                                    min="2019-01-01" >
                                    <br>
                                  
                                    <br>
                                    <input
                                    type="date" 
                                    id="desde" 
                                    name="desde" 
                                   
                                    min="2019-01-01" >
                                    <br/>
                                    <br/>
                    
                     




                </section>
                <div class="datagrid">

  </div>
 <br/>
    <table id="tabla_reporte" >
      <thead>
        <tr class="titulo"> 
          <thead>
           
        </thead>
        <tbody>
            <tr>
                <td><img height="20" src="images/uno.png"> </td>
                <td>NUMERO DE COMIDAS POR GRUPOS</td>
                <td> <a href="" ><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href=""><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
               
                
            </tr>
            <tr>
                <td><img height="20" src="images/dos.png"></td>
                <td>CIERRE DE COBRO DIARIO </td>
                <td><a href=""><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href=""><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
                
               
            </tr>
            <tr>
                <td><img height="20" src="images/tres.png"></td>
                <td>CIERRE DE COBRO SEMANAL</td>
                <td><a  href=""><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href=""><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
                
               
            </tr>
            <tr>
                <td><img height="20" src="images/cuatro.png"></td>
                <td>ESTADO DE CUENTA ALUMNO </td>
                <td><a href=""><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href=""><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
               
                
            </tr>
             <tr>
                <td><img height="20" src="images/cinco.png"></td>
                <td>COPIA DE TICKET</td>
                <td><a href=""><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href=""><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
               
               
            </tr>
             <tr>
                <td><img height="20" src="images/seis.png"></td>
                <td>LISTADO DE ALUMNOS CON ADEUDO</td>
                <td><a href=""><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href=""><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
               
               
            </tr>
            <tr>
        </tr>
 
      </thead>
      

 </table>     
 </div>

                
              </div>
            
              <div id="respuesta"></div>



          </article>

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

<style >

 div#general_reporte
 {
    margin: auto;
    width: 1150px;
    height: 140px;
    background-color: #2e3842;
     border-radius: 4px;
}


#hasta 
{
  -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    
    border-radius: 3px;
    border: none;
    color: inherit;
    display: block;
    outline: 3;
    height: 30px;
    margin-left: 53%;
    text-decoration: none;
    text-align: center;
    width:20%;
   font-size: 16px;
   background-color: #F3F5F9;
   margin-top: -7.1%;

   
}
#desde
{
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    
    border-radius: 3px;
    border: none;
    color: inherit;
    display: block;
    outline: 3;
    height: 30px;
    margin-left: 75%;
    text-decoration: none;
    text-align: center;
     width:20%;
    font-size: 16px;
    background-color: #F3F5F9;
    margin-top: -7.1%;

   
}
#carnet
{
  margin-top: 2%;
   width:70%;
   margin-left:5%;
   font-size: 12px;
    background-color: #F3F5F9;
     height: 30px;
   
}
h4#text_6
{
  font-weight: 900;
  margin-top: -0.5%;
  color: #F3F5F9 ;
  font-size: 0.8em;
  margin-left: 3.3%;
}
#tabla_reporte
{
      
    text-align: center;
    font-size: 23px;
    font-weight: 600;
        padding: 0.8em 0.2em;
   

}

</style>