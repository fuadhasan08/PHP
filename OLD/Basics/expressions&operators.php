<?php

//INCREAMENT OPERATORS

//POST INCREAMENT

// $counter = 10;

// echo $counter++; //It wont increment here.
// echo PHP_EOL;

// echo $counter;
// echo PHP_EOL;
// echo PHP_EOL;

// //PRE INCREAMENT

// $counter1 = 10;

// echo ++$counter1; //It will increment here.
// echo PHP_EOL;

// echo $counter1;

// //PASS FAIL

// $ispassed = false;
// echo PHP_EOL;

// echo ($ispassed) ? "Congo" : "Sad";


// //Odd Even

// $num = 11;
// echo PHP_EOL;
// echo ($num % 2 !== 0) ? "Odd" : "Even";

// //Checking Login

// $loggen_in = false;
// $hasac = true;
// echo PHP_EOL;
// echo ($loggen_in && $hasac) ? "Logged in Succesfully" : "Create an Account";

// //Assignment Operator

// $number = 10;
// echo PHP_EOL;
// echo $number+= 2;

// //Decrement operator

// $nuamb = 10;
// echo PHP_EOL;
// echo --$nuamb;
// echo PHP_EOL;

// //echo `dir * .php`;

// //Hiding Error

// @$error_var = 1/0;

// print_r(error_get_last());

// $total = 10 / 2 + 5;

// echo $total;

// //echo `dir * .php`;

// echo PHP_EOL;

?>

<?php

// $m = 1000000007;

// $b = 1;
// $p = 5;
// $c = $b**$p;

// echo $c % $m;


// function factorial($n){
//     $m = 1000000007;
 
//     $f = 1;
//     for ($i = 1; $i <= $n; $i++)
//     $f = ($f**$i) % $m; 
//     return $f;
// }

// echo factorial(5);



$number = 4;
$phi_counter = 0;

function gcd($m, $s) {
    $counter = 0;
    for ($i = 1; $i < $m; $i++) {
        if ($m % $i == 0 && $s % $i == 0) {
            $counter++ ;
        }
    }
    return $counter;
}

for ($i=1; $i < $number; $i++) { 
    $val = gcd($number, $i);
    $val == 1 ? $phi_counter++ : $phi_counter;
}

echo $phi_counter;






