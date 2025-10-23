<?php
/*Write a script that stores the audience in each of the three
sessions of the four films that a cinema showed last Saturday and
report the number of spectators in each session and in each film.*/
$audiencia = [
    [50, 60, 40],
    [20, 30, 54],
    [17, 24, 30],
    [20, 58, 60]
];

echo "<table>";
echo "<tr><th>Película</th><th>Sesión 1</th><th>Sesión 2</th><th>Sesión 3</th></tr>";

for ($fila = 0; $fila < 4; $fila++) {
    echo "<tr>";
    echo "<td>" . "Película " . ($fila + 1) . "</td>";

    for ($col = 0; $col < 3; $col++) {
        echo "<td>" . $audiencia[$fila][$col] . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
