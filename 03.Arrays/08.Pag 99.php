<?php
/*Use the code in slide 96 to get the last day with the highest
maximum temperature of the month and carry it to the output
document preceded by a message.*/
$temperatures = array (
array(1,12,26),
array(2,11,24),
array(3,15,24)
);
echo "<table><caption>Table of temperatures</caption>";
echo "<tr><th>Day</th><th>Minimum</th><th>Maximum</th></tr>";
for ($day = 0; $day < 3; $day++) {
    echo "<tr>";
        for ($col = 0; $col < 3; $col++) {
        echo "<td>", $temperatures[$day][$col],"</td>";
        }
    echo "</tr>";
}
echo "</table>";

/*El ejercicio empieza aqui*/

$TempMax = 0; 

for ($a = 0; $a < 3; $a++){
    if ($temperatures[$a][2] >= $TempMax){
        $TempMax = $temperatures[$a][2];
    }
}

echo "La Temperatura Maxima del mes es: ", $TempMax, "ºC";


?>