<?php
/*Crea un array indexado llamado \$temas_interes con estos valores: "IA", "Ciberseguridad", "Desarrollo Web".*/
$temas_interes = ["IA", "Ciberseguridad", "Desarrollo Web"];

/*Recorre el array anterior con un foreach e imprime una lista desordenada*/
echo "<ul>";
foreach ($temas_interes as $interes){
    echo (" me interesa  "."<li>". $interes. "</li>");
};
echo "</ul>";

/*Crea un array asociativo llamado \$prioridades donde las claves sean los temas de tu interés (deporte, novia, IA/Ciberseguridad) y los valores sean un número del 1 al 3 (siendo 1 la más prioritaria, por ejemplo: "Deporte" => 2, "Novia" => 1, "IA/Ciberseguridad" => 3)*/

$prioridades = [
    "Granada Club De Futbol" => 1,
    "Fernando Alonso Diaz" => 2,
    "Cristiano Ronaldo Dos Santos Aveiro" => 3 ,
    "Estudios" => 4
];

/*Recorre el array \$prioridades usando la sintaxis \$index => \$valor y muestra: "La prioridad de [CLAVE] es [VALOR]" en párrafos.*/

foreach ($prioridades as $clave => $valor){
    echo ("<p> La prioridad de $clave es $valor </p>");
};