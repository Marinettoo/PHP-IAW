<?php
 $dsn = "mysql:host=localhost;dbname=YourStore";
 $user = "root";
 $password = "";
try {
 $connection = new PDO($dsn,$user,$password);
 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "La conexion se ha realizado correctamente";
}
catch (PDOException $exception){
 echo "Connection failed", $exception->getmessage();
}
?>