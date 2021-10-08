<?php
    //Ejercicio 1 Idiomas PachecoSaul
    $language = "";

    $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ?? "";
    

    if ($language == "") {
        $language = $_SERVER["HTTP_ACCEPT_LANGUAGE"] ?? "es";
    }

    var_dump($lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));

    if ($language == "en"){
        $content = "This page is in English";
        $title = "Change the language of the page";
    }else {
        $content = "Esta página está en Castellano (Idioma por defecto)";
        $title = "Cambiar el idioma de la página";
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