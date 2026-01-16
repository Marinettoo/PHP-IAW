<?php
$dsn = "mysql:host=localhost;dbname=PENE";
$user = "root";
$password = "";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'CREATE DATABASE IF NOT EXISTS PENE';
    $connection->query($sql);
    
    $sql = 'CREATE TABLE IF NOT EXISTS Trabajadores (Nombre varchar(50), Apellidos varchar(50), DNI varchar(10))';
    $connection->query($sql);
    
} catch (PDOException $exception) {
    echo "Conexion incorrecta: " . $exception->getMessage();
}   
$connection = null;
?>