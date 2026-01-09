<?php 
    $dsn = "mysql:host=localhost;dbname=YourStore";
    $user = "root";
    $password = "";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM products";
    $statement = $connection->query($sql);

    echo "<h1>Lista de Artículos: </h1>";
    echo "<ul>";
    

    foreach ($statement->fetchAll(PDO::FETCH_COLUMN, 1) as $nombreProducto){
         echo "<li>", $nombreProducto, "</li>";
    }
    echo "</ul>";

} catch (PDOException $exception){
    echo "Conexion incorrecta:  ", $exception->getMessage();
}
$connection = null;   
?>