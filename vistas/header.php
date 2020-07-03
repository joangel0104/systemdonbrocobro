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
				<?php require 'menu.php'; ?>
			</li>
		</ul>
	</nav>
</header>