<?php
session_start();

$precios_tamano = [
    "pequeno" => 3,
    "mediano" => 4,
    "grande" => 5,
    "enorme" => 6
];

$precio_ingrediente = 0.50;
$nombre = $_POST["nombre"];
$_SESSION["nombre"] = $nombre;  

$apellidos = $_POST["apellidos"];
$domicilio = $_POST["domicilio"];
$localidad = $_POST["localidad"];
$cp = $_POST["cp"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$entrega = $_POST["entrega"];
$tamano = $_POST["tamano"];
$ingredientes = $_POST["ingredientes"];

$precio = $precios_tamano[$tamano];
$precio += count($ingredientes) * $precio_ingrediente;

if ($entrega == "domicilio") {
    $precio += 2;
}

echo "<h1>Resumen del pedido</h1>";
echo "<p><strong>Cliente:</strong> $nombre $apellidos</p>";
echo "<p><strong>Domicilio:</strong> $domicilio, $localidad ($cp)</p>";
echo "<p><strong>Teléfono:</strong> $telefono</p>";
echo "<p><strong>Email:</strong> $email</p>";

echo "<p><strong>Tamaño:</strong> $tamano</p>";
echo "<p><strong>Ingredientes:</strong> " . implode(', ', $ingredientes) . "</p>";
echo "<p><strong>Entrega:</strong> $entrega</p>";

echo "<h2>Precio final: $precio €</h2>";

echo "<a href='confirmar.php'>Confirmar pedido</a>";
?>
