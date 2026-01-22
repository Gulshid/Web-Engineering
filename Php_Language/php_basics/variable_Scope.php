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

// =======================
// 4. global keyword
// The global keyword is used to access a global variable from within a function.
//global variables
$a = 5;
$b = 10; 

function world(){
    global $a, $b;
    $b = $a + $b;
}

world();
echo $b;
// =====================
// 5.  $GLOBALS Superglobal
/*
    PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within 
    functions and can be used to update global variables directly.
*/

$val_1 = 3;
$val_2 = 4;

function king(){
    $GLOBALS['val_2'] = $GLOBALS['val_1'] + $GLOBALS['val_2'];
}
king();

echo $val_2;


?>
