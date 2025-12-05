<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Mayte Figueroa";
setcookie($cookie_name, $cookie_value, time() + 86400 * 30, "/");
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
?>
</body>
</html>