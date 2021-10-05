<?php
$tabla = "alumnos";
$campos = array("nombre" => "Juan", "apellidos" => "Martínez");
$sql = "INSERT INTO $tabla (";

function insert( array $campos, string $sql){
    $columnas = "";
    $columnas2 = "";

    foreach($campos as $columna => $valor){

        $columnas .= $columna .", ";
        $columnas2 .= ":" . $columna .", ";

    }
    $sql .= $columnas=substr($columnas,0,-2) . ") values (" . $columnas2=substr($columnas2,0,-2) .") <br>";
    return $sql;
}
echo insert($campos, $sql);
?>

<?php
$tabla = "alumnos";
$campos = array("nombre" => "Juan", "apellidos" => "Martínez");
$sql = "INSERT INTO $tabla (";

function insertReferencia(array $campos, string $sql){
    $columnas = "";
    $valores = "";

    foreach($campos as $columna => $valor){

        $columnas .= $columna .", ";
        $valores .= ":" . $valor .", ";

    }
    $sql .= $columnas=substr($columnas,0,-2) . ") values (" . $valores=substr($valores,0,-2) .") <br>";
    return $sql;
}
echo insertReferencia($campos, $sql);
?>

<?php
$tabla = "alumnos";
$campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");

function array_kshift(&$campos){
  list($arrayKeys) = array_keys($campos);
  $nuevoArray = array($arrayKeys=>$campos[$arrayKeys]);
  unset($campos[$arrayKeys]);
  return $nuevoArray;
}

function update(string $tabla, array $campos){
    $keyFirst = array_key_first($campos);
    $array1 = array_kshift($campos);
    $array2 = ($campos);

    $sql = "UPDATE %s SET %s, %s WHERE %s = :%s";
    return sprintf($sql, $tabla, implode("=:", array_keys($array2)), implode("=:", array_keys($campos)), $keyFirst, $keyFirst);
}
echo update($tabla, $campos);
?>

<?php
$num1 = 5;
$num2 = 5;
function operar ($operacion, $num1, $operador, $num2) {
    return "$num1 $operador $num2 = {$operacion($num1, $num2)}";
};
$suma = function($num1, $num2){
    return $num1 + $num2;
};
$resta = function($num1, $num2){
    return $num1 - $num2;
};
$multiplicacion = function($num1, $num2){
    return $num1 * $num2;
};
$division = function($num1, $num2){
    return $num1 / $num2;
};

echo operar($suma, $num1, "+", $num2) . "<br>";
echo operar($resta, $num1, "-", $num2) . "<br>";
echo operar($multiplicacion, $num1, "*", $num2) . "<br>";
echo operar($division, $num1, "/", $num2) . "<br>";
?>