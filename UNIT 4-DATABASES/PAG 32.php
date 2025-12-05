<?php

$dsn = "mysql:host=localhost;dbname=Library"; 
$user = "root";
$password = "";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO Readers (id, nameReader, phoneNumber) VALUES
(:id,:nameReader,:phoneNumber);";
    
    $statement = $connection->prepare($sql);

    $statement->bindParam(':id', $id);
    $statement->bindParam(':nameReader', $nameReader);
    $statement->bindParam(':phoneNumber', $phoneNumber);
    
    $id = 4;
    $nameReader = 'Antonio Pérez Calero';
    $phoneNumber = '632147852';
    
    $statement->execute();

    $id = 5;
    $nameReader = 'Jesús Roncero Carmona';
    $phoneNumber = '615945782';
    
    $statement->execute();

    echo "Nuevos lectores insertados correctamente en Library.Readers";
}
catch (PDOException $exception){
    echo "The connection failed: " . $exception->getMessage();
}
$connection = null;
?>