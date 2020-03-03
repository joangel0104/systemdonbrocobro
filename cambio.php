<?php
$importe=500;
$monto=72;
 $cambios=$importe-$monto;

 
// indicamos todas las monedas posibles
$monedas=array(500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5);
 
// creamos un array con la misma cantidad de monedas
// Este array contendra las monedas a devolver
$cambio=array(0,0,0,0,0,0,0,0,0,0);
 
// Recorremos todas las monedas
for($i=0; $i<count($monedas); $i++)
{
    // Si el importe actual, es superior a la moneda
    if($importe>=$monedas[$i])
    {
 
        // obtenemos cantidad de monedas
        $cambio[$i]=floor($importe/$monedas[$i]);
 
        // actualizamos el valor del importe que nos queda por didivir
        $importe=$importe-($cambio[$i]*$monedas[$i]);
    }
}
 
// Bucle para mostrar el resultado
for($i=0; $i<count($monedas); $i++)
{
    if($cambio[$i]>0)
    {
        if($monedas[$i]>=5)
            echo "".$cambio[$i]." billetes de: $".$monedas[$i]." ;<br>";
        else
            echo "".$cambio[$i]." monedas de: $".$monedas[$i].";<br>";
    }
}
echo "<p>Su cambio es : $".$cambios."</p>";
?>

<script>
function alerta()
    {
    var mensaje;
    var opcion = confirm("Clicka en Aceptar o Cancelar");
    if (opcion == true) {
        mensaje = "Has clickado OK";
    } else {
        mensaje = "Has clickado Cancelar";
    }
    document.getElementById("ejemplo").innerHTML = mensaje;
}
</script>
<html>
<head>
       
         </head>


          <body>
            <p id="ejemplo">En este párrafo se mostrará la opción clickada por el usuario</p>
 
<button onclick="alerta()">Clicka para mostrar mensaje</button


         </body>
</html>
