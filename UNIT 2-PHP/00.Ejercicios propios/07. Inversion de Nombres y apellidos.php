<?php
/*Crea una función llamada invert_name que reciba un nombre completo en formato "Apellido Apellido, Nombre" y lo convierta a "Nombre Apellido Apellido".
La función debe recibir el nombre como un string (Ej: "Fernández Gil, María").
Usa explode() para dividir el string en dos partes usando la coma y el espacio (, ) como delimitador.
La primera parte contiene los apellidos y la segunda el nombre.
Divide los apellidos (Fernández Gil) en un array usando el espacio ( ) como delimitador.
Une el nombre y los apellidos en el orden correcto y retorna la nueva cadena.*/

function invert_name($full_name): string {
$parts = explode(",", $full_name);
$surnames = $parts[0];
$name = $parts[1];

$surnames_array = explode(" ", $surnames);
$nombre_correcto = $name. " ". implode(" ", $surnames_array);

return $nombre_correcto;
}

echo invert_name("Ronaldo Dos Santos, Cristiano");
?>