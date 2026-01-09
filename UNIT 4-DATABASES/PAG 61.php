<?php
      $dsn = "mysql:host=localhost;dbname=Library";
      $user = "root";
      $password = "";
      try {
          $connection =  new PDO($dsn, $user, $password);
          $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "UPDATE Readers SET phoneNumber=? WHERE Id=?;";
          $statement = $connection->prepare($sql);
     $statement->bindParam(1, $tel);
          $statement->bindParam(2, $id);
          $tel = 655998877;
    $id = 4;  
    $statement->execute();
          echo "The reader with id ", $id, " has this new telephone number ", $tel, ".";
      }  
    catch (PDOException $exception){
        echo "The connection failed. ", $exception->getmessage();
      }
    $connection =  null;   
?>