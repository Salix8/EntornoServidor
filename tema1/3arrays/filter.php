<?php
//Ejercicio 9 filter
//?codigo=1&nombre=Juan Pérez&telefono=966112233&email=juanp@gmail.com
$contactos = array(
    array("codigo"=> 1, "nombre"=> "Juan Pérez", "telefono"=> "966112233", "email"=> "juanp@gmail.com"),

    array("codigo"=> 2, "nombre"=> "Ana López", "telefono"=> "965667788", "email"=> "anita@hotmail.com"),

    array("codigo"=> 3, "nombre"=> "Mario Montero", "telefono"=> "965929190", "email"=> "mario.mont@gmail.com"),

    array("codigo"=> 4, "nombre"=> "Laura Martínez", "telefono"=> "611223344", "email"=> "lm2000@gmail.com"),

    array("codigo"=> 5, "nombre"=> "Nora Jover", "telefono"=> "638765432", "email"=> "norajover@hotmail.com"),
);

print_r($contactos);

$filtrados = [];
$filtrarPor = strtolower($_GET["filtrarPor"] ?? "");
foreach ($contactos as $contacto) {
    if (strpos(strtolower($contacto["nombre"]), $filtrarPor) !== FALSE) {
        $filtrados[] = $contacto;
    }
}
print_r($filtrados);
//Esto es un comentario
/*$filtrados = [];
$correoCorrecto = strtolower($_GET["juanp@gmail.com"] ?? "");

foreach ($contactos as $contacto) {
    if (strpos(strtolower($contacto["nombre"]), $correoCorrecto) !== FALSE) {
        $filtrados[] = $contacto;
    }
}
print_r($filtrados);*/

?>