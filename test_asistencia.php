<!DOCTYPE html>
<html>
<head>
	<?php require 'vistas/head.php';?>
	<?php require 'vistas/headportlet.php';?>
</head>
<body>
	<div id="page-wrapper">
		<?php require 'vistas/header.php';?>
		<article id="main">
			<section class="wrapper style5">
             <div class="inner">
					<section>
						<h4 style="text-align: center;">Alumnos listados por grupos</h4>
						<br/>  
						<?php require'vistas/portlet.php' ?>
					</section>
					<br> 
					<br>
					<br>
				</div>
			</section>
		</article>

	</div>
	<?php require 'vistas/scripts.php';?>
	<?php require 'vistas/scripts_portlet.php';?>
</body>
</html>