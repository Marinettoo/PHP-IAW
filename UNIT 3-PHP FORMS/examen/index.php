<?php
session_start();
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
    <form action="php1.php" method='post'>
        <fieldset>
            <label for="sport">Select the sport: </label>
            <select name="sport" id="sport" required>
                <option value="basketball">Basketball</option>
                <option value="football">Football</option>
                <option value="volleyball">Volleyball</option>
                <option value="tennis">Tennis</option>
                <option value="paddle">Paddle</option>
                <option value="swimming">Swimming</option>
            </select><br>
                <label for="days">Select the days your preffer to receive the classes</label>
                <select name="days" id="days">
                    <option value="monWed">Mondays and Wednesdays</option>
                    <option value="tuesThurs">Tuesdays and Thursdays</option>
                </select><br>

                <label for="hour">Select the best hour for you for receiving the class</label>
                <select name="hour" id="hour">
                    <option value="17">17:00</option>
                    <option value="19">19:00</option>
                </select>
        </fieldset>
        <input type="submit" value="Continue">
    </form>
</body>
</html>