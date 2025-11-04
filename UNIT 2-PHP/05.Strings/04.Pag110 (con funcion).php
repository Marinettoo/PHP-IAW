<?php
/*Crea una función llamada `count_substring_occurrences` que cuente el número de veces que una subcadena aparece dentro de una cadena más grande. La función **no debe usar** la función incorporada de PHP `substr_count()`.

*/

function count_substring_occurrences (string $haystack, string $needle): string {
    $contador=0;
    $pos=0;

    while(($pos = strpos($haystack, $needle, $pos)) !== false) {
        $contador++;
        $pos++;
    }
        return "La palabra ". $needle. " aparece ". $contador. " veces ";

    
}

    echo count_substring_occurrences('tambor, guitarra, zambomba, pandereta, tambor, tambor', 'tambor');

?>
