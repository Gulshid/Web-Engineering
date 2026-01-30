<?php
    // Arithmetic operators
    // Assignment operators
    // Comparison operators
    // Increment/Decrement operators
    // Logical operators
    // String operators
    // Array operators
    // Conditional operators

    // PHP Arithmetic Operators
    $a = 3;
    $b = 4;

    print("additon : " . ($a + $b));
    echo "\n";
    print("Subtraction : " . ($a - $b));
    echo "\n";
    print("Multiplication : " . ($a * $b));
    echo "\n";
    print("Division : " . ($a / $b));
    echo "\n";
    print("Modulas : " . ($a % $b));
    echo "\n";
    print("Exponential : " . ($a ** $b));


    // PHP Assignment Operators
    $y= 4;
    $x = $y;
    echo "\n";
    print("Assign Operator : " . ($x));
    $x += $y;
    echo "\n";
    print("add and assign  : " . ($x));
    $x -= $y;
    echo "\n";
    print("sub and assign  : " . ($x));
    $x *= $y;
    echo "\n";
    print("mul and assign  : " . ($x));
    $x /= $y;
    echo "\n";
    print("div and assign  : " . ($x));
    $x %= $y;
    echo "\n";
    print("modulas and assign  : " . ($x));


    // PHP Comparison Operators
    $z = 5;
    $y = 10;

    
    echo "\n";
    var_dump($z == $y);

    echo "\n";
    var_dump($z > $y);

    echo "\n";
    var_dump($z >= $y);

    echo "\n";
    var_dump($z < $y);
    
    echo "\n";
    var_dump($z <= $y);


    echo "\n";
    var_dump($z != $y);


    echo "\n";
    var_dump($z <> $y);

    echo "\n";
    var_dump($z !== $y);

    echo "\n";
    var_dump($z <=> $y);

    echo "\n";
    var_dump($z === $y);


    // PHP Increment / Decrement Operators

    // pre Increment and decrement
    $x = 0;
    ++$x;
    print("Pre increment :".($x));

    echo "\n";

    --$x;
    print("Pre Decrement :".($x));
    echo "\n";
    // post increment and decrement

    $x = 4;
    $x++;
    print("Pre increment :".($x));

    echo "\n";

    $x--;
    print("Pre Decrement :".($x));



    // PHP Logical Operators
    $g = 3;
    $h = 5;

    print("and :".($g > $h and $g == $h ));


    // etc
    



?>