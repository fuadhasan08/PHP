<?php

$langs = ["PHP", "C++", "JAVASCRIPT", "ORACOL", "PYTHON"];

for ($i = 0; $i < count($langs) + 1; $i++) {
    if (isset($langs[$i])) : // To check if the value is set
        echo $langs[$i] . "\n";
    else :
        echo "Exist not" . "\n";
    endif;
}

$newArray = ["a" => 10, "b" => INF];

echo array_key_exists("b", $newArray) ? "exist\n" : "not exist\n"; // check if it exist
echo isset($newArray["b"]) ? "exist isset\n" : "not exist isset\n"; // check if it exists and not null
