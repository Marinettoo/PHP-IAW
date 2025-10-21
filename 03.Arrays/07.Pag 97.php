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

for ($i=0; $i<5; $i++){  #i es fila
    for ($j=0; $j<5; $j++){ #j es columna
        echo $matriz1 [$j][$i], "\n";
    }
}











?>