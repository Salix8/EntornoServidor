<?php
//Ejercicio 4 sort2
$temperaturas = "12 26 16 30 35 40 18 35 24";
$contador = 0;
$resultado = "";
$strings = explode(" ", $temperaturas);
$length = count($strings);

foreach ($strings as $key => $value) {
    $contador += $value;
}
$resultado = $contador / $length;
$media = number_format($resultado, 2);
echo "La media es de $media grados.";
echo "<br>";
asort($strings);
print_r(array_slice($strings, 0, 5));
arsort($strings);
print_r(array_slice($strings, 0, 5));
?>