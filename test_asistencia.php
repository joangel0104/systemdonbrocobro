<!DOCTYPE html>
<html>
<head>
	<?php require 'vistas/headportlet.php';?>
	<?php require 'vistas/head.php';?>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	<div id="page-wrapper">
		<?php require 'vistas/header.php';?>
		<article id="main">
			<section class="wrapper style5">
            	<div class="inner">
					<section>
						<br>
						 <div id="fondo_1">
						 	<br>
						<h4 style="text-align: left;"><img height="20" src="images/control.png"> Alumnos listados por grupos</h4>  
						</div>
					</section>
				</div>

				<?php require "./vistas/container.php" ?>
			</section>
		</article>

	</div>
	<?php require 'vistas/scripts.php';?>
	<?php require 'vistas/scripts_portlet.php';?>

	<script src="./assets/js/vue.js"type="text/javascript"></script>
	<script type="text/javascript">
	new Vue({
		el: '#contenedor',
		created: async function (){
			await this.get_alumnos();	
			this.test();
		},
		data:{
			loading:true,
			datos:[],
			ids:[],
			texto:"hola"
		},
		methods:{
			//llamado de configuraciones;
			test: function() {
				console.log("datos", this.datos);
				console.log("id", this.ids);
			},
			post_asistencias:async function() {
				let datos = {};
				datos.ids = this.ids;
				let response = await $.ajax({
								type:"POST",
								data:datos,
							    url:"post_asistencias.php",
							    success: function(repuesta) {
							    	console.log(repuesta);
							    }
							});
			    this.ids = [];
				this.get_alumnos();
			},
			get_alumnos: async function (){
				let resultado;
				let response = await $.ajax({
								type:"GET",
							    url:"get_list_alumnos.php",
							    success: function(repuesta) {}
							});
			    if(isJson(response)) {
					resultado = JSON.parse(response);
			    } else {
			       resultado = false;
	            }
				this.datos = resultado;
			}
		}
	});

	function isJson(argument) {
		try{
			let a = JSON.parse(argument);
			if (a == null) {
				return false;
			}
		} catch (e){
			return false;
		}
		return true;
	}
</script>
	

</body>
</html>
<style >
  #fondo_1
{
 width: 96%;
  font-size: 16px;
  
   background: #2e3842 ;
  padding-left: 20px ;
 margin-left: 2%;
 
 
  height: 80px;
  margin-top: -5%;
 border-radius: 4px;
}
</style>   