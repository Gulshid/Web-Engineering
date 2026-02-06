<?php
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year.<br>\n";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");


echo "\n";
// default parameter function
function setHeight($height = 50) {
    echo "The height is : $height <br>\n";
}

setHeight(350);
setHeight(); // will take the default value of 50

?>