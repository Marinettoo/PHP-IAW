<?php
/*Crea un script con una variable $palabra (por ejemplo: "reconocer"). Utiliza funciones de string (puedes buscar strrev()) y un condicional para determinar y mostrar si la palabra se lee igual al revés, es decir, si es un palíndromo*/

$palabra = 'recdonocer';

if ($palabra == strrev($palabra)){
    echo 'Es un palíndromo';
}
else {
    echo 'No es un palíndromo';
};



?>