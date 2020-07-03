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
                         <div id="menus"><img id="imagen" height="160" src="images/user01.png"> </div><br/>
                                        
                         <ul>
                            <li>
                                 <a href="Pantalla_alumno.php">
                                    <img height="35" src="images/agregar-usuario.png">   Agregar Alumno
                                 </a>
                            </li>
                         </ul>
                         <hr id="linea_menu_2"  size=3>
                         <ul>
                            <li>
                                 <a href="Pantalla_carnet.php">
                                    <img height="30" src="images/carnet-de-identidad.png"> Generar Carnet
                                 </a>
                            </li>
                         </ul>
                         <hr id="linea_menu_2"  size=3>
                         <ul>
                            <li>
                                <a href="Pantalla_consulta_alumno.php">
                                    <img height="30" src="images/informacion.png">  Consultar Alumno
                                </a>
                            </li>
                         </ul>
                         <hr id="linea_menu_2"  size=3>
                         <ul>
                             <li>
                                <a href="Pantalla_cobro.php">
                                      <img height="30" src="images/banca-en-linea.png"> Control de Pago
                                </a>
                             </li>
                         </ul>
                         <hr id="linea_menu_2"  size=3>
                         <ul>
                             <li>
                                <a href="test_asistencia.php">
                                      <img height="30" src="images/informacion-personal.png"> Control Asistencia  
                                </a>
                             </li>
                         </ul>
                         <hr id="linea_menu_2"  size=3>
                         <ul>
                              <li>
                                 <a href="pantalla_reportes.php">
                                      <img height="30" src="images/datos.png"> Reportes
                                 </a>
                              </li>
                         </ul>
                         <hr id="linea_menu_2"  size=3>
                         <ul>
                              <li>
                                 <a href="sesion.php">
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
                                placeholder="Introduzca código alumno " 
                                maxlength="3" pattern="([0-9]{3,3})" 
                                onkeypress="return solo_numero(event)"
                            />
                   </div>
                   <br/><br>
                        <input 
                                    type="date" 
                                    id="hasta" 
                                    name="hasta" 
                                    min="2019-01-01" 
                                    >
                        <br><br>
                        <input
                                    type="date" 
                                    id="desde" 
                                    name="desde" 
                                    min="2019-01-01" >
                        <br/><br/>
        </section>
         

 
 
    <div id="fondo_general">
       <div class="datagrid"></div>
          <table id="tabla_reporte" >
          <thead>
          <tr class="titulo"> 
          <thead>
          </thead>
           
          <tbody>
            <tr >  
                <td> <br/><img height="20" src="images/uno.png"> </td>
                <td> NUMERO DE COMIDAS POR GRUPOS </td>
                <td> <a href="#" onclick="mostrar()"  ><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href="#" onclick="imprimir_comida()"><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
            </tr>
            <tr>
                <td> <br/><img height="20" src="images/dos.png"></td>
                <td>CIERRE DE COBRO DIARIO </td>
                <td><a href="#" onclick="cierre_diario()"><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href="#" onclick="imprimir_venta_diaria()"><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
            </tr>
            <tr>
                <td> <br/><img height="20" src="images/tres.png"></td>
                <td>CIERRE DE COBRO SEMANAL</td>
                <td><a  href="#" onclick="cierre_semanal()"><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href="#"onclick="imprimir_venta_semanal()"><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
            </tr>
            <tr>
                <td> <br/><img height="20" src="images/cuatro.png"></td>
                <td>ESTADO DE CUENTA ALUMNO </td>
                <td><a href="#"><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href="#"><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
            </tr>
            <tr>
                <td> <br/><img height="20" src="images/cinco.png"></td>
                <td>LISTADO DE ALUMNOS CON ADEUDO</td>
                <td><a href="#"><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href="#"><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
            </tr>
            <tr>
                <td> <br/><img height="20" src="images/seis.png"></td>
                <td>COPIA DE TICKET ULTIMO PAGO</td>
                <td><a href="#"><img height="20" src="images/interfaz.png"> VER</a></td>
                <td><a href="#"><img height="20" src="images/imprimir.png"> IMPRIMIR </a></td>
            </tr>
           <tr>
        </tr>
     </thead>
    </table>     
 </div>

 <div class="overlay" id="overlay_1">
      <div class="popup" id="popup_1">
        <a href="#" 
           id="btn-cerrar-popup_1" 
           class="btn-cerrar-popup">
           <i class="fas fa-times">
             <img height="20" src="images/cerrar.png">
          </i>
        </a>
        <h3 style="font-weight: bold; font-size:30px;" > COMIDAS POR GRUPOS</h3>
        <br>
        <form action="">
        <div class="contenedor-inputs">
        <div class="table-wrapper" id="facturas"></div>   
        <h3 style="font-weight: bold; font-size:25px; text-transform: none;" >Total de Comidas:</h3>
           <div class="8u 12u$(xsmall)">
                       
                        <input  type="text" 
                                name="total_1" 
                                id="total_1" 
                                value=""/>
                     
           </div>
        </div>
      </form>
</div>


<div class="overlay" id="overlay_2">
      <div class="popup" id="popup_2">
        <a href="#" 
           id="btn-cerrar-popup_2" 
           class="btn-cerrar-popup">
           <i class="fas fa-times">
             <img height="20" src="images/cerrar.png">
          </i>
        </a>
        <h3 style="font-weight: bold; font-size:30px;" > CIERRE DEL DÍA </h3>
        <br>
      
        <div class="contenedor-inputs">
           <h3 class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;" >Fecha de cierre:</h3>
           <div class="cajas"><input  type="text" name="fecha" id="fecha" value=""/></div>
           
           <h3 class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;" >N° Comidas preparadas:</h3>
           <div class="cajas"><input  type="text" name="comidas" id="comidas" value=""/></div>
          
           <h3 class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;" >Total Efectivo $:"</h3>
           <div class="cajas"><input  type="text" name="efectivo" id="efectivo" value=""/></div>

           <h3 class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;"  >Total Deposito y tarjetas $:"</h3>
           <div class="cajas"><input  type="text" name="mixto" id="mixto" value=""/></div>

            <h3  class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;" >Total Vale $:"</h3>
            <div class="cajas"><input  type="text" name="vales" id="vales" value=""/></div>
          
           <h3 style="font-weight: bold; font-size:25px; text-transform: none;" >Total de pagos:</h3>
           <div class="8u 12u$(xsmall)">
            
              <input  type="text" name="total_2" id="total_2" value=""/></div>
             
      </div>
 </div>

<div class="overlay" id="overlay_3">
      <div class="popup" id="popup_3">
        <a href="#" 
           id="btn-cerrar-popup_3" 
           class="btn-cerrar-popup">
           <i class="fas fa-times">
             <img height="20" src="images/cerrar.png">
          </i>
        </a>
        <h3 style="font-weight: bold; font-size:30px;" > CIERRE DEL SEMANAL </h3>
       
      
        <div class="contenedor-inputs">
           <h3 class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;" >Fecha inicial:</h3>
           <div class="cajas"><input  type="text" name="fechai" id="fechai" value=""/></div>
           
           <h3 class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;" >Fecha final:</h3>
           <div class="cajas"><input  type="text" name="fechaf" id="fechaf" value=""/></div>
           
           <h3 class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;" >N° Comidas preparadas:</h3>
           <div class="cajas"><input  type="text" name="comida_1" id="comida_1" value=""/></div>
          
           <h3 class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;" >Total Efectivo $:"</h3>
           <div class="cajas"><input  type="text" name="efectivo_1" id="efectivo_1" value=""/></div>

           <h3 class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;"  >Total Deposito y tarjetas $:"</h3>
           <div class="cajas"><input  type="text" name="mixto_1" id="mixto_1" value=""/></div>

            <h3  class="letra" style="font-weight: bold; font-size:16px; text-align: left; text-transform: none;" >Total Vale $:"</h3>
            <div class="cajas"><input  type="text" name="vales_1" id="vales_1" value=""/></div>
          
           <h3 style="font-weight: bold; font-size:25px; text-transform: none;" >Total de pagos:</h3>
           <div class="8u 12u$(xsmall)">
           <input  type="text" name="total_3" id="total_3" value=""/></div>
                 
      </div>
 </div>
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






/////////////////////////inicio del javascrip de comida por grupo////////////////////////////////
async function mostrar()
{
 document.getElementById("total_1").disabled = true;
  
  if ($('#hasta').val()==0){
    alert('Por favor, Seleccione una fecha ');
  }
  else{ 
    
     var btnAbrirPopup = document.getElementById('abrir_1'),
        overlay = document.getElementById('overlay_1'),
        popup = document.getElementById('popup_1'),
        btnCerrarPopup = document.getElementById('btn-cerrar-popup_1');
        btnCerrarPopup.addEventListener('click', function(e){
        e.preventDefault();
        overlay.classList.remove('active');
        popup.classList.remove('active');});
     var Parametros=$('#frmajax').serialize();
   
       let response = await $.ajax({
            type:"GET",
            url:"ver_comidas_preparar.php",
            data: Parametros,
            success: await function(repuesta) {
               var valor =repuesta.split('&');
               if (repuesta==2) {
                 alert('Por favor, Verifique la fecha ');
               }
               else{
                  if(valor[0]==1){
                    overlay.classList.add('active');
                    popup.classList.add('active');
                    $('#facturas').html(valor[1]);
                    $('#total_1').val(valor[2]);
                    }
               }
            
            }
        });
      return response;
    } 
  }
 async function imprimir_comida()
 {
   var entrada="&hasta="+$('#hasta').val();
   if ($('#hasta').val()==0){
      alert('Por favor, Seleccione una fecha ');
   }
   else
   { 
       var Parametros=entrada;
        $.ajax({
          url: "ticket_comida_preparar.php",
          type: "POST",
          data:Parametros,
               success: function(response){
               if(response==2){
                   alert("Por favor, Verifique la fecha");
               }
               else{ 
                   if(response==1){
                     alert('Imprimiendo.......');
                    }else{
                        alert('Por favor, Verifique su impresora');
                        }
                    }
               }
         }); 
    } 
  }

/////////////////////////inicio javascrip de venta diarias//////////////////////////////// 

async function cierre_diario()
{
  document.getElementById("fecha").disabled = true;
  document.getElementById("comidas").disabled = true;
  document.getElementById("efectivo").disabled = true;
  document.getElementById("mixto").disabled = true;
  document.getElementById("vales").disabled = true;
  document.getElementById("total_2").disabled = true;

 var entrada="&hasta="+$('#hasta').val();
  
  if ($('#hasta').val()==0){
    alert('Por favor, Seleccione una fecha ');
  }
  else{ 
       
        var btnAbrirPopup = document.getElementById('abrir_2'),
        overlay = document.getElementById('overlay_2'),
        popup = document.getElementById('popup_2'),
        btnCerrarPopup = document.getElementById('btn-cerrar-popup_2');
        btnCerrarPopup.addEventListener('click', function(e){
        e.preventDefault();
        overlay.classList.remove('active');
        popup.classList.remove('active');});

        var Parametros=entrada;
        $.ajax({
          url: "ver_venta_dia.php",
          type: "POST",
          data:Parametros,
               success: function(response){
               var valor =response.split('&');

               if(response==2){
                   alert("Por favor, Verifique la fecha");
               }
               else{ 
                   if(valor[0]==1){
                    overlay.classList.add('active');
                    popup.classList.add('active');
                  
                    $('#efectivo').val(valor[1]);
                    $('#mixto').val(valor[2]);
                    $('#vales').val(valor[3]);
                    $('#comidas').val(valor[4]);
                    $('#fecha').val(valor[5]);
                    $('#total_2').val(valor[6]);
                    }
                }
              }
         }); 
       }
}
async function imprimir_venta_diaria()
 {
   var entrada="&hasta="+$('#hasta').val();
   if ($('#hasta').val()==0){
      alert('Por favor, Seleccione una fecha');
   }
   else
   { 
       var Parametros=entrada;
        $.ajax({
          url: "ticket_venta_dia.php",
          type: "POST",
          data:Parametros,
               success: function(response){
               if(response==2){
                   alert("Por favor, Verifique la fecha");
               }
               else{ 
                   if(response==1){
                     alert('Imprimiendo.......');
                    }else{
                        alert('Por favor, Verifique su impresora');
                        }
                    }
               }
         }); 
      } 
  }
/////////////////////////inicio javascrip de ventas semanal////////////////////////////////

async function cierre_semanal()
{
   document.getElementById("fechai").disabled = true;
   document.getElementById("fechaf").disabled = true;
   document.getElementById("comida_1").disabled = true;
   document.getElementById("efectivo_1").disabled = true;
   document.getElementById("mixto_1").disabled = true;
   document.getElementById("vales_1").disabled = true;
   document.getElementById("total_3").disabled = true;
 
  
  if ($('#hasta').val()==0 || $('#desde').val()==0){
    alert('Por favor, Seleccione rango de fecha ');
  }
  else{ 
       
        var btnAbrirPopup = document.getElementById('abrir_3'),
        overlay = document.getElementById('overlay_3'),
        popup = document.getElementById('popup_3'),
        btnCerrarPopup = document.getElementById('btn-cerrar-popup_3');
        btnCerrarPopup.addEventListener('click', function(e){
        e.preventDefault();
        overlay.classList.remove('active');
        popup.classList.remove('active');});
        
        var entrada="&hasta="+$('#hasta').val();
        var salida="&desde="+$('#desde').val();
        var Parametros=entrada+salida;
        $.ajax({
          url: "ver_venta_semanal.php",
          type: "POST",
          data:Parametros,
               success: function(response){
               var valor =response.split('&');

               if(response==2){
                   alert("Por favor, Verifique las fecha");
                  
               }
               else{ 
                   if(valor[0]==1){
                     overlay.classList.add('active');
                     popup.classList.add('active');
                     $('#efectivo_1').val(valor[1]);
                     $('#mixto_1').val(valor[2]);
                     $('#vales_1').val(valor[3]);
                     $('#comida_1').val(valor[4]);
                     $('#fechai').val(valor[5]);
                     $('#fechaf').val(valor[6]);
                     $('#total_3').val(valor[7]);
                  
                    }
                }
              }
         }); 
       }
}
async function imprimir_venta_semanal()
 {
   var entrada="&hasta="+$('#hasta').val();
   var salida="&desde="+$('#desde').val();
   if ($('#hasta').val()==0 || $('#desde').val()==0){
     alert('Por favor, Seleccione rango de fecha ');
   }
   else
   { 
       var Parametros=entrada+salida;
        $.ajax({
          url: "ticket_venta_semanal.php",
          type: "POST",
          data:Parametros,
               success: function(response){
               if(response==2){
                   alert("Por favor, Verifique la fecha");
               }
               else{ 
                   if(response==1){
                     alert('Imprimiendo.......');
                    }else{
                        alert('Por favor, Verifique su impresora');
                        }
                    }
               }
         }); 
      } 
  }
function solo_numero(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8){
        return true;
    }
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}



</script>



<style >

div#general_reporte{
    margin: auto;
    width: 100%;
    height: 140px;
    background-color: #1e6a78;
    border-radius: 4px;
    margin-top: -4%;
    position: relative;
    border: double;
     }
     #hasta{
     
  
    border-radius: 3px;
    border: none;
    color: inherit;
   
    outline: 3;
    height: 30px;
    margin-left: 52%;
    text-decoration: none;
    text-align: center;
    width: 22%;
    font-size: 16px;
    background-color: #F3F5F9;
    margin-top: -82px;
    position: absolute;
    }
    #desde{
   
    border-radius: 3px;
    border: none;
    color: inherit;
    
    outline: 3;
    height: 30px;
    margin-left: 75%;
    text-decoration: none;
    text-align: center;
    width: 22%;
    font-size: 16px;
    background-color: #F3F5F9;
    margin-top: -134px;
    position: absolute;
   }
   #carnet{
      margin-top: 2%;
      width:70%;
      margin-left:5%;
      font-size: 12px;
      background-color: #F3F5F9;
      height: 30px;
    }
   h4#text_6{
      font-weight: 900;
      margin-top: -0.5%;
      color: #F3F5F9 ;
      font-size: 0.8em;
      margin-left: 3.3%;
   }
   #tabla_reporte{
      text-align: center;
      font-size: 18px;
      font-weight: 600;
      padding: 0.8em 0.8em;
   }
   .popup.active {
      height: 93%;
      width: 50%;
      background-image: url("images/Presentación1.png");
    }
    #total_1{
      background-color: #ecf0f3;
      width: 80%;
      margin-left: 34%;
      font-size: 45px;
      color: #000000eb;
      text-align: center;
      height: 10%;
      opacity: 60%;

    }
    #total_2{
      background-color: #ecf0f3;
      width: 80%;
      margin-left: 34%;
      font-size: 45px;
      color: #000000eb;
      text-align: center;
      height: 10%;
      opacity: 60%;

    }
    #total_3{
      background-color: #ecf0f3;
      width: 80%;
      margin-left: 34%;
      font-size: 45px;
      color: #000000eb;
      text-align: center;
      height: 10%;
      opacity: 60%;

    }
    #tabla_9{
      font-size: 20px;
      padding: 0em 0em;
      white-space: nowrap;
    }  
    .letra
    {
      margin-left: 10%;
      margin-top: 3%;
    }
    .cajas
    {
      width: 17%;
      margin-left: 65%;
      background-color: #fff;
      margin-top: -7%;
      opacity: 60%;
      color: black ;
      
    }
#fondo_general{

  width: 100%;
    font-size: 14px;
    border: 1px solid #3a434c !important;
    padding: 21px;
    height: 364px;
    overflow-y: auto; 
    
    position: relative;
}

</style>