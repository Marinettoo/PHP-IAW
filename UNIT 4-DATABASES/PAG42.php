<?php

$dsn = "mysql:host=localhost;dbname=Library"; 
$user = "root";
$password = "";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $editorial = "Arrow Books, Limited";
    $sql_select = "SELECT title, author FROM Books WHERE publisher = :publisher";

    $statement = $connection->prepare($sql_select);
    $statement->bindParam(':publisher', $editorial);
    $statement->execute();
    
    echo "Libros de " . $editorial . " en Library.Books <br>";

    // Usamos el bucle while para obtener cada fila una por una con fetch()
    while ($book = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo "* Título:" . $book['title'] . ", Autor: " . $book['author'] . "<br>";
    }

} catch (PDOException $exception) {
    echo "Error: **" . $exception->getMessage() . "**";
}

$connection = null;

?>