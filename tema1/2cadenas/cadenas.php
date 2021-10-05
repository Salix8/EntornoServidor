<?php
$nombre= $_GET["nombre"] ?? "";
$prefijo= $_GET["prefijo"] ?? "";
$url = 'http://username:password@hostname:9090/path?arg=value';


$nombre = trim($nombre, "/");
$nombre = trim($nombre);

$longitud = strlen($nombre);
$mayuscula = strtoupper($nombre);
$minuscula = strtolower($nombre);

$cuentaA = substr_count($nombre, 'a') + substr_count($nombre, 'A');
$indiceA = strrpos($nombre, 'a')+1;

$reemplazado = str_ireplace('o', 0, $nombre);
$reemplazado = str_ireplace('O', 0, $nombre);


echo "La cadena sin caracteres raros es: {$nombre}. <br>";
echo "La longitus de la cadena es de: {$longitud}. <br><br>";
echo "La cadena en mayuculas es: {$mayuscula}. <br>";
echo "La cadena en minusculas es: {$minuscula}. <br>";
if ($prefijo != "") {
    if (strrpos($nombre, $prefijo) === 0) {
        echo "La cadena $nombre empieza por {$prefijo}. <br>";
    }    
}
echo "La letra 'a' o 'A' aparece $cuentaA veces. <br>";

if ($cuentaA == 0) {
    echo "No se ha encontrado ninguna 'a' o  'A'. <br>";
}else{
    echo "La primera posicion de la letra 'a' o 'A' es la numero {$indiceA}. <br>";
}
echo "La cadena cambiando las 'o' y las 'O' por '0' es {$reemplazado}. <br><br>";


var_dump(parse_url($url, PHP_URL_SCHEME));echo "<br>";
var_dump(parse_url($url, PHP_URL_USER));echo "<br>";
var_dump(parse_url($url, PHP_URL_PATH));echo "<br>";
var_dump(parse_url($url, PHP_URL_QUERY));echo "<br>";

?>