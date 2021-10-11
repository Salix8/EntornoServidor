<?php
    //Ejercicio 2 Cabeceras respuesta csv PachecoSaul

    $f = fopen('productos.csv', 'w+');

    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

    fputcsv($f, $productos);

    header('Location: csv.php estatus = 1');

?>