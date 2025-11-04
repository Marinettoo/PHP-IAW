<?php
/*Use the code in slide 46 and add this message:
“Choose one of these XXX drinks:”
where XXX will be the number of drinks in the array.*/
$drinks = array("Coffee", "Tea", "Water", "Beer", "Wine", "Soft drink");
echo "<h1>DRINKS</h1>";
echo "choose one of these ", count($drinks), " drinks";
echo "<ul>";
foreach ($drinks as $b) {
    echo "<li>", $b, "</li>";
}
echo "</ul>";
?>