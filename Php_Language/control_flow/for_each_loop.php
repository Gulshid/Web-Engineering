<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>\n";
}

echo "\n";

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $key => $value) {
    echo "$key : $value <br>\n";
}
?>