<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>\n";
echo "7 + 13 = " . sum(7, 13) . "<br>\n";
echo "2 + 4 = " . sum(2, 4);

echo "\n";
echo "Pass by reference ";
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

?>