<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* 10. Deliver the sum of the numbers from 1 to 100.*/
    $sum = 0;

    for ($x=0; $x <= 100; $x++){
        $sum = $sum + $x; /*sumo $sum + 1 y vuelvo a almacenarlo en $sum*/
    }

    echo ('La suma de todos los numeros del 1 al 100 es: '. $sum)


    ?>
</body>
</html>