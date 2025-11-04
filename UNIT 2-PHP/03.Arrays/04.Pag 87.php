<?php
/*Write a script that creates an array containing the names of the
modules you are studying this year and carries this content to
the output document:
1. The title “Modules of the 2o year”.
2. The list of modules (using foreach).*/

$modulos = array("ASO", "IAW", "SEGURIDAD", "BASE DE DATOS", "INGLES", "SRI", "OPTATIVA", "PROYECTO", "FOL");

echo "<h1> Modules of the 2º year </h1>";

echo "<ul>";
foreach ($modulos as $modulo) {
    echo "<li>", $modulo, "</li>";
}
echo "</ul>"


?>