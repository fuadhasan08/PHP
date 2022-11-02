<?php 

$handle = fopen("conf.txt", "w");

fwrite($handle, "Some Contents");

fclose($handle);

file_put_contents("conf.txt", "Few More Contents", FILE_APPEND);

echo file_get_contents("conf.txt");

echo "</br>";
echo "</br>";

$fileName = "me.csv";

//echo file_get_contents($fileName); //Return String

$arr = file($fileName);

// foreach ($arr as $key => $value) {
//     $arrs = [];

//     $arrs = str_getcsv($value);
// }

$csv = array_map("str_getcsv", file($fileName));

//print_r($csv);
$arr = [1,2,3,4,5];

// function sum($arr) {
//     $f = array_shift($arr);
//     $l = array_pop($arr);
//     return ($f + $l);
// }
// array_map($sums, sum($arr));

// print_r($map);

//print_r($arr);




