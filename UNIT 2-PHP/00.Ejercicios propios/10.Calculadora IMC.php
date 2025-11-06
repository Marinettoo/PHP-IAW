<?php
/*Crea un script que defina tu peso en kg y tu altura en metros. Calcula el Índice de Masa Corporal (IMC) con la fórmula. Luego, usa condicionales (if/elseif/else) para mostrar un mensaje indicando tu estado de salud (por ejemplo: "Bajo peso", "Peso normal", "Sobrepeso").*/

$peso = 85.0;
$altura = 1.80;

$imc = ($peso)/($altura*$altura) ;

echo ' Tu IMC es de '. round($imc, 2);

if ($imc < 18.5){
    echo '. Tienes bajo peso';
}
    elseif ( $imc >= 18.5 && $imc <= 24.9){
        echo '. Estas en tu peso saludable :D';
    }
        else{
            echo '. Estas en sobrepeso';
        };




?>