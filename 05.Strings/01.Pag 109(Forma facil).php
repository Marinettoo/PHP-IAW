<?php 
/*Write a script that points out if a string is a palindrome. A
palindrome is a sequence of characters that reads the same
backwards as forwards, such as madam or racecar.*/

$frase = "ana";

if ($frase == strrev($frase)){
    echo 'es un palíndromo';
}else {
    echo 'no es un palíndromo';
}

?>





