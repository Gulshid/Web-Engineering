<?php
if (5 > 3) {
    echo "Have a good day!";
}

$t = 14;
if ($t < 20) {
    echo "\nHave a good day!";
}


$t = 14;

if ($t == 14) {
  echo "\nHave a good day!";
}


$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}


$a = 5;

if ($a < 10) $b = "Hello";

echo $b;


$z = 13;

$b = $z < 10 ? "Hello" : "Good Bye";

echo $b;


$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

?>