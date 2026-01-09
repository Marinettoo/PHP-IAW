<?php
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['surnames']=$_POST['surnames'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['email']=$_POST['email'];

//The cookies will last 3 months, because for example. During summer months, people have more free time for doing sport.
setcookie('name', $_SESSION['name'], time() + 86400*3);
setcookie('surnames', $_SESSION['surnames'], time() + 86400*3);
setcookie('email', $_SESSION['email'], time() + 86400*3);
setcookie('phone', $_SESSION['phone'], time() + 86400*3);


$price = 0;
$citizen = '';

if (($_SESSION['age']=='Child')&&($_SESSION['citizen']=='citizen')){
    $price = 25;
    $citizen = 'Citizen';

}elseif (($_SESSION['age']=='Adult')&&($_SESSION['citizen']=='citizen')){
    $price = 30;
    $citizen = 'Citizen';

}elseif (($_SESSION['age']=='Child')&&($_SESSION['citizen']=='notcitizen')){
    $price = 35;
    $citizen = 'Not a citizen';
}elseif (($_SESSION['age']=='Adult')&&($_SESSION['citizen']=='notcitizen')){
    $price = 40;
    $citizen = 'Not a citizen';
}

echo '<h1>Municipal sport classes</h1>';
echo '<h2>Information Summary</h2>';

echo 'Hi!, '. $_SESSION['name']. '. You have chosen: '. $_SESSION['sport']. ' and you are a(n): '. $_SESSION['age'].'/'. $citizen. '.'; 
echo '<br>';
echo 'The prize of the classes is: '. $price. ' £ / Month.';
echo '<br><br>';

echo '<a href=index.php>I want to enrol a new class</a>';
?>