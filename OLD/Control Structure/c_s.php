<?php
$tr = true;
$fl = false;

// echo $fl || $tr;
// echo PHP_EOL;
// echo $fl && $tr;
//is_null() returns false if the var has value.

// echo is_null($tr) ? "hmm" : "nmm";

for ($i=0; $i < 100; $i++) { 
        echo $i . PHP_EOL;
}

$i = 0;

do{
    echo $i++ . PHP_EOL;
}while($i <=100);

//Include will exceute the error and the rest of the file.
//Require will stop the file in the error. Won't exceute the rest part of the file.
//Include_Once will include the file only once. No matter how many time user input the function to the code. It will just exceute the first line. :)
//Require_Once is same as include_once.