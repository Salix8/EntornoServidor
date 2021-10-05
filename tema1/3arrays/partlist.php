<?php
//Ejercicio 8 partlist
$array = ["Seguro", "que", "apruebo", "esta", "asignatura"];

for ($i=1; $i < count($array); $i++) { 
    $array1 = [array("$i"=>[implode(" ", array_slice($array, $i)), implode(" ", array_slice($array, 0, $i)). "<br>"])];
    print_r($array1);
}
?>