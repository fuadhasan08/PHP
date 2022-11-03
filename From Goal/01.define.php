<?php

define("STATUS", 404);

const STAT = "Statistics"; // This couldn't be used inside curly braces {}

echo STATUS . "\n";
echo STAT . "\n";
echo PHP_VERSION . "\n";
echo PHP_OS . "\n";

// Varriable Varriable

$name = "Dipro";
$$name = "Fuad_Hasan";
$ $$name = "Fuad Hasan \n";

echo $name . " " . $Dipro . " " . $Fuad_Hasan;

$isBoll = true;

echo var_dump(is_bool($isBoll)) . "\n";

//Depends on the scale. For basic stuff yea it's fine, otherwise I would bcmath or a library that has Money objects

echo floor((0.1 + 0.7) * 10) . "\n"; // ceil doesn't work

echo ceil((0.1 + 0.2) * 10) . "\n"; // floor doesn't work

$max_float_beyond = PHP_FLOAT_MAX * 2;
$min_float_beyond = PHP_FLOAT_MIN;
$max_num_beyond = PHP_INT_MAX;
$min_num_beyond = PHP_INT_MIN;

if (is_infinite($max_float_beyond)) {
    echo "Infinite \n";
} else {
    echo "Finite \n";
}

if (is_integer($max_float_beyond)) {
    echo "Integer \n";
} else {
    echo "Integer na \n";
}

echo $max_num_beyond . "\n";

$x = "";
$y = null;

echo empty($x) ? "Hae \n" : "Na \n";
echo is_null($y) ? "Hae null \n" : "Null na \n";
