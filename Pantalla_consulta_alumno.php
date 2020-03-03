<?php

  $conexion=mysqli_connect('localhost','root','','servidor.cobro');
  $sql="SELECT a.codigo,a.nombre_alumno,a.curp_alumno,a.celular_alumno,b.tipo,a.grado_alumno,a.seccion_alumno,c.estatus
FROM tabla_alumno AS a, tipo_alumno AS b ,estatus_alumno AS c
WHERE a.id_tipo=b.id_tipo AND a.id_estatus=c.id_estatus ORDER BY a.grado_alumno ASC ,a.seccion_alumno ASC  "; 
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
							
							
										
									
  <center>
         
  <div class="derecha" id="buscar"><input  maxlength="20" type="search" class="light-table-filter" data-table="order-table" placeholder="Búsqueda "></div>
  </center>
  
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
              CURP
           </td>
           <td >
              Teléfono Representante  
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
    <td><?php echo $row['6']; ?></td>
     <td><?php echo $row['7']; ?></td>
 
 




  </tr>
  <?PHP }?> 
 </table>			
						
					    
					</article>

				
			</div>

		
			

      </thead>  
      
    </table>			  
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


</script>   
<style >
 
table td {
      padding: 0.2em 0.2em;
      font-size: 12px;
   text-align: center;
    }


 #buscar
{
 width: 100%;
  font-size: 20px;
  color: #2e3842;
   background: #2e3842 ;
  padding-left: 20px ;
 
  border-radius: 0px;
  padding: 10px;
  margin:10px; 
}
input[type="search"]{
   
  width: 450px;
  height: 30px;
  margin-left: 0px;
  margin-top: 10px;
  padding-left: 10px;
  outline: none;
  font-size: 0.8em;
  color: #2e3842;
}


</style>   