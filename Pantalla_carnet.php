<?php
  $conexion=mysqli_connect('localhost','root','','servidor.cobro');
  $sql="DELETE FROM temporal_codigos"; 
  $stmt1 = mysqli_query($conexion, $sql);
?>
<!DOCTYPE HTML>

<html>
  <head>
     <link  rel="icon"   href="images/logo.png" type="image/png" />
    <title>System Don BRO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
  
        <script src="jquery-3.2.1.min.js"></script>
  </head>


  

     <div id="page-wrapper">
       <header id="header">
        <body onload="(filtrar_carnet());">
        <img name="imagen" src="images/logo.png" >

            <h1><a href="">System Don BRO</a></h1>
            
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
                    
                                         <div id="menus"><img id="imagen" height="160" src="images/user01.png"> </div>

                    <br/>
                                        
                     <ul>
                      <li><a href="Pantalla_alumno.php"><img height="35" src="images/agregar-usuario.png">   Agregar Alumno  </a></li>
                    </ul>
                    <hr id="linea_menu_2"  size=3>

                    <ul>

                      <li><a href="Pantalla_carnet.php"><img height="30" src="images/carnet-de-identidad.png"> Generar Carnet</a></li>
                    </ul>
                                           <hr id="linea_menu_2"  size=3>
                                           <ul>
                      <li><a href="Pantalla_consulta_alumno.php"><img height="30" src="images/informacion.png">  Consultar Alumno</a></li>
                    </ul>
                     <hr id="linea_menu_2"  size=3>
                                          <ul>
                      <li><a href="Pantalla_cobro.php"><img height="30" src="images/banca-en-linea.png"> Control de Pago</a></li>
                    </ul>
                    <hr id="linea_menu_2"  size=3>
                      <ul>
                      <li><a href="test_asistencia.php"><img height="30" src="images/informacion-personal.png"> Control Asistencia  </a></li>
                    </ul>
                    <hr id="linea_menu_2"  size=3>
                     
                    
                     <ul>
                      <li><a href="pantalla_reportes.php"><img height="30" src="images/datos.png"> Reportes</a></li>
                    </ul>
                    <hr id="linea_menu_2"  size=3>
                     <ul>
                      <li><a href="sesion.php"><img height="30" src="images/apagar.png"> Cerrar sección </a></li>
                    </ul>
                    
                  </div>
                </li>
              </ul>
            </nav>
          </header>
        
          <article id="main">
            <section class="wrapper style5">
               <div class="inner">
               
                <section>
                  <div id="general_4"> 
                  <br/>
                  <h4 id="text_7"><img height="30" src="images/proteccion.png"> Generar Carnet</h4>
                  <div class="8u 12u$(xsmall)">
                        <input id="boton_8" 
                               name="boton_8" 
                               type="button" 
                               value="Generar Carnet " 
                               class="principal"
                               
                               >

                  </div>
                  <center>
                  <div class="derecha" id="buscars">
                         <input  maxlength="20" 
                                 type="search" 
                                 class="light-table-filter" 
                                 data-table="order-table" 
                                 placeholder=" Búsqueda ">
                  </div>
                  </center>
                 

                  <select name="tipo_grado" id="tipo_grado" onclick="filtrar_carnet()">
                          
                          <option value='1'>Primer grado</option>
                          <option value='2'>Segundo grado </option>
                          <option value='3'>Tercer grado </option>
                          <option value='4'>Cuarto grado </option>
                          <option value='5'>Quinto grado </option>
                          <option value='6'>Sexto grado </option>
                  </select>
                 
                  <select name="tipo_seccion" id="tipo_seccion" onclick="filtrar_carnet()" >
                         
                          <option value='a'>(a)</option>
                          <option value='b'>(b)</option>
                          <option value='c'>(c)</option>
                          <option value='d'>(d)</option>
                          <option value='e'>(e)</option>
                          <option value='f'>(f )</option>
                          </select>

                 

                  </div>
                  <div class="8u 12u$(xsmall)">              
                  
                        <input style="visibility:hidden;"type="text" name="num" id="num"/>
                  </div>                     
          
 <div id="fondo_tabla_general">
           <div class="table-wrapper" id="facturas"></div>  
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
    

var band=0;
var cont=0; 
function ver_id() 
{ 
    if (!document.getElementsByTagName || !document.createTextNode) return;
    var rows = document.getElementById('tabla_2').getElementsByTagName('tr');
     
    cont++;
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function() {
           
            var result = this.getElementsByTagName('td')[0].innerHTML;
            $('#num').val(result);
           
            
            if (cont%2==!0){
              var datos=$('#num').serialize();
                 $.ajax({
                   type:"POST",
                   url:"agregar_temporal.php",
                   data:datos,
                   success:function(r){
                   if(r==1){ }else{}}});
            }
            else{
            var datos=$('#num').serialize();
                 $.ajax({
                   type:"POST",
                   url:"eliminar_temporal.php",
                   data:datos,
                   success:function(r){
                   if(r==1){}else{}}});
            }  
        }
     }
 }

function cambio(x){    
    band++;
     if (band%2==0){   
         x.style.color="#4E4852";
         }
     else{
          x.style.color="Red";
         }
}
$(document).ready(function(){
    $('#boton_8').click(function(){
      if (cont==0){
             alert('Por favor, Seleccione un alumno ')
      } 
      else{
           window.open('../systemdonbrocobro/guardar_carnet.php');
      }    
    });
  }); 

async function filtrar_carnet() {
        var tipo_grado="&tipo_grado="+$('#tipo_grado').val();
        var tipo_seccion="&tipo_seccion="+$('#tipo_seccion').val();
   
        datos=tipo_grado+tipo_seccion;
        let response = await $.ajax({
            type:"GET",
            url:"filtrar_carnet.php",
            data: datos,
            success: await function(repuesta) 
            {
              $('#facturas').html(repuesta);
            }
        });
        return response;
  }
  


(function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);



</script>

<style >
     
     #text_7{
         font-weight: 900;
         color: #fff;
         font-size: 0.8em;
         margin-left: 3.5%;
     }
     #general_4{
        margin: auto;
    width: 100%;
    height: 150px;
    background-color: #1e6a78;
    border-radius: 4px;
    margin-top: -3%;
    position: relative;
   
    border: double;
     }
     table td{
         text-align: center;
         font-size: 0.7em;
         font-weight: 600;
         padding: 0 0.75em 0.75em 0.75em;
     }
     input[type="search"]{
            width: 35%;
    margin-left: -46%;
    font-size: 15px;
    background-color: #F3F5F9;
    border-radius: 3px;
    border: none;
    padding: 0.8em;
    height: 34px;
    color: black;
    position: absolute;
    margin-top: -36px;
      }
      #codig{
         width: 33%;
         font-size: 13px;
         position: relative;
         margin-left: 80%;
         background-color: #F3F5F9;
         margin-top: -4.7%;
      }
      #boton_8{
        margin-left: 15%;
        height: 36px;
        margin-top: 2px;
        background-color: #27c147;
        width: 30%;
        font-size: 11px;
        font-weight: 700;
        position: relative;
      }
      #tipo_grado{
        margin-left: 40%;
        width: 17%;
        margin-top: -36px;
        font-size: 12px;
        background-color: #F3F5F9;
        height: 35px;
        position: absolute;
      }
      #tipo_seccion{
        margin-top: -36px;
        margin-left: 58.1%;
        width: 17%;
        font-size: 12px;
        background-color: #F3F5F9;
        height: 35px;
        position: absolute;
      }
      #num
      {
        width: 20%;
      }
</style>   