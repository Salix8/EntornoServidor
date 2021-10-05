<?php
//Ejercicio 6 password
$contraseña = "";

function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
    $resulUpper = "";
    $resulLower = "";
    $resulNum = "";
    $resulOther = "";
    for ($i=0; $i < $upper; $i++) { 
        $resulUpper .= chr(rand(65, 90));
    }
    for ($i=0; $i < $lower; $i++) { 
        $resulLower .= chr(rand(97, 122));
    }
    for ($i=0; $i < $numeric; $i++) { 
        $resulNum .= chr(rand(48, 57));
    }
    for ($i=0; $i < $other; $i++) { 
        $randOther = [chr(rand(32, 47)), chr(rand(58, 64)), chr(rand(91, 96)), chr(rand(123, 126))];
        shuffle($randOther);
        $resulOther .= $randOther[0];
    }
    return str_shuffle($resulUpper . $resulLower . $resulNum . $resulOther);
}
$contraseña = rand_Pass(5, 8, 6, 3);
echo "La contraseña es: $contraseña";
?>