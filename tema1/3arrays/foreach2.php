<?php
//Ejercicio 2 foreach2
$color = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
$lista2 = "";
foreach ($color as $key => $value) {
    $lista2 .= "<li><a href='{$value}'>$key</a></li>";
}
echo "<ul>{$lista2}</ul>";
?>