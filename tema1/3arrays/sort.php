<?php
//Ejercicio 3 sort
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
asort($edades);
print_r($edades);
echo "<br>";

ksort($edades);
print_r($edades);
echo "<br>";

arsort($edades);
print_r($edades);
echo "<br>";

krsort($edades);
print_r($edades);
echo "<br>";
?>