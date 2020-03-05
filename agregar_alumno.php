
<?php

    $datos = $_POST;
    $datos['codigo'] = generar_random();
    if ($datos['codigo'] != -1) {
        $datos['estatus'] = "Activo";
        $datos['credito_comida'] = 5;
        insertar_tabla($datos);    
    } else{
        echo "-1";
    }

    //este es un codigo generico creado por la experiencia
    function insertar_tabla($datos=[],$tabla='alumnos')
    {
        $conex=mysqli_connect('localhost','root','','servidor.cobro');
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
        $result = (int)mysqli_query($conex, $sql);
        mysqli_close($conex);
        echo $result;
    }
    //genera el codigo para el alumno
    function generar_random(){
        $numeros = file_get_contents("ramdon_numbers.json");
        $numeros = json_decode($numeros);
        if (sizeof($numeros) == 0) {
            return -1;
        }
        $ramdon = mt_rand(0,(sizeof($numeros)-1));
        $nuevos_numeros = [];
        for ($i=0; $i < sizeof($numeros); $i++) { 
            if ($i != $ramdon) {
                $nuevos_numeros[] = $numeros[$i];
            } else {
                $codigo = $numeros[$i];
            }
        }
        EditarJson($nuevos_numeros);
        if ($codigo < 10) {
            $codigo = "00".$codigo;
        } else if ($codigo < 100) {
            $codigo = "0".$codigo;
        }
        return $codigo;
    }

    function EditarJson($numeros){
        $archivo = "ramdon_numbers.json";
        $archivo = fopen($archivo, "w+");
        fwrite($archivo, json_encode($numeros));
        fclose($archivo);
    }
    //llena el archivo json solo se usa cuando es necesario
    function llenarJson(){
        $nuevos_numeros=[];
        for ($i=0; $i < 1000; $i++) { 
            $nuevos_numeros[]=$i;
        }
        EditarJson($nuevos_numeros);
    }