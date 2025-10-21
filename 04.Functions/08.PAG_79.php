<?php
$base = 10;
$height = 5;

function area($b, $h) {
    return $b * $h;
}

function perimeter($b, $h) {
    return 2 * ($b + $h);
}

function interchange(&$b, &$h) {
    $pecera = $b;
    $b = $h;
    $h = $pecera;
}

echo "Area: " . area($base, $height) . "<br>";
echo "Perimeter: " . perimeter($base, $height) . "<br>";

interchange($base, $height);
echo "After interchange  Base: $base, Height: $height";
?>
