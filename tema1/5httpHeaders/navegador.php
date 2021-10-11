<?php
    //Ejercicio 2 Cabeceras de solicitud Navegador PachecoSaul

    $navegador = $_SERVER['HTTP_USER_AGENT'] ?? "";

    var_dump($_SERVER['HTTP_USER_AGENT']);

    $content = "";
    $title = "";

    
    $language = "es";

    if (stripos($navegador, 'Firefox') === false) {
        echo '<script language="javascript">alert("Mensaje de aviso");</script>';
    }else{
        if ($language == "en"){
            $content = "This page is in English";
            $title = "Change the language of the page";
        }else {
            $content = "Esta página está en Castellano (Idioma por defecto)";
            $title = "Cambiar el idioma de la página";
        }
    }

    
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="author" content="Saul Pacheco">
    </head>    
    <body>
        <br>
        <?= $title ?>
        <br>
        <?= $content ?>
    </body>
</html>