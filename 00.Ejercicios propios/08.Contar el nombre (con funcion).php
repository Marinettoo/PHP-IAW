<?php
/*Crea una función llamada `count_substring_occurrences` que cuente el número de veces que una subcadena aparece dentro de una cadena más grande. La función **no debe usar** la función incorporada de PHP `substr_count()`.

1. La función debe recibir el string grande (`$haystack`) y la subcadena a buscar (`$needle`).
2. Utiliza la función `strpos()` dentro de un bucle para encontrar la posición de la subcadena.
3. Después de encontrar una aparición, usa el tercer argumento opcional de `strpos()` (offset) para **comenzar la próxima búsqueda justo después de la aparición encontrada**, evitando contar la misma aparición varias veces y gestionando superposiciones.
4. Retorna el número total de veces que se encontró la subcadena.*/

function count_substring_occurrences (string $haystack, string $needle): string {
    $contador=0;
    $pos=0;

    while(($pos = strpos($haystack, $needle, $pos)) !== false) {
        $contador++;
        $pos++;
    }
        return "La palabra ". $needle. " aparece ". $contador. " veces ";

    
}

    echo count_substring_occurrences('pablito calvo un clavito, que clavito clavo pablito', 'pablito');

?>
