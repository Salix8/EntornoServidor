<?php
//Ejercicio 1 foreach
$color = array('blanco', 'verde', 'rojo');
$lista = "";

foreach ($color as $key => $value) {
    $lista .= "<li>$value</li>";
}
echo "<ul>{$lista}</ul>";
?>