<?php
//Ejercicio 4 sort2 PachecoSaul
$temperaturas = "12 26 16 30 35 40 18 35 24";
$contador = 0;
$resultado = "";
$strings = explode(" ", $temperaturas);
$length = count($strings);
$suma = array_sum($strings);

$resultado = $suma / $length;
$media = number_format($resultado, 2);
echo "La media es de $media grados.";
echo "<br>";
asort($strings);
print_r(array_slice($strings, 0, 5));
arsort($strings);
print_r(array_slice($strings, 0, 5));
?>