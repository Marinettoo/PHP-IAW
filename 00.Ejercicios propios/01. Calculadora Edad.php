<?php 
/*Crea un script PHP que declare una variable $year_of_birth con el año de nacimiento de una persona. El script debe hacer lo siguiente:

Calcular la edad actual (asume que el año actual es 2025).

Imprimir un mensaje indicando la edad calculada.

Utilizar una estructura condicional (if/elseif/else) para clasificar a la persona e imprimir su categoría:

Si la edad es igual o mayor a 65: "Jubilado/a."

Si la edad está entre 18 y 64 (ambos inclusive): "Adulto activo."*/

$year_of_birth = '2007';
$edad_actual = 2025 - $year_of_birth;

echo 'Tienes ', $edad_actual, ' años.';

if($edad_actual >= 65){
    echo ' Eres jubilado/a ';
}
elseif( $edad_actual < 65 and $edad_actual >= 18){
    echo ' Eres adulto activo. ';
}
else{
    echo ' Eres menor de edad. ';
}

?>