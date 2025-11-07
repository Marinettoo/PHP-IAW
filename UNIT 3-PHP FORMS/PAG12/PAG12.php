<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greeting</title>
</head>
<body>
    <?php
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $roles = $_POST["roles"];

    if (empty($_POST["name"])){
      echo "NO HAS PUESTO NADA EN NAME";
    }
    elseif (empty($_POST["mail"])){
      echo "NO HAS PUESTO NADA EN EMAIL";
    }
    else{
    echo "<p>Welcome, $name ($mail). Your Role(s) are:</p>";
   
    foreach ($roles as $role) {
        echo "<p>$role</p>";
    }
    };
    
    ?>
</body>
</html>
