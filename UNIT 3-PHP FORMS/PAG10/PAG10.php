<?php
$a = $_POST['a'];
$b = $_POST['b'];

echo "<h1>Resultados</h1>";
echo "Suma: " . ($a + $b) . "<br>";
echo "Resta: " . ($a - $b) . "<br>";
echo "Multiplicación: " . ($a * $b) . "<br>";
echo "División: " . ($b != 0 ? $a / $b : 'No se puede dividir entre 0') . "<br>";
echo "Módulo: " . ($b != 0 ? $a % $b : 'No existe') . "<br>";
?>
