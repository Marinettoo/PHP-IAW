<?php
/*Crea una función llamada `is_palindrome` que reciba una cadena de texto (`$word`) y determine si es un palíndromo (se lee igual al derecho y al revés).

1. **Normalización:** Dentro de la función, convierte la cadena a **minúsculas** (`strtolower`) para ignorar mayúsculas.
2. **Limpieza:** Elimina **todos los espacios** en blanco de la cadena (`str_replace`).
3. **Reversa:** Invierte la cadena limpia (función `strrev`).
4. **Comparación:** Compara la cadena original limpia con la cadena invertida limpia.
5. La función debe retornar `true` si es palíndromo y `false` en caso contrario.

*/

function is_palindrome($word): string{
    $word = strtolower($word);
    $word = str_replace(" ","",$word);
    $reversa = strrev($word);

    if ($reversa == $word) {
        echo 'True';
    }else{
        echo 'False';
    }
}

echo is_palindrome('hOla aloh')


?>