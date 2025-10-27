<?php
/*Write a script that points out the number of times that a string is 
contained inside another string*/

$string = 'Hola soy Jesús, Jesús Pérez Marinetto';
$buscar = 'Jesús';
$longitud_str = strlen($string);
$longitud_buscar = strlen($buscar);


for ($i=0; $i < $longitud_str - $longitud_buscar + 1 ; $i++){ #asi hago que coja trozos de la misma longitud q la palabra a buscar
$string2 = substr($string /*Buscamos una palabra en la cadena*/, $i /*Empieza en la posicion en la q esta i*/, $longitud_buscar /*y termina en punto en el que tengamos la mismas letras q la palabra que busco*/ );

	if ($string2 == $buscar){
    $contador++;
	}
}


echo 'la palabra '. $buscar. ' aparece '. $contador. ' veces'


?>