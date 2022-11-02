<?php

$arr = [1,1,2,2,4,4,5,5,5];
$i = 0;

foreach ($arr as $key => $value) {
    
    if($key < 8) {
        if(abs($value - $arr[$key + 1]) <= 1) {
            $i++;
            echo $arr[$key + 1] . "k" . PHP_EOL;
        }
        
        //echo $value . "v" . PHP_EOL;
    } 
    
}
echo $i;
// key 0 1 2 3 4 5 6 7 8