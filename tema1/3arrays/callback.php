<?php
//Ejercicio 7 callback
$array=array("muy largo", "largo", "casi", "si");

function calcLong ($valor){
    
    return strlen($valor);
}
$arrayLongitud = array_map('calcLong', $array);
echo "La longitud maxima es " . max($arrayLongitud) . "<br>";
echo "La longitud minima es " . min($arrayLongitud);
?>