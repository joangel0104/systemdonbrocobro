
<?php
  
    $conexion=mysqli_connect('localhost','root','','servidor.cobro');
 
    $codigo=$_POST['codigo'];
    $numero=$_POST['numero'];
    $tipo_pago=$_POST['tipo_pago'];
    $monto=$_POST['monto'];
    $fecha=date("Y-m-d");     
   
    $sql="SELECT * FROM alumnos WHERE codigo='$codigo'";

    $resultado1 = mysqli_query($conexion, $sql);
    $alumno=mysqli_fetch_array($resultado1, MYSQLI_ASSOC);
    $cantidad_resultados = mysqli_num_rows($resultado1);
    $alumno_id= $alumno['id']; 

    //verificando monto enviado con el monto a pagar
    $sql="SELECT * FROM becas WHERE id =".$alumno['beca_id']." LIMIT 1" ;
    $result2=mysqli_query($conexion,$sql);
    $beca=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    $precio_beca= (float)$beca['precio_comida'];  
    $monto_pagar = (float)((int)$numero*(float)$precio_beca);
    $monto_pagar = round($monto_pagar,2,PHP_ROUND_HALF_UP);
    $monto = round($monto,2,PHP_ROUND_HALF_UP);

    //consultando en billetera para saber el credito del alumna 
    $sql="SELECT * FROM billetera where alumno_id =".$alumno['id']." LIMIT 1";
    
    try {
        $result3=mysqli_query($conexion,$sql);
        $cantidad_resultados = mysqli_num_rows($result3);
        $billetera=mysqli_fetch_array($result3,MYSQLI_ASSOC);
        if((int)$cantidad_resultados  === 0){
            $datos = [];
            $datos['alumno_id']=$alumno['id'];
            $datos['numero_comida']=0;
            $datos['credito_comida']=(int)$alumno['credito_comida'];
            $datos['fecha'] = $fecha;
            insertar_tabla($datos,'billetera',$conexion);
            $credito_comida = (int)$alumno['credito_comida'];
        } else {
            $credito_comida = (int)$billetera['numero_comida']+(int)$billetera['credito_comida'];
        }
    } catch (Exception $e) {
        var_dump("error");
    }
    
    $credito_comida = (int)$numero+$credito_comida;
    //$monto_ = $credito_comida * $precio;

    $datos = [];
    $datos['alumno_id'] = $alumno['id'];
    $datos['precio_beca'] = $beca['precio_comida'];
    $datos['tipo_pago_id'] = $tipo_pago;
    $datos['monto'] = $monto;
    $datos['credito_generado'] = (int)$numero;
    $datos['credito_total'] = (int)$credito_comida;
    $datos['fecha'] = $fecha;
    $control_pago_id = insertar_tabla($datos,'pagos',$conexion);

    if((int)$credito_comida > (int)$alumno['credito_comida']){
        $numero_comida = (int)$credito_comida-((int)$alumno['credito_comida']);
        $credito_comida = (int)$alumno['credito_comida'];
    } else {
        $numero_comida = 0;
        $credito_comida = $credito_comida;
    }

    $sql3 ="UPDATE billetera 
            SET numero_comida = $numero_comida, credito_comida=$credito_comida
            where alumno_id =".$alumno['id'];
    $result = mysqli_query($conexion, $sql3); 
    echo 1;

    function insertar_tabla($datos=[],$tabla='alumnos',$conexion){

        $sql = "INSERT INTO ".$tabla;
        $campos = "(";
        $valores ="VALUES (";
        foreach ($datos as $key => $value) {
            $campos.="`".$key."`,";
            $valores.="'".$value."',";
        }
        $campos = substr_replace($campos,") ", strlen($campos)-1);
        $valores = substr_replace($valores,")", strlen($valores)-1);
        $sql.=$campos.$valores;
        try {
            $result = mysqli_query($conexion, $sql);
            $ultimo_id = mysqli_insert_id($conexion); 
        } catch (Exception $e) {
            $ultimo_id = 0;   
        }
        return $ultimo_id;
    }
?>