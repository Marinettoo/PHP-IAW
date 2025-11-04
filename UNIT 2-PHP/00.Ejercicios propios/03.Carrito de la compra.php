<?php
/*Tienes un carrito de compras representado por un array asociativo donde la clave es el nombre del producto y el valor es su precio unitario.

Define el array $cart.

Inicializa una variable $total_price a 0.

Usa un bucle foreach para recorrer todos los elementos del carrito.

Dentro del bucle, suma el precio de cada producto al $total_price (usa un operador de asignación).

Al final del script, imprime el precio total de la compra.*/

$cart = [
    'Melon' => 4,
    'Manzanas' => 5,
    'café'=> 8,
    'Pan'=> 2
];
$precio_total = 0;
foreach ($cart as $compra => $precio){
    $precio_total = $precio + $precio_total;
}
echo 'El precio total es de: ', $precio_total, '€';
?>