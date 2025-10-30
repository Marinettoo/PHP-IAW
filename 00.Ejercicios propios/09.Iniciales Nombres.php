<?php
/*Ejercicio 9: Iniciales del Nombre 
Crea una función get_initials($full_name) que reciba un nombre completo como "María Fernández Gil" y retorne "M.F.G".
Usa explode() para separar el nombre y los apellidos, y devuelve las iniciales en mayúsculas.*/

$mensaje=" ";

function get_initials($full_name): string{
    $name_array = explode(" ", $full_name);

    foreach($name_array as $letra){
        $inicial = $letra[0];
        $mensaje .= $inicial. ".";
    }

    return $mensaje;
}

echo get_initials("Antonia Gutierrez López");

?>