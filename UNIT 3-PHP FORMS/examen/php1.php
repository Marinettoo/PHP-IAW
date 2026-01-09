<?php
session_start();
$_SESSION['sport']=$_POST['sport'];
$_SESSION['days']=$_POST['days'];
$_SESSION['hour']=$_POST['hour'];
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
<h2>Enrol a class</h2>
    <form action="php2.php" method="post">
        <fieldset>
            <label for="age">Are you an adult or a child?</label>
            <select name="age" id="age">
            <!--I am choosing 'select' inputs because it requires less space in the screen and is easier for choosing 2 options. I could also have used inputs with the type 'checkbox' 
            but it would require more space on the screen-->
                <option value="Child">Child (-18)</option>
                <option value="Adult">Adult (+18)</option>
            </select><br>

            <label for="citizen">Are you citizen of the city?</label>
            <select name="citizen" id="citizen">
                <option value="citizen">Yes</option>
                <option value="notcitizen">No</option>
            </select><br>
        </fieldset>

    <input type="submit" value="Continue">
    </form>
</body>
</html>