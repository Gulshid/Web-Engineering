<?php
$favcolor = "red";

$text = match($favcolor) {
    "red" => "Your favorite color is red!",
    "blue" => "Your favorite color is blue!",
    "green" => "Your favorite color is green!",
    default => "Your favorite color is neither red, blue, nor green!",
};

echo $text;

echo "\n";
// multiple statement
$d = 3;

$text = match($d) {
    1, 2, 3, 4, 5 => "The week feels so long!",
    6, 0 => "Weekends are best!",
    default => "Invalid day",
};

echo $text;



echo "\n";
$favcolor = "pink"; 
try {
    $text = match($favcolor) {
    "red" => "Your favorite color is red!",
    "blue" => "Your favorite color is blue!",
    "green" => "Your favorite color is green!",
    };
} catch (\UnhandledMatchError $e) {
    var_dump($e);
}

echo $text;
?>