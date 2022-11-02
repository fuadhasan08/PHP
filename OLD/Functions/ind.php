<?php
$hmm = "Dipro";
$func = function() use($hmm) {
    return $hmm;
};
echo $func();
echo PHP_EOL;

function calculator(int $a, int $b, string $operation="all") :int {
    switch ($operation) {
        case 'add':
            return $a + $b;
            break;
        case 'substract' :
            return $a - $b;
            break;
        case 'multiplication' :
            return $a * $b;
            break;
        case 'division' :
            return $a / $b;
            break;
        default:
            return ($a + $b);
            break;
    }
}

echo calculator(10,5);