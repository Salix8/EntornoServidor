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

<!--Me falta quitar el id-->
<?php
$tabla = "alumnos";
$campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");

function update2(string $tabla, array $campos){

    $sql = "UPDATE %s SET %s, %s WHERE %s = :%s";
    return sprintf($sql, $tabla, implode("=:", array_keys($campos)), implode("=:", array_keys($campos)), array_key_first($campos), array_key_first($campos));
}
echo update2($tabla, $campos);
?>

<!--¿El elemento array_shift() no funciona porque $campos no es un array sino que es un array asociativo? Me refiero ¿este elemnto distingue entre esos dos elemntos?-->
<?php
/*$tabla = "alumnos";
$campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");

function update2(string $tabla, array $campos){
    $array = array_shift(array_keys($campos));

    $sql = "UPDATE %s SET %s, %s WHERE %s = :%s";
    return sprintf($sql, $tabla, implode("=:", $array), implode("=:", $array), array_key_first($campos), array_key_first($campos));
}
echo update2($tabla, $campos);*/
?>

<!--El elemento implode() devuelve un string y con el metodo substr() devuelves una parte de un string, ¿por qué no me deja usar un substr() y dentro de este el implode() si el implode() devuelve un string y el substr() devuelve una parte de un string?-->
<!--Y otra duda ¿por qué en la variable que yo llamo $cadena en la que he metido un implode() no me deja concatenar un espacio? Lo digo porque intente poner un espacio al final para poder quitarlo con el substr() antes de tener el metodo strlen()-->
<?php
/*$tabla = "alumnos";
$campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");

function update3(string $tabla, array $campos){
    $cadena = implode("=:", array_keys($campos));

    $sql = "UPDATE %s SET %s, %s WHERE %s = :%s";
    return sprintf($sql, $tabla, substr($cadena,-3,strlen($cadena)), substr($cadena,-3,strlen($cadena)), array_key_first($campos), array_key_first($campos));
}
echo update3($tabla, $campos);*/
?>

<?php
$num1 = 5;
$num2 = 5;
$operator = "*";

$funcionAnonima = function ($num1, $num2, $operator) {
    $salida ="";

    if ($operator === "+"):
        $salida = "%d + %d = %d";
        return sprintf($salida, $num1, $num2, ($num1+$num2));
    elseif ($operator === "-"):
        $salida = "%d - %d = %d";
        return sprintf($salida, $num1, $num2, ($num1-$num2));
    elseif ($operator === "*"):
        $salida = "%d * %d = %d";
        return sprintf($salida, $num1, $num2, ($num1*$num2));
    elseif ($operator === "/"):
        $salida = "%d / %d = %d";
        return sprintf($salida, $num1, $num2, ($num1/$num2));
    else:
        return "No has introducido los datos correctamente.";
    endif;
};
echo $funcionAnonima($num1, $num2, $operator);
?>