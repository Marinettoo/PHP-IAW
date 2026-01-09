<?php

$dsn = "mysql:host=localhost;dbname=Library"; 
$user = "root";
$password = "";
$dni_buscado = "78945632D";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        $sql_fix = "ALTER TABLE Lendings ADD COLUMN ReturnDate DATE DEFAULT NULL";
        $connection->exec($sql_fix);
        echo "Columna 'ReturnDate' creada exitosamente en Library.Lendings.<br>";
    } catch (PDOException $e) {
    }

    try {
        $sql_fix_dni = "ALTER TABLE Readers ADD COLUMN dni VARCHAR(10) UNIQUE";
        $connection->exec($sql_fix_dni);
    } catch (PDOException $e) {
    }

   
    $connection->exec("UPDATE Readers SET dni = '$dni_buscado' WHERE id = 7");
    
  
    $sql_lend = "INSERT IGNORE INTO Lendings (id_lend, Book_id, Reader_id, LendDate, ReturnDate) VALUES
        (10, 1, 7, CURDATE(), NULL)";
    $connection->exec($sql_lend);

    $sql_select = " 
        SELECT 
            T2.title AS BookTitle,
            T2.author AS BookAuthor,
            T1.LendDate,
            T3.nameReader
        FROM 
            Lendings T1
        INNER JOIN 
            Books T2 ON T1.Book_id = T2.id
        INNER JOIN 
            Readers T3 ON T1.Reader_id = T3.id
        WHERE 
            T3.dni = :dni_buscado AND T1.ReturnDate IS NULL
        

    ";

    $statement = $connection->prepare($sql_select);
    $statement->bindParam(':dni_buscado', $dni_buscado);
    $statement->execute();

    echo "--- Libros Prestados al DNI " . $dni_buscado . "<br>";
    
    $books = $statement->fetchAll(PDO::FETCH_NUM);

    if ($books) {
        foreach ($books as $book) {
            echo "Lector: " . $book['nameReader'] . "<br>";
            echo "Tiene el libro: " . $book['BookTitle'] . " (" . $book['BookAuthor'] . ") <br>";
            echo "Desde: " . $book['LendDate'] . "<br><hr>";
        }
    } else {
        echo "No se encontraron libros pendientes de devolver.";
    }

} catch (PDOException $exception) {
    echo "Error Fatal: " . $exception->getMessage() . "**";
}

$connection = null;

?>