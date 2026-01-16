<?php

/*1.  Using  a  drop-down  list,  show  YourStore  customers’  cities in alphabetical order and no 
repetitions. After choosing one of them, a list of all of the customers’ names and telephones 
in the selected city will be displayed.*/

$server = "localhost";
$user = "root";
$password = "";
$dbName = "YourStore";


echo '<form method="post">
    <select name="city">'
        $q = mysqli_query($con, "SELECT DISTINCT City FROM customers ORDER BY City");
        while ($fila = mysqli_fetch_row($q)) echo "<option>$fila[0]</option>";

echo '</select>
    <input type="submit" value="Ver">
</form>';
?>