<?php
// String function in php
echo strlen("Hello world\n");
print("\n");

echo str_word_count("Hello world!\n");
print("\n");

$txt = "\nI really love PHP!\n";
var_dump(str_contains($txt, "love"));

print("\n");
echo strpos("Hello world!", "world");

print("\n");
$y = "Hello World!";
echo strtoupper($y);

print("\n");
$z = "HELLO WORLD!";
echo strtolower($z);

print("\n");
$a = "Hello World!";
echo str_replace("World", "Dolly", $a);

print("\n");
$x = "Hello World!";
echo strrev($x);

print("\n");
$x = "    Hello World! ";
echo trim($x);

print("\n");
$x = "Hello lovely World!";
$y = explode(" ", $x);

//Use print_r() to display the result
print_r($y);

print("\n");
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;

print("\n");
$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;

print("\n");
$x = "Hello World!";
echo substr($x, 6, 5);

print("\n");
$x = "Hello World!";
echo substr($x, 6);

print("\n");
$x = "Hello World!";
echo substr($x, -5, 3);


print("\n");
$x = "Hi, how are you?";
echo substr($x, 5, -3);

$x = "We\v are the\t so-called \"Vikings\" fr\xhh om the\n north.";
$y = "We\r are the\t so-called \fVikings\" from the\n no\000rth.";

$z = 'We are the so-called \'Vikings\' from the north.';
print("$x, $y, $z");
?>