<?php
/*Write a script that points out the number of times that a string is 
contained inside another string*/

$string = 'tambor, guitarra, zambomba, pandereta, tambor';
$buscar = 'ambor';
$longitud_str = strlen($string);
$longitud_buscar = strlen($buscar);


for ($i=0; $i < $longitud_str - $longitud_buscar + 1 ; $i++){ #asi hago que coja trozos de la misma longitud q la palabra a buscar
$string2 = substr($string, $i , $longitud_buscar);

	if ($string2 == $buscar){
    $contador++;
	}
}


echo 'la palabra '. $buscar. ' aparece '. $contador. ' veces'


?>