<?php

$server = "localhost";
$user = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$server", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS Library";
    $connection->query($sql);

    $sql = "USE Library";
    $connection->query($sql);

    $sql = ("CREATE TABLE Books (
        id INT PRIMARY KEY,
        title VARCHAR(100),
        author VARCHAR(100)
    )");
    $connection->query($sql);

    $sql = ("CREATE TABLE Readers(
        id INT PRIMARY KEY,
        nameReader VARCHAR(100),
        phoneNumber INT
    )");
    $connection->query($sql);

    $sql = ("CREATE TABLE Lendings(
        id_lend INT PRIMARY KEY,
        Book_id INT,
        Reader_id INT,
        LendDate DATE,
        ReturnDate DATE,
        FOREIGN KEY (Book_id) REFERENCES Books(id),
        FOREIGN KEY (Reader_id) REFERENCES Readers(id)
    )");
    $connection->query($sql);

    $sql = "INSERT INTO Books (id, title, author) VALUES
        (1,'1984', 'George Orwell'),
        (2,'Dune', 'Frank Herbert'),
        (3,'El Principito', 'Antoine de Saint-Exupéry')";
    $connection->query($sql);

    $sql = "INSERT INTO Readers (id, nameReader, phoneNumber) VALUES
        (1,'Ana',123456789),
        (2,'Luis',987654321),
        (3,'Carlos',147258369)";

    $connection->query($sql);

    $sql = "INSERT INTO Lendings (id_lend, Book_id, Reader_id, LendDate) VALUES
        (1, 1, 2, '2025-10-10'),
        (2, 3, 1, '2025-10-11')";

    $connection->query($sql);

    echo "Library database has been created successfully";
}

catch (PDOException $exception){
    echo "The connection failed: " . $exception->getMessage();
}

?>
