<?php

define("NAME", "Dipro");
define("ROLL", 295);

echo "Name is " . NAME . " and Roll is " . ROLL . ".";

echo __FILE__;
echo PHP_EOL;
echo __LINE__;  //ref: https://www.javatpoint.com/php-magic-constants
echo PHP_EOL;
echo __DIR__;
echo PHP_EOL;
function name() {
    $ml = __LINE__;
    echo __FUNCTION__; //WIll return the function name
    echo PHP_EOL;
    echo $ml;
}
name();
echo PHP_EOL;
echo __FUNCTION__;
