<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $n = 20;
    $a = 0;
    $b = 1;

    echo "Los primeros 20 numeros de la cadena de fibonacci son: ";
    echo $a . ",". $b;

    for ($i = 2; $i <= $n; $i++){
        $c = $a + $b;
        echo ", ". $c;
        $a = $b;
        $b = $c;

    }

?>

</body>
</html>