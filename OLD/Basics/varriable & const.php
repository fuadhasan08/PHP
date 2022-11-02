<?php
//Varriable

$name = "One";
$val = "1";

//echo $name . ": " .  $val;

//PHP isn't case sensitive but php functions are case sensitive....

$name  = "Dipro";

// function exceution() {
//     $name = "Fuad";
//     echo $name;
// }
// exceution();
// echo "\n";
// echo $name;
// echo "\n";

//Global Varriable

// function exceution2() {
//     global $name;
//     echo $name;
// }

// exceution2();

// Static Varriable

// function increase() {
//     $static_var = 1;
//     echo $static_var;
//     echo "\n";
//     $static_var = $static_var + 1; //It won't inrease after calling everytime.
// }
// increase();
// increase();
// increase();

// function static_increase() {
//     static $static_var = 1;
//     echo $static_var;
//     echo "\n";
//     $static_var = $static_var + 1; //It will inrease after calling everytime. The function will remember this
// }
// static_increase();
// static_increase();
// static_increase();

//Super Globals

// global $name;

// $name = "Hello";

// function function_name(){
//     echo $GLOBALS['name'];
//     echo PHP_EOL;
//     echo $_SERVER['PHP_SELF'];
// }       
// function_name();

//Varriable of Varriable

$male = "Dipro";
$gender=  "male";

echo $gender;
echo PHP_EOL;
echo $$gender; //$($gender)

//Catching Errors

// @$val = 1/0;
// echo "</br>";
// print_r(error_get_last()["message"]);

//isset() check weather a varriable has value or not

//Defining Constant

define("NAME", "Dipro");

echo "His name is " . NAME ; //can't use isset in const

echo constant("NAME");

// https://www.javatpoint.com/php-magic-constants

//Excercise-1




 




