<?php
session_start();
$_SESSION['age']=$_POST['age'];
$_SESSION['citizen']=$_POST['citizen'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Municipal Sport Classes</h1>
<h2>Personal Data</h2>
    <form method="post" action="php3.php">
        <fieldset>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required><br>

            <label for="surnames">Surnames: </label>
            <input type="text" name="surnames" id="surnames" required> <br>
            
            <label for="phone">Phone Number: </label>
            <input type="tel" name="phone" id="phone" required><br>

            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email" required><br>
        </fieldset>


        <input type="submit" value="Continue">
    </form>
</body>
</html>