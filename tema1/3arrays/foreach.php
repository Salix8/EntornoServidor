<?php
//Ejercicio 1 foreach PachecoSaul
$color = array('blanco', 'verde', 'rojo');
$lista = "";

foreach ($color as $key => $value) {
    $lista .= "<li>$value</li>";
}
echo "<ul>{$lista}</ul>";
?>