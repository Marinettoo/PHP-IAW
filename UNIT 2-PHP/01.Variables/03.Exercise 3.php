<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*3. Given a number, deliver its absolute value as an output.*/
    
    $num = -4;
    $absNegativo = -$num;
    
    if ($num < 0){
         echo ('el valor absoluto de '. $num. ' es '. $absNegativo);
    }
    else{
        echo ('el valor absoluto de '. $num. ' es '. $num);
    }
    
    ?>
</body>
</html>