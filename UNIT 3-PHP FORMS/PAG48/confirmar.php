<?php
session_start(); 

$nombre = $_SESSION["nombre"]; 

echo "<h1>Pedido confirmado</h1>";
echo "<p>Gracias <strong>$nombre</strong>. Tu bocadillo estará listo en 15-20 minutos.</p>";
?>
                                