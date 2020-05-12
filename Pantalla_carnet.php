<?php

  $conexion=mysqli_connect('localhost','root','','servidor.cobro');
  $sql="SELECT a.codigo,a.nombre,b.nombre,a.grado,a.seccion,a.estatus
FROM alumnos a
INNER JOIN becas b ON a.beca_id=b.id
 ORDER BY grado ASC ,seccion ASC 
 "; 
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


  <body>
    

     <div id="page-wrapper">
     
            <header id="header">
        <img name="imagen" src="images/logo.png" >

            <h1><a href="">System Don BRO</a></h1>
            
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
            
            <section class="wrapper style5">
                         <div class="inner">
                <section>
                  <div id="general_4"> 
                  <h4 style="text-align: center;">Datos Iniciales</h4>
                
                <center>
                                     <div  onkeyup="saltar(event,'codig')" class="derecha" id="buscar"><input  maxlength="20" type="search" class="light-table-filter" data-table="order-table" placeholder="Búsqueda "></div>
                                </center>
                                      <form method="post" action="Imprimir_Carnet.php">
                    <div class="row uniform">

                      <div class="8u 12u$(xsmall)">
                        <input type="text" 
                               name="codig" 
                               id="codig" 
                               value="" 
                               placeholder="Introduzca Código alumno"  
                               maxlength="3" pattern="([0-9]{3,3})" 
                               required oninput="validacion(this)"
                               onkeyup="saltar(event,'boton_8')"/>
                      </div>
                       </div>
                       <br/>
                     <div class="12u$">
                              
                        <ul class="actions" style="text-align: left" >
                        <li><input id="boton_8" 
                                 style="text-align:center" 
                                 name="boton_8" 
                                 type="button" 
                                 value="Generar Carnet " 
                                 class="principal" 
                                ></li>
                                                </ul>
                    </div>
                     </div>
                    <br/>

                    
          <center>
                        <div class="datagrid">
                           <table class="order-table table">
                               <thead>
                                  <tr class="titulo"> 
                                 
                                  <td>
                                      Código
                                  </td>
           
                                  <td>
                                      Nombres y Apellidos
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
                                
                                   </tr>
                               <?PHP }?> 
                          </table>      
              </article>
                     </div>

    
      

      </thead>  
      
            
    
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




 var band=0;

   

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
         
       function saltar(e,id)
         {
         (e.keyCode)?k=e.keyCode:k=e.which;
           if(k==13)
         {
         if(id=="submit")
         {
          document.forms[0].submit();
         }
         else
         {
          document.getElementById(id).focus();
         }
        }

  
}


    

     function saltar(e,id)
         {
         (e.keyCode)?k=e.keyCode:k=e.which;
           if(k==13)
         {
         if(id=="submit")
         {
          document.forms[0].submit();
         }
         else
         {
          document.getElementById(id).focus();
         }
        }

  
}

 </script>

</script>

<style >
#text_3
{

  font-weight: 900;
 
  margin-left: -80%;
  color: white;
  font-size: 0.8em;
}

#general_4
{
margin: auto;
  width: 1140px;
  height: 220px;
  background-color: #2e3842;

}
 
table td 
{
    padding: 0.4em 0.5em;
    font-size: 12px;
    text-align: center;
    
}



input[type="search"]
{
 margin-top: 55px; 
  margin-left: 73.5%;
-webkit-appearance: none;
-ms-appearance: none;
appearance: none;
 background-color: #F3F5F9;
border-radius: 3px;
border: none;
color: inherit;
display: block;
outline: 0;
padding: 0.3em;
text-decoration: none;
width: 50%;
border-top: 100%;
}

#codig
{
  width: 60%;
  
  font-size: 13px;
  
  position: relative;
  margin-left: 3.2%;
  background-color: #F3F5F9;
  margin-top: -12px;
}

</style>   