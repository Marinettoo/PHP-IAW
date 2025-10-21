<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- A store has saved its last fortnight sales in an array. Write a 
script to calculate the total amount and to carry it to the 
output.-->
<?php
$sales = [500, 600, 800,500, 455, 856, 879, 200, 756, 1000, 1001, 566, 875, 785, 459];
$total = 0;

foreach ($sales as $sale) {         #foreach es un bucle que solo funciona con arrays.
        $total = $total + $sale;
}

#$total = array_sum($sales);






echo "El total vendido es: ". $total;

?>
</body>
</html>