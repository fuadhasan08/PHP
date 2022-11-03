<?php

// Arithmatic
// + - * / %

$z = 11;
$x = 10.9;
$y = 2.87;

echo $x % $y . "\n"; // It will return 0, It's just calculating the mod of 10 / 2, which is 0

echo fmod($x, $y) . "\n"; // To get the mod of float num



// Spaceship Operator

$s = 50;
$siu = 10;

echo $s <=>
    $siu . "\n";
