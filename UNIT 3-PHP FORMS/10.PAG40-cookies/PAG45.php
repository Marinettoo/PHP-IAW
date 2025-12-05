<!DOCTYPE html>
<?php
/*Using the previous document, change the value of the user to
Donald Watson. Then, check the content of the $_COOKIE
variable.*/

$cookie_name = "user";
$cookie_value = "Amador Rivas AMAI!";
setcookie($cookie_name, $cookie_value, time() + 86400 * 30, "/");

$cookie_password = "password";
$cookie_password_value = "Qpf5n";
setcookie($cookie_password, $cookie_password_value, time() + 86400 * 30, "/" );
?>

<html lang=”en”>
<head>
<title>Cookies</title>
</head>
<body>
    
<?php
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie " , $cookie_name , " is not set!";
}
else {
echo "Value of " , $cookie_name , " is: " , $_COOKIE[$cookie_name];
}

echo "<br>";

if(!isset($_COOKIE[$cookie_password])) {
echo "Cookie " , $cookie_password , " is not set!";
}
else {
echo "Value of " , $cookie_password , " is: " , $_COOKIE[$cookie_password];
}

echo "<br>";

var_dump($_COOKIE);


?>
</body>
</html>