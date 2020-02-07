
<?php
  
    $conexion=mysqli_connect('localhost','root','','servidor.cobro');
 
    $codigo=$_POST['codigo'];
    $numero=$_POST['numero'];
    $tipo_pago=$_POST['tipo_pago'];
    $monto=$_POST['monto'];
    $fecha=date("Y-m-d");     
   
    $sql="SELECT id_alumno FROM tabla_alumno WHERE codigo='$codigo'";

    $stmt1 = mysqli_query($conexion, $sql);
    $datos=mysqli_fetch_array($stmt1, MYSQLI_ASSOC);
    $cantidad_resultados = mysqli_num_rows($stmt1);
    $id_alumno= $datos['id_alumno']; 

    //verificando monto enviado con el monto a pagar
    $sql="SELECT * FROM tabla_r_precio ORDER BY id_precio_actual DESC LIMIT 1";
    $result=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $precio= (float)$datos['precio_actual']; 
    $credito= (int)$datos['credito_actual']; 

    $monto_pagar = (float)((((int)$numero/(int)$credito))*(float)$precio);
    $monto_pagar = round($monto_pagar,2,PHP_ROUND_HALF_UP);
    $monto = round($monto,2,PHP_ROUND_HALF_UP);

    //consultando en billetera para saber el credito del alumna 
    $sql="SELECT * FROM billetera where alumno_id = $id_alumno LIMIT 1";
    
    try {
        $result=mysqli_query($conexion,$sql);
        $cantidad_resultados = mysqli_num_rows($result);
        $datos=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if((int)$cantidad_resultados  === 0){
            $sql ="INSERT INTO 
                    billetera(alumno_id,numero_comida,credito_comida,fecha) 
            VALUES ('$id_alumno',0,5,'$fecha')";  
            $result=mysqli_query($conexion,$sql);
            $credito_comida = 5;
        } else {
            $credito_comida = (int)$datos['numero_comida']+(int)$datos['credito_comida'];
        }
    } catch (Exception $e) {
        var_dump("error");
    }
    
    $credito_comida = (int)$numero+$credito_comida;
    $monto_credito = $credito_comida * $precio;


    $sql3 ="INSERT INTO 
                    tabla_control_pago(id_alumno,id_tipo_pago,monto_pago,credito_pago,cantidad_comida_dia,fecha_pago) 
            VALUES ('$id_alumno','$tipo_pago','$monto','$monto_credito','$credito_comida','$fecha')";
    $result = mysqli_query($conexion, $sql3); 

    $control_pago_id = mysqli_insert_id($conexion);

    if((int)$credito_comida > 5){
        $numero_comida = $credito_comida-5;
        $credito_comida = 5;
    } else {
        $numero_comida = 0;
        $credito_comida = $credito_comida;
    }

    $sql3 ="UPDATE billetera 
            SET numero_comida = $numero_comida, credito_comida=$credito_comida
            where alumno_id = $id_alumno";
    $result = mysqli_query($conexion, $sql3); 
    echo 1;
?>