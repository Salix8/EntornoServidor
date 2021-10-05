<?php
//Ejercicio 5 sort3
$array=array("nombre1"=>"muy largo", "nombre2"=>"largo", "nombre3"=>"casi", "nombre4"=>"si");

function asort3($a, $b) {
    if (strlen($a) == strlen($b)) {
        return 0;
    }
    return (strlen($a) < strlen($b)) ? -1 : 1;
}

uasort($array, 'asort3');
print_r($array);
?>