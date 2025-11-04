<?php
/*Write a script that delivers the total audience of the former cinema
in the last weekend.*/
$audienciasabado = [
    [50, 60, 40],
    [20, 30, 54],
    [17, 24, 30],
    [20, 58, 60]
];

$audienciadomingo = [
    [20, 58, 60],
    [20, 30, 54],
    [50, 60, 40],
    [17, 24, 30]
    
];

$totalSabado = 0;
for ($i = 0; $i < count($audienciasabado);$i++){
    $filaTotal = 0;
    for ($j = 0; $j < count($audienciasabado[$i]);$j++){
        $filaTotal = $filaTotal+$audienciasabado[$i][$j];
    }
$totalSabado = $totalSabado+$filaTotal;
}

echo 'el total del sabado es: ', $totalSabado;


$totalDomingo = 0;
for ($i = 0; $i < count($audienciadomingo);$i++){
    $filaTotald = 0;
    for ($j = 0; $j < count($audienciadomingo[$i]);$j++){
        $filaTotald = $filaTotald+$audienciadomingo[$i][$j];
    }
$totalDomingo = $totalDomingo+$filaTotald;
}

echo ' y el total del domingo es: ', $totalDomingo;

echo '. Este fin de semana han asistido al cine: ', $totalSabado + $totalDomingo, ' Personas'
?>
