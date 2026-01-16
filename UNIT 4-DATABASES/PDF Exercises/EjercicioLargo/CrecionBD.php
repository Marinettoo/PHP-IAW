<?php
$dsn = "mysql:host=localhost";
$user = "root";
$password = "";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'CREATE DATABASE IF NOT EXISTS EMANSYS';
    $connection->query($sql);

    $connection->query('use EMANSYS');

    
    $sql = 'CREATE TABLE IF NOT EXISTS Organizers (
        ID_Organizer        INT PRIMARY KEY AUTO_INCREMENT,
        NAME_Organizer      VARCHAR(100),
        Email_Organizer     VARCHAR(100),
        Phone               VARCHAR(15)
        )';

    $connection->query($sql);

    
    $sql = 'CREATE TABLE IF NOT EXISTS Events (
        ID_Event        INT PRIMARY KEY AUTO_INCREMENT,
        NAME_Event      VARCHAR(100),
        Email_Event     VARCHAR(100),
        LOCATION_Event  VARCHAR(255),
        ID_Organizer    INT,
        FOREIGN KEY (ID_Organizer) REFERENCES Organizers(ID_Organizer)
        )';
    
    $connection->query($sql);


    $sql = 'CREATE TABLE IF NOT EXISTS Attendees (
        ID_Attendee     INT PRIMARY KEY AUTO_INCREMENT,
        Name_Attendee   VARCHAR (100),
        Email_Attendee  Varchar(100),
        Phone_Attendee  Varchar(15),
        ID_Event        INT,
        FOREIGN KEY (ID_Event) REFERENCES Events(ID_Event)
        )';
    $connection->query($sql);

    
} catch (PDOException $exception) {
    echo "Conexion incorrecta: " . $exception->getMessage();
}
$connection = null;
?>