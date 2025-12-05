<?php

$server = "localhost";
$user = "root";
$password = "";
$dbName = "Library";

try {
    $connection = new PDO("mysql:host=$server;dbname=$dbName", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO Books (id, title, author) VALUES (?, ?, ?)";
    
    $statement = $connection->prepare($sql);

    $statement->bindParam(1, $idBook);
    $statement->bindParam(2, $title);
    $statement->bindParam(3, $author);

    // --- Primer Libro ---
    $idBook = 961;
    $title = "Wilt";
    $author = "Tom Sharpe";
    
    $statement->execute();

    // --- Segundo Libro ---
    $idBook = 894;
    $title = "A Place to Call Home";
    $author = "Carole Matthews";
    
    $statement->execute();

    echo "Nuevos libros insertados correctamente en Library.Books";

} catch (PDOException $exception) {
    echo "The connection failed: " . $exception->getMessage();
}

$connection = null;

?>