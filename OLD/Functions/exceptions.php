<?php

//Throwing Exceptions

// function division($a, $b) {
//     if($b <= 10) {
//         throw new Exception("Enter Value More Than 10 or 10\n", 1002);
//     }
//     return $a / $b;
// }

// try {
//     division(50, 9);
// } catch (Exception $e) {
//     //echo $e->getMessage();
//     //echo "Error code is " . $e->getCode();
// }finally {
//     //echo "\nI will be executed";
// }


//Custom Exception

// function custom($e) {
//     echo $e->getMessage();
// }

// set_exception_handler("custom");

// throw new Exception("Might Happned");

//CATCHING ERROR


// 

// print_r(error_get_last());

function error_handle($e, $b) {
    echo $b;
}
set_error_handler("error_handle");
echo (1/0);
