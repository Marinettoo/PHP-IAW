<?php
$palabra = "oro";

$invertida = "";

for ($i = strlen($palabra); $i >= 0; $i--){
    $invertida = $palabra[$i];
}

if ($palabra == $invertida){
    echo 'es un palíndromo';
}else{
    echo 'no es un palíndromo';
}
?>