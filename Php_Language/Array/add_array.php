<?php
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
var_dump($fruits);

echo "\n";
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
$fruits[] = "Pear";
var_dump($fruits);


echo "\n";
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
var_dump($cars);

echo "\n";
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);

echo "\n";
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
var_dump($cars);

echo "\n";
$fruits = array("Apple", "Banana", "Cherry");
array_unshift($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);


$fruits = array("Apple", "Banana", "Cherry");
$new_fruit = "Orange";
array_splice($fruits, 1, 0, $new_fruit); // insert "Orange" at index 1
var_dump($fruits);
?>