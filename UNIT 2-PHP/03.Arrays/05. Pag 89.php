<?php 
/*Write a script to create an associative array that stores the
precipitation (litre per square meter) of each day of this week in
Granada and carries the total amount to the output document.*/
$lluvia = array(
    "Lunes" => 26,
    "Martes" => 29,
    "Miércoles" => 0,
    "Jueves" => 56,
    "Viernes" => 3,
    "Sábado" => 32,
    "Domingo" => 10
);
$total = 0;
foreach ($lluvia as $dias => $litros){
    $total = $litros + $total;
    
}
    echo "Los litros m² de lluvia que van a caer en granada son ", $total;

?>
