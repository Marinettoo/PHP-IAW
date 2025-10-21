<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = 1;
$b = -5;
$c = 6;

$formula = $b**2 - 4*$a*$c;

$positivo = (-$b + sqrt($formula)) / (2*$a);
$negativo = (-$b - sqrt($formula)) / (2*$a);

echo 'El resultado es: ' . $positivo . ' y ' . $negativo;
?>


</body>
</html>