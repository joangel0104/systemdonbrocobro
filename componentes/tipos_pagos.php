<?php 
	require './conexion.php';
	$sql="SELECT * FROM tipo_pago";
	$resultado = mysqli_query($conexion, $sql);
    
    $i=1;
    while ($row=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
		$resultados[] = $row;
		$resultados[$i-1]['numero'] = $i;
		$identificador = str_replace(" ","_",strtolower(trim($resultados[$i-1]['nombre'])));
		echo '<div class="8u$ 12u$(xsmall)" style =>
				<input 	type="text" 
						class="tipo_pago"
						name="'.$identificador.'" 
						id="'.$identificador.'" 
						value="" 
						maxlength="3" 
						placeholder="$ Pago '.$resultados[$i-1]['nombre'].'" 
						required 
						
						onkeyup="saltar(event,\'btn-abrir-popup\')" 
					    onkeypress="return validar_numero(event)"

				/>
			</div>
			<br>';
		$i++;
	}
?>
