<?php

//Calculate the area using Length and breath using Integer

$len = 30;
$bre = 30;

echo "The area of this Rectangle is " . $len * $bre . ".";
echo PHP_EOL;

//Calculate Student Exact Marks Percentage with Double

$total = 100;
$get = 34;
$percentage = ($get / $total) * 100 ;

echo "He/She got $percentage% marks";
echo PHP_EOL;

//Check if the variable is null or not

$is_null = 1;
$is_null2 = null;

echo is_null($is_null) ? "It's Null" : "It has value";
echo PHP_EOL;
echo is_null($is_null2) ? "It's Null" : "It has value";
echo PHP_EOL;

//STUDENT ALL INFO

$attended = true;
$name = "Fuad Hasan";
$physics = 33;
$chemistry = 33;
$Higher_Math = 33;
$totals = $physics + $chemistry + $Higher_Math;
$total_mark = 300;
$Percentage = round(($totals / $total_mark) * 100);
$Result = $Percentage >= 33 ? "Passed" : "Failed";

if($attended) {
    echo "$name got $Percentage% marks. He is $Result";
}