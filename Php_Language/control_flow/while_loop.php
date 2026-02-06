<?php
$i = 1; // Initialize counter
while ($i < 6) { // Check condition
  echo $i; // Execute code
  $i++; // Increment counter
}


echo "\n";

$i = 1;
while ($i < 6) {
    if ($i == 3) break;
    echo $i;
    $i++;
}

echo "\n";
$i = 0;
while ($i < 6) {
    $i++;
    if ($i == 3) continue;
    echo $i;
}

echo "\n";
$i = 0;
while ($i < 6) {
    if ($i == 3) continue;
    echo $i;
    $i++;
}


echo "ALternative :";
$i = 1;
while ($i < 6):
    echo $i;
    $i++;
endwhile;
echo "\n";

$i = 0;
while ($i < 100) {
    $i+=10;
    echo $i ,"<br>";
}

?>