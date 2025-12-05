<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 try {
 $connection = new PDO("mysql:host=$server", $user, $password);
 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "DROP DATABASE Library";
 $connection->query($sql);
 echo "Library database has been created successfully";
 }
 catch (PDOException $exception){
 echo "The connection failed.", $exception->getmessage();
 }
?>