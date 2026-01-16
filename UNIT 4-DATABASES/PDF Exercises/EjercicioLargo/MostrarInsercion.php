<?php
$dsn = "mysql:host=localhost;dbname=EMANSYS";
$user = "root";
$password = "";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $nombre = $_POST['Name_Organizer'];

    $sql = 'INSERT INTO Organizers (NAME_Organizer) VALUES ?'
    
    $statement->bindparam(1,$nombre)

    
} catch (PDOException $exception) {
    echo "Conexion incorrecta: " . $exception->getMessage();
}
$connection = null;
?>