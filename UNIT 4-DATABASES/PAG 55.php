<?php

$dsn = "mysql:host=localhost;dbname=Library";
$user = "root";
$password = "";

try {
    $connection = new PDO($dsn, $user, $password);

    $sql = "SELECT title, author FROM Books";
    $statement = $connection->query($sql);

    $books = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo "<h1>Lista de Libros:</h1>";
    
    foreach ($books as $book) {
        echo "<b>Titulo:</b> " . $book['title'] . " / ";
        echo '<b>Autor: </b>' . $book['author'] . " ";
        echo '<br>';
    }

} catch (PDOException $e) {
    echo "No te has conectado correctamente a la base de datos. " . $e->getMessage();
}

$connection = null;
?>