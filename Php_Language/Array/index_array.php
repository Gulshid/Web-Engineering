<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

echo "\n";
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];

echo "\n";
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);

echo "\n";
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
    echo "$x \n";
}
?>