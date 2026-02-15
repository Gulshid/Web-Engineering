<?php

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];

echo "\n";
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];

echo "\n";
echo $cars["model"];
echo "\t";
echo $cars['model'];

echo "\n";
function myFunction() {
    echo "I come from a function!";
}

$myArr = array("Volvo", 15, "myFunction");

$myArr[2]();

echo "\n";
function myFunctions() {
    echo "I come from a function!";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => "myFunction");

$myArr["message"]();

echo "\n";
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
    echo "$x: $y \n";
}

echo "\n";
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
    echo "$x \n";
}
?>