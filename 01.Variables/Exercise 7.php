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
        echo $num1 . ' , ' . $num2 . ' , ' . $num3;
    } else {
        echo $num1 . ' , ' . $num3 . ' , ' . $num2;
    }
} elseif ($num2 >= $num1 && $num2 >= $num3) {

    if ($num1 >= $num3) {
        echo $num2 . ' , ' . $num1 . ' , ' . $num3;
    } else {
        echo $num2 . ' , ' . $num3 . ' , ' . $num1;
    }
} else {

    if ($num1 >= $num2) {
        echo $num3 . ' , ' . $num1 . ' , ' . $num2;
    } else {
        echo $num3 . ' , ' . $num2 . ' , ' . $num1;
    }
}
?>

</body>
</html>