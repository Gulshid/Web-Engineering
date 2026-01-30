<?php
    $a = 2;
    $b = 3.4;
    $c = '23';
    echo "$a, $b, $c\n";
    var_dump($a);
    var_dump($b);
    var_dump($c);


    /* The PHP is_int() Function
    The is_int() function checks if the type of a variable is integer.

    */
    var_dump(is_int($a));
    var_dump(is_int($b));
    var_dump(is_int($c));


    /*
    The PHP is_float() Function
The is_float() function checks if the type of a variable is float.
    */

    var_dump(is_float($a));
    var_dump(is_float($b));
    var_dump(is_float($c));


    /*
    PHP Infinity
The PHP is_finite() function checks whether a value is finite or not. A value is finite 
if it is within the allowed range for a PHP float on this platform.
    */

    $x = 1.9e411;
var_dump(is_infinite($x));
var_dump(is_finite($a));


/*
PHP NAN and is_nan() Function
NAN stands for "Not A Number".

NAN is returned for invalid mathematical operations.

The is_nan() function is used to check if a value is "Not A Number" (NAN).


*/


$x = acos(8);
var_dump($x);

// Check if value is not a number (NaN)
var_dump(is_nan($x));


/*
PHP Number and Numerical Strings
The is_numeric() function is used to check whether a variable is a number or a numeric string.

This function returns true if the variable is a number or a numeric string, false otherwise.
*/

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));


/*
PHP Get The Integer Value of a Variable
The intval() function is used to get the integer value of a variable.
*/

$x = 23465.768;
echo intval($x);

echo "<br>";

$x = "23465.768";
echo intval($x);

?>