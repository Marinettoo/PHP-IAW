<?php
$palabra = 'reconocer';


$palindromo = "";

for ($letra = strlen($palabra) - 1; $letra >= 0; $letra--){
    $palindromo .= $palabra[$letra];
}

if ($palabra == $palindromo) {
    echo 'Es un palindromo';
}   else{
    echo 'No es un palindromo';
}



?>