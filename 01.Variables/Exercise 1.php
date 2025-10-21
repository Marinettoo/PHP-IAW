<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Given the dividend, the divisor, the quotient and the remainder of a division, check if it is correct.</h1>";
    
    $dividendo = 18;
    $divisor = 5;
    $cociente = 2;
    $resto = 0;

    if ($cociente * $divisor + $resto == $dividendo){
        echo 'Es correcta la division';
    } else {
        echo 'Es incorrecta la division';
    }
    
    ?>
</body>
</html>