<?php
/*Write a script that uses a 5 x 5 matrix and two functions to
create:
1. The transposed matrix.
2. The sum of both matrices.*/

$matriz1 = array(
    array(1,5,6,8,7),
    array(5,6,7,1,2),
    array(5,5,4,8,7),
    array(8,7,5,6,1),
    array(8,4,5,6,7)
);

$transpuesta = [];
$sumada = [];

for ($fila = 0; $fila < 5;$fila++){
    for ($columna = 0; $columna < 5; $columna++){
        $transpuesta[$columna][$fila] = $matriz1[$fila][$columna];
    }
}

echo "MATRIZ TRANSPUESTA". "<br>";
for ($fila = 0; $fila < 5;$fila++){
    for ($columna = 0; $columna < 5; $columna++){
        echo $transpuesta[$fila][$columna] . " ";
    }
    echo "<br>";
}

for ($fila = 0; $fila < 5;$fila++){
    for ($columna = 0; $columna < 5; $columna++){
        $sumada[$fila][$columna] = $transpuesta[$fila][$columna] + $matriz1[$fila][$columna];
    }
}
echo "SUMA DE LA MATRIZ CON SU TRANSPUESTA". "<br>";
for ($fila = 0; $fila < 5;$fila++){
    for ($columna = 0; $columna < 5; $columna++){
        echo $sumada[$fila][$columna] . " ";
    }
    echo "<br>";
}


?>