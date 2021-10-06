<?php
//Ejercicio a arrays PachecoSaul
//1
$nombres = ["Kravan", "Rin", "Ozymandias", "Volgar", "Lynx", "Saúl"];
//2
echo "El numero de elementos que contiene el array es de: " . count($nombres);
echo "<br>";
//3
echo "Los alumnos existentes en el array son: " . implode(" ", $nombres);
echo "<br>";
//4
echo "Ordenado afabeticamente <br>";
$arrayNomAux = $nombres;
asort($arrayNomAux);
print_r($arrayNomAux);
echo "<br>";
//5
echo "Ordenado inversamente <br>";
print_r(array_reverse($nombres));
echo "<br>";
//6
echo "El nombre buscado sera 'Saúl y su posicion es: " . array_search('Saúl', $nombres);
echo "<br><br>";
//7
$alumnos = [
    ["id"=> 0, "nombre"=> "Fran", "edad"=> 22 ],
    ["id"=> 1, "nombre"=> "Nerea", "edad" =>19],
    ["id"=> 2, "nombre"=> "Aarón", "edad" =>20],
    ["id"=> 3, "nombre"=> "Andrea", "edad" =>23],
    ["id"=> 4, "nombre"=> "Carlos", "edad" =>33],
    ["id"=> 5, "nombre"=> "Saúl", "edad" =>20]    
];
//8
$table = "";
foreach ($alumnos as $key => $alumno) {
    $table .= "<tr>";
    foreach ($alumno as $key => $value) {

        $table .= "<th>$key</th>";
    }
    $table .= "</tr>";
    break;
}

foreach ($alumnos as $key => $alumno) {
    $table .= "<tr>";
    foreach ($alumno as $key => $value) {

        $table .= "<td style='background-color: #96D4D4'>$value</td>";
    }
    $table .= "</tr>";
}

echo "<table style='border: 1px solid black;padding:2px;'>{$table}</table> <br>";

//9
print_r(array_column($alumnos, "nombre"));
echo "<br>";
//10
$numeros = [150, 50, 200, 50, 0, 50, 100, 150, 100, 150];
echo "La suma del array de numeros es: " . array_sum($numeros);
?>