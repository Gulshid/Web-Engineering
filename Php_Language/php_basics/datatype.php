<?php
// datatype in php
// string (text values)
// int (whole numbers)
// float (decimal numbers)
// bool (true or false)
// array (multiple values)
// object (stores data as objects)
// null (empty variable)
// resource (references external resources)
$integer = 3;
print("Integer :$integer\n");
var_dump($integer);

$floating = 3.4;
print("Float : $floating\n");
var_dump($floating);

$string = "text";
print("String : $string\n");
var_dump($string);

$bool = True;
print("Bool : $bool\n");
var_dump($bool);

$null = Null;
print("NULL : $null");
var_dump($null);

$array_php = array("Hello", "world", "good morning");
print("Array : $array_php");
var_dump($array_php);

class Car{
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
var_dump($Car);




?>