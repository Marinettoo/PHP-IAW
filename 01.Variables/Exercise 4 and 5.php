<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /*Given two numbers, deliver a message that points out the biggest one*/
    
    $a = 5;
    $b = 6;
    
    if ($a > $b){
        echo ($a. ' es mayor que '. $b);
    } elseif ($b > $a){
        echo ($b. ' es mayor que '. $a);
    }elseif ($b == $a){
        echo ('son iguales xd');    
    }
    
    
    
    
    ?>
</body>
</html>



