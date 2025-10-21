<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Stats</title>
</head>
<body>
    <?php
        $numbers = [1, 5, 3, 6, 4, 7, 45, 34, 9, 205];

        $sum = array_sum($numbers);
        echo "Suma: " . $sum . "<br>";

        $average = $sum / count($numbers);
        echo "Media: " . $average . "<br>";

        $biggest = max($numbers);
        echo "El mayor es: " . $biggest . "<br>";

        $smallest = min($numbers);
        echo "El menor es: " . $smallest . "<br>";
    ?>
</body>
</html>
