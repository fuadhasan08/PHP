<?php

$name = "Aiza";

echo $name;

$string_var = "String";
$int_var = 9487;

function function_name(){
    $int_var = 9487;
    echo $int_var;
}
function_name();
echo PHP_EOL;
function name() {
    static $num = 1;
    echo $num;
    $num = $num + 1;
}
name();
name();
name();
echo PHP_EOL;
global $nam;

$call = "aijamoni123";

function func() {
    global $call;
    echo $call ;
}
func();
echo PHP_EOL;
echo $GLOBALS["call"];
echo PHP_EOL;
echo $_SERVER["PHP_SELF"];

$Male = "Dipro";
$gender = "Male";
echo PHP_EOL;
echo $gender . ": ";
echo $$gender;
