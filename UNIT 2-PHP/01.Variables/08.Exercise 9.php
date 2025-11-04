<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Given a year, deliver a message to point out whether it is a leap one or not. Leap years are
those which are divisible by 4, except for those which are divisible by 100 without being by
400.-->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$year = 2048;
echo ($year. ' ');
/*Son bisiestos los años q son divisibles por 4 Y/O por 100 y 400 JUNTOS*/
if ($year % 4 == 0){
    
    if ($year % 100 == 0){

        if($year % 400 == 0){
            
            echo('Es bisiesto');

        }
        else{
            echo ('No es bisiesto');
        }

    }
    else{
        echo ('Es Bisiesto');
    }
}
else{
    echo ('No es un bisiesto');
}




?>

</body>
</html>