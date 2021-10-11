<?php
    //Ejercicio 1 Cabeceras respuesta Productos PachecoSaul

    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

    $id = $_GET["id"] ?? "";

    if (!array_key_exists($id, $productos)) {
        http_response_code(404);
    }

?>