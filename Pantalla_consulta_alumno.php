

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
<body onload="(filtrar_table());">
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

                  </div>
                </li>
              </ul>
            </nav>
          </header>



<article id="main">
			<section class="wrapper style5" >
        <div class="inner">
				  
							
		 <br>								
									
  <center>
         
  <div class="derecha" id="buscar">
    <br>
<h4 id="text_6"><img height="30" src="images/busqueda.png">  Consultar Alumno</h4>
     <input  maxlength="100" 
             type="search" 
             class="light-table-filter" 
             data-table="order-table" 
             placeholder="Búsqueda ">

     <select name="tipo_grado" id="tipo_grado" onclick="filtrar_table()">
         
          <option value='1'>Primer grado</option>
          <option value='2'>Segundo grado </option>
          <option value='3'>Tercer grado </option>
          <option value='4'>Cuarto grado </option>
          <option value='5'>Quinto grado </option>
          <option value='6'>Sexto grado </option>
    </select>
    <select name="tipo_seccion" id="tipo_seccion" onclick="filtrar_table()" >
           
           <option value='a'>(a)</option>
           <option value='b'>(b)</option>
           <option value='c'>(c)</option>
           <option value='d'>(d)</option>
           <option value='e'>(e)</option>
           <option value='f'>(f )</option>
    </select>



  </div>

  </center>
<div id="fondo_tabla_general">
      <div class="table-wrapper" id="facturas"></div>   
 </div>         



	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	



        <br/>

        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup">
                    <i class="fas fa-times">
                        <img height="20" src="images/cerrar.png">
                    </i>
                </a>
                <h3>
                    <img height="60" src="images/refrescar.png">
                Actualizar Alumno
                </h3>
                <form action="">
                    <div class="contenedor-inputs">
                        <div id="fondo_6">
                            <div class="8u 12u$(xsmall)">
                                <input  type="text" 
                                    name="name" 
                                    id="name" 
                                    value=""  
                                    placeholder="Nombre y Apellido" 
                                    maxlength="50"  
                                    pattern="([A -z]{3,50})" 
                                    required 
                                    onkeypress="return solo_letra(event)"
                                    oninput="mayus(this)"/>
                            </div>
                            <br/>  
                            <div class="4u$ 12u$(xsmall)">
                                <input  type="text" 
                                    name="telefono" 
                                    id="telefono" 
                                    value=""  
                                    placeholder="Teléfono Contacto " 
                                    pattern="([1-9][0-9]{9,9})" 
                                    required 
                                    onkeypress="return solo_numero(event)"
                                    maxlength="10" />
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
                                <option value='Activo'>Activo</option>
                                <option value='Inactivo'>Inactivo</option>
                            </select>
                            <br/>
                            <div class="2u 12u$(xsmall)">
                                <input  type="text" 
                                    name="cantidad" 
                                    id="cantidad" 
                                    value="" 
                                    placeholder="°Grado alumno "  
                                    pattern="([1-9])" 
                                    required 
                                    onkeypress="return solo_numero(event)"
                                    maxlength="1" />
                            </div>
                            <br/>
                            <div class="2u$ 12u$(xsmall)">
                                <input  type="text" 
                                    name="precio" 
                                    id="precio" 
                                    value="" 
                                    placeholder="Sección alumno "   
                                    pattern="([a-z])" 
                                    required 
                                    onkeypress="return solo_letra(event)" 
                                    maxlength="1" />
                            </div>
                            <br/>
                            <textarea   id="comentarios" 
                                    name="comentarios" 
                                    rows="3" 
                                    cols="35">
                                    Escriba aquí sus observaciones..
                            </textarea>
                           
                            <hr id="linea" >
                            <ul class="actions" style="text-align: center" >
                                <li>
                                    <input id="boton_4" 
                                    style="text-align: center"  
                                    name="boton_4" 
                                    type="button" 
                                    value="Actualizar  Alumno" 
                                    class="principal"/>
                                </li>
                            </ul>
                            <br/>
                            <br/>
                            <div style="visibility:hidden;" >
                                <input type="text" 

                                   name="numer" 
                                   id="numer"/>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>  
    </form>
	</body>
</html>

<script type="text/javascript">



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




async function filtrar_table() {
    var Parametros=$('#frmajax').serialize();
   
   
    
        let response = await $.ajax({
            type:"GET",
            url:"filtrar_alumno.php",
            data: Parametros,
            success: await function(repuesta) {
                $('#facturas').html(repuesta);
            }
        });
        return response;
    
}


function ver_id() {
  
    var rows = document.getElementById('tabla_2').getElementsByTagName('tr');
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function() {
            var result = this.getElementsByTagName('td')[0].innerHTML;
            $('#numer').val(result);
            ver_popup();      
        }
    }
    
 }


function ver_popup() {

    overlay.classList.add('active');
    popup.classList.add('active'); 
    
    var numer="&numer="+$('#numer').val();
    datos=numer;
    $.ajax({
        url: "consulta_alumno.php",
        data: datos,
        type: 'POST',
        success: function(Resultado){
            var valor = Resultado.split('&');
            if(valor[0]==1){
               $('#name').val(valor[1]);
               $('#comentarios').val(valor[2]);
               $('#telefono').val(valor[3]);
               $('#cantidad').val(valor[4]);
               $('#precio').val(valor[5]);
            }
            else{      
               $('#name').val(valor[1]);
               $('#comentarios').val(valor[2]);
               $('#telefono').val(valor[3]);
               $('#cantidad').val(valor[4]);
               $('#precio').val(valor[5]);
            }
        }
    });
}




$(document).ready(function(){
    $('#boton_4').click(function(){
        var numer="&numer="+$('#numer').val();
        var name="&name="+$('#name').val();
        var telefono="&telefono="+$('#telefono').val();
        var tipo_Estatus="&tipo_Estatus="+$('#tipo_Estatus').val();
        var tipo="&tipo="+$('#tipo').val();
        var cantidad="&cantidad="+$('#cantidad').val();
        var precio="&precio="+$('#precio').val();
        var comentarios="&comentarios="+$('#comentarios').val();
        if( $('#name').val()==""||
            $('#telefono').val()==""||
            $('#tipo_Estatus').val()=='0'||
            $('#tipo').val()=='0'||
            $('#cantidad').val()=="" ||
            $('#precio').val()=="")
            {
                alert("Por favor, Verificar los datos");
            } else {      
                datos=numer+name+comentarios+telefono+tipo_Estatus+tipo+cantidad+precio;
                $.ajax({
                    url: "actualizar_alumno.php",
                    data: datos,
                    type: 'POST',
                    success: function(Resultado){
                        var val = Resultado.split('');  
                        if(val==1){
                            alert("Error en Servidor....");
                        }else{            
                            alert("Actualizado con éxito....");
                            window.location.reload();   
                        }
                    }
                });
            }  
    });
}); 

function mayus(e) 
{
  var tecla=e.value;
  var tecla2=tecla.toUpperCase();
  $('#name').val(tecla2);   
} 
//validar solo letra
function solo_letra(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8){
        return true;
    }
    patron = /[ A-Za-z]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
//validar solo numero
function solo_numero(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8){
        return true;
    }
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
  overlay = document.getElementById('overlay'),
  popup = document.getElementById('popup'),
  btnCerrarPopup = document.getElementById('btn-cerrar-popup');
  btnCerrarPopup.addEventListener('click', function(e){
  e.preventDefault();
  overlay.classList.remove('active');
  popup.classList.remove('active');
});
</script>   

<style >
 
table td { 
    text-align: center;
    font-size: 0.7em;
    font-weight: 600;
    padding: 0 0.75em 0.75em 0.75em;
    white-space: nowrap;
}
    
#buscar{
   width: 100%;
    font-size: 20px;
    background: #1e6a78;
    
    margin-left: 0%;
    height: 140px;
    border-radius: 4px;
    margin-top: -2%;
    position: relative;
    border: double;
}

input[type="search"]{
    width: 40%;
    margin-left: -46%;
    font-size: 15px;
    background-color: #F3F5F9;
    border-radius: 3px;
    border: none;
    padding: 0.8em;
    height: 33px;
    color: black;
    position: absolute;
    margin-top: 48px;
   
}

#tipo_grado{
    margin-left: 45%;
    width: 25%;
    margin-top: 48px;
    font-size: 12px;
    background-color: #F3F5F9;
    position: absolute;
}

#tipo_seccion{
    margin-top: 48px;
    margin-left: 67.5%;
    width: 25%;
    font-size: 12px;
    background-color: #F3F5F9;
}

h4#text_6{
    font-weight: 900;
    margin-top: 1%;
    color: #F3F5F9;
    font-size: 0.7em;
    margin-left: 3.5%;
    position: absolute;
}
#name
{
    width: 99%;
    background-color: #e4e8ec;

}
#telefono
{
width: 143%;
    background-color: #e4e8ec;
}
#cantidad
{
width: 143%;
    background-color: #e4e8ec;
}
#precio
{
width: 143%;
    background-color: #e4e8ec;
}
#comentarios
{
    margin-left: 62%;
    width: 30%;
    margin-top: -421px;
    height: 390px;
    background-color: #e4e8ec;
    position: absolute;
}





</style>   