<?php
    //Ejercicio 2 Cabeceras respuesta csv PachecoSaul

    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
    $resultado = "";
    foreach ($productos as $key => $value) {
        $resultado .= "$key, $value \n";
    }

    echo $resultado;

    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=productos.csv");

?>