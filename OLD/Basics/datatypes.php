<?php

//INTEGER and METHODS

echo round(1.87 - 1.99);
echo PHP_EOL;
echo abs(1.87 - 1.99);
echo PHP_EOL;
echo floor(1.87 - 1.99);
echo PHP_EOL;

//BOOLEAN

//True = 1, False = 0;

//STRING

$str_1 = "Fuad Hasan";

echo strlen($str_1);
echo PHP_EOL;
//NULL

$val = 0; //It's false but atually not empty. To use this for condition we have to use is_null() methode.

echo (!is_null($val) ? "Not Empty" : "Empty");
echo PHP_EOL;

//REMOVE A VALUE FROM VARRIABLE

$unnecessary = "MyName";

unset($unnecessary);

echo (isset($unnecessary)) ? "Defined" : "Undefined";

echo "Hello World";

//This wil exceute the command,

echo PHP_EOL;
echo PHP_EOL;

echo sha1("dipro");
echo PHP_EOL;
echo sha1("dipro");
echo PHP_EOL;
echo sha1("dipro");
echo PHP_EOL;
echo sha1("dipro");

echo PHP_EOL;
echo sha1("dipro");
echo PHP_EOL;
echo md5("a");  

echo PHP_EOL;

echo hash("sha256", "a");




