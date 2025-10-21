<?php
/*function greeting() {
    echo "Nice to meet you, ";
}

$name1 = "Daniel";
echo "<div>";
greeting();
echo $name1 . "</div>";

$name2 = "Patricia";
echo "<div>";
greeting();
echo $name2 . "</div>";*/




function greeting($name) {
    echo "Nice to meet you, " . $name;
}

$name1 = "Daniel";
echo "<div>";
greeting($name1);
echo "</div>";

$name2 = "Patricia";
echo "<div>";
greeting($name2);
echo "</div>";
?>

