<?php
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>\n";
}


echo "\n";

$x = 0;

while($x < 10) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>\n";
    $x++;
}

?>