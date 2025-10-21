<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$num1 = 8;
$num2 = 3;
$num3 = 5;

if ($num1 >= $num2 && $num1 >= $num3) {

    if ($num2 >= $num3) {
        echo $num1 . ' y ' . $num3;
    } else {
        echo $num1 . ' y ' . $num2;
    }

} elseif ($num2 >= $num1 && $num2 >= $num3) {

    if ($num1 >= $num3) {
        echo $num2 . ' y ' . $num3;
    } else {
        echo $num2 . ' y ' . $num1;
    }
} else {

    if ($num1 >= $num2) {
        echo $num3 . ' y ' . $num2;
    } else {
        echo $num3 . ' y '. $num1;
    }
}
?>
</body>
</html>