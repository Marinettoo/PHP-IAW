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

    $statement->execute(array(
        ':id' => 6,
        ':nameReader' => 'Nicolas paja en casa mussolini',
        ':phoneNumber' => '655987123'
    ));

    $statement->execute(array(
        ':id' => 7,
        ':nameReader' => 'Javier Ruiz Marín',
        ':phoneNumber' => '698745632'
    ));

    echo "HECHO!";
}
catch (PDOException $exception){
    echo "The connection failed: **" . $exception->getMessage() . "**";
}
$connection = null;
?>