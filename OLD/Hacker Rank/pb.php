<?php

// Reverse String
// $str = "Hello World";
// $new_rev = "";

// for ($i=strlen($str) - 1; $i >= 0 ; $i--) {
//     $new_rev .= $str[$i];
// }
// echo $new_rev;
// echo PHP_EOL;

//Length of string

$no_candles = [4,4,1,3];
$ij = 0;

// foreach ($no_candles as $key => $value) {
//     $value == max($no_candles) ? $ij++ : $ij;
// }

for ($i=0; $i < count($no_candles); $i++) { 
    $no_candles[$i] == max($no_candles) ? $ij++ : "";
}

echo $ij;


/**

    4 4 1 3

    3 2 1 3

    7 3 2 7 

*/