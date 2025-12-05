<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Nombre y Apellido</title>
</head>
<body>
    
<!--Create a project consisting of:
● An HTML document with a form to get a user’s name and surname.
● A PHP document that stores this information in a session and also
has a link to a second PHP document.
● The linked PHP document which delivers a greeting to that person,
including their name and surname.-->

    <h1>Introduce tu nombre y apellido</h1>

    <form method="post" action="Storage.php">
        <label>Nombre:</label> <input type="text" name="name" required>
        <label>Apellido:</label> <input type="text" name="surname" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
