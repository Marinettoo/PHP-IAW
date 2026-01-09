<?php
/*Write a script for each of these updates:
● Change the address of the reader whose id is 5 to Spring, 12 - 6º D.
● Assign the current date to the return date of the lending number 4. (Use the 
date() function)
● Write the phone number 654987123 to the reader with DNI 23456789D.
*/
$dsn = "mysql:host=localhost;dbname=Library"; 
$user = "root";
$password = "";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE Lendings SET ReturnDate = ? WHERE id_lend = ?";
    $statement = $connection->prepare($sql);
    $statement -> bindParam(1, $returnDate);
    $statement -> bindParam(2, $id_lend);

    $id_lend = 4;
    $returnDate = date("Y-m-d");
    $statement->execute();

    echo 'se ha añadido las fecha de devolucion '. $returnDate . ' a la devolucion nº ' . $id_lend;

}
catch (PDOException $exception){
    echo "Error en la conexión con la base de datos. ", $exception->getmessage();
}
$connection =  null;   
?>