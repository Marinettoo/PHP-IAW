<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = 1;
    $contador = 0;

    echo ('Los divisores de '. $n. ' son: ');

    for ($x = 1; $x <= $n; $x++){
        if ($n % $x == 0){
            echo ($x. ' ');
            $contador = $contador + 1;

        }
    }

    if ($contador == 2){
        echo 'Por lo tanto ' . $n . ' es primo';
    }
    else{
        echo 'Por lo tanto ' . $n . ' no es primo';
    }
    ?>
</body>
</html>