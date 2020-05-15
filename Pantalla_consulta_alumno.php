<?php

  $conexion=mysqli_connect('localhost','root','','servidor.cobro');
  $sql="SELECT a.codigo,a.nombre,a.observacion,a.celular,b.nombre,a.grado,a.seccion,a.estatus
        FROM alumnos a
        INNER JOIN becas b ON a.beca_id=b.id
        ORDER BY grado ASC ,seccion ASC"; 
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
				  
							
		 <br>								
									
  <center>
         
  <div class="derecha" id="buscar">
    <br>
<h4 id="text_6"><img height="20" src="images/busqueda.png">  Consultar Alumno</h4>
     <input  maxlength="100" 
             type="search" 
             class="light-table-filter" 
             data-table="order-table" 
             placeholder="Búsqueda ">

     <select name="tipo_grado" id="tipo_grado" onclick="filtrar_table()">
          <option value='0'>Seleccione el grado..</option>
          <option value='1'>Primer grado</option>
          <option value='2'>Segundo grado </option>
          <option value='3'>Tercer grado </option>
          <option value='4'>Cuarto grado </option>
          <option value='5'>Quinto grado </option>
          <option value='6'>Sexto grado </option>
    </select>
    <select name="tipo_seccion" id="tipo_seccion" onclick="filtrar_table()" >
           <option value='0'>Seleccione la sección..</option>
           <option value='a'>(a)</option>
           <option value='b'>(b)</option>
           <option value='c'>(c)</option>
           <option value='d'>(d)</option>
           <option value='e'>(e)</option>
           <option value='f'>(f )</option>
    </select>



  </div>

  </center>

      <div class="table-wrapper" id="facturas"></div>   
         <div class="datagrid">
              <table class="order-table table" id="tabla_1" >
              <thead>
               <tr class="titulo"> 
                   
                       <td>
                           Código
                       </td>
                       <td>
                           Nombres y Apellidos
                      </td>
                       <td>
                           Observaciones 
                       </td>
                        <td >
                            Teléfono Contacto  
                        </td>
                        <td>
                            Tipo Alumno
                        </td>
                        <td>
                            Grado 
                        </td>
                        <td>
                            Sección 
                        </td>
                        <td>
                            Estatus  
                        </td>
                        <td>
                            Actualizar 
                        </td>
                </tr>
               </thead>
      
                        <?PHP while( $row=mysqli_fetch_array($stmt1, MYSQLI_NUM)) {?>
                        <tr>
  
    
                               <td><?php echo $row['0']; ?></td>
                               <td><?php echo $row['1']; ?></td>
                               <td><?php echo $row['2']; ?></td>
                               <td><?php echo $row['3']; ?></td>
                               <td><?php echo $row['4']; ?></td>
                               <td><?php echo $row['5']; ?></td>
                               <td><?php echo $row['6']; ?></td>
                               <td><?php echo $row['7']; ?></td>
                               <td>
                                       <a 
                                          href="#" 
                                          id="abrir_popup"
                                         
                                          onclick="ver_id()" 
                                           >  
                                         


                                       <img height="20" src="images/actualizado.png"> 
                                       Actualizar 
                                     </a>
                               </td>
                           </tr>
                        <?PHP }?> 
              </table>			
					</article>
       </div>

		
			

      </thead>  
      
   		  
    </article>
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
          <i class="fas fa-times"> <img height="20" src="images/cerrar.png">
          </i>
        </a>
        <h3><img height="40" src="images/refrescar.png"> Actualizar Alumno</h3>
      
        <form action="">
          <div class="contenedor-inputs">
           
                      


            <div id="fondo_6">
                      <div class="8u 12u$(xsmall)">
                        <input type="text" name="name" id="name" value=""  placeholder="Nombre y Apellido" maxlength="50"  pattern="([A -z]{3,50})" required oninput="validacion(this)" onkeypress="mayus1(this)"/>
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
                                                 <option value='Activo'>Activo</option>
                                                 <option value='Inactivo'>Inactivo</option>
                                                 
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
                      
                       <textarea  id="comentarios" name="comentarios" rows="3" cols="35">Escriba aquí sus observaciones..</textarea>
                       <br/>
                       <br/>
                       <br/>
                       <br/>
                       <br/>
                       <br/>
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
                    
                      <div style="visibility:hidden;" >
                            <input type="text" 
                                   name="numer" 
                                   id="numer"/>
                      </div>
                         
                    
                     
                  </form>
                </section>
                
              </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>

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
   if($('#tipo_grado').val()=='0'|| $('#tipo_seccion').val()=='0')
   {
     $("#tabla_1").show();
     $("#tabla_2").hide();
   }
   else
   {
   ocultar_table() ;
 

    let response = await $.ajax({
            type:"GET",
              url:"filtrar_alumno.php",
              data: Parametros ,
              success: await function(repuesta) 
              {
                //console.log(repuesta);
                $('#facturas').html(repuesta);
              }
          });
    return response;
     }
    }


function ver_id() 
{
    if (!document.getElementsByTagName || !document.createTextNode) return;
    var rows = document.getElementById('tabla_1').getElementsByTagName('tr');
    for (i = 0; i < rows.length; i++) {

        rows[i].onclick = function() {

        var result = this.getElementsByTagName('td')[0].innerHTML;
            //alert(result);
             $('#numer').val(result);
              ver_popup();


             
             
        }

    }
    overlay.classList.add('active');
    popup.classList.add('active');  
 }


function ver_popup()
{


    var numer="&numer="+$('#numer').val();
        datos=numer;
                $.ajax(
                       {
                          url: "consulta_alumno.php",
                          data: datos,
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
                               $('#comentarios').val(valor[2]);
                               $('#telefono').val(valor[3]);
                               $('#cantidad').val(valor[4]);
                               $('#precio').val(valor[5]);
                            }
                            else
                            {
                              
                               $('#name').val(valor[1]);
                               $('#comentarios').val(valor[2]);
                               $('#telefono').val(valor[3]);
                               $('#cantidad').val(valor[4]);
                               $('#precio').val(valor[5]);
                            }

                          }
                        });



}


async function ocultar_table() 
{
    $("#tabla_1").hide();
    
    
}



$(document).ready(function()
    {
    $('#boton_4').click(function()
    {
        

          var numer="&numer="+$('#numer').val();

          var name="&name="+$('#name').val();
          var telefono="&telefono="+$('#telefono').val();
          var tipo_Estatus="&tipo_Estatus="+$('#tipo_Estatus').val();
          var tipo="&tipo="+$('#tipo').val();
          var cantidad="&cantidad="+$('#cantidad').val();
          var precio="&precio="+$('#precio').val();
          var comentarios="&comentarios="+$('#comentarios').val();

                if($('#name').val()==""||$('#telefono').val()==""||$('#tipo_Estatus').val()=='0'||$('#tipo').val()=='0'|| $('#cantidad').val()=="" || $('#precio').val()=="" )
                {
                  alert("Por favor, Verificar los datos");
                }
                else
                {      
                datos=numer+name+comentarios+telefono+tipo_Estatus+tipo+cantidad+precio;
                $.ajax(
                       {
                          url: "actualizar_alumno.php",
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
        

        





    });
     

}); 












  var btnAbrirPopup = document.getElementById('abrir_popup'),
  overlay = document.getElementById('overlay'),
  popup = document.getElementById('popup'),
  btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function()
{
  
});

btnCerrarPopup.addEventListener('click', function(e){
  e.preventDefault();
  overlay.classList.remove('active');
  popup.classList.remove('active');
});



     








</script>  


</script>   
<style >
 
table td {
      
     
   text-align: center;



    font-size: 0.7em;
    font-weight: 600;
    padding: 0 0.75em 0.75em 0.75em;
   
}
    


 #buscar
{
 width: 100%;
  font-size: 20px;
 
   background: #2e3842 ;
  padding-left: 20px ;
 margin-left: -1%;
  
 
  height: 140px;
   border-radius: 4px;
}
input[type="search"]{
   
  width: 490px;
  height: 30px;
 margin-left: -50%;
  
  padding-left: 10px;
  
  font-size: 15px;
  color: #2e3842;
  background-color: #F3F5F9;








    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
   
    border-radius: 3px;
    border: none;
    color: inherit;
    display: block;
    outline: 0;
    padding: 0.8em;
    text-decoration: none;
   height: 33px;
    border-top: 100%;
}
#tipo_grado
{
margin-left: 20%;
  width: 260px;
  margin-top: -3%;

 font-size: 12px;
 background-color: #F3F5F9;
}
#tipo_seccion
{
margin-top: -2.9%;
margin-left: 69.5%;
  width: 260px;
  font-size: 12px;
 background-color: #F3F5F9;
}

h4#text_6
{
  font-weight: 900;
  margin-top: 1%;
  color: #F3F5F9 ;
  font-size: 0.7em;
  margin-left: -71.5%;
}
</style>   