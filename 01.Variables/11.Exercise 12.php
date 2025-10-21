<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$n = 2048; 
echo 'Los numeros que son divisores de '. $n. ' son: '; 
for ($x = 1; $x <= $n; $x++){ 
    if ($n % $x == 0){ 
        echo ($x. ' '); 
     } 
    }
?>
</body>
</html>