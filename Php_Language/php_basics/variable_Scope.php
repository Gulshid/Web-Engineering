<?php
// Variable Scope in PHP

// 1. Global variable
$x = 5; // global variable

function MyTest(){
    // echo 'The Global variable will not be accessed in inside of function' . $x;
}

MyTest();

echo "The Global variable will be accessed outside the function :".$x;


// ============================


// 2. Local variable
function myLocal() {
    $y = 4; // local variable
    echo "The Local variable will be accessed inside the function :".$y;
}

myLocal();


echo "The Local variable will not be accessed outside the function :".$y;


// ========================
// 3. static variable
function hello() {
  static $x = 0; // static scope
    echo $x;
    $x++;
}

hello();
hello();
hello();



?>
