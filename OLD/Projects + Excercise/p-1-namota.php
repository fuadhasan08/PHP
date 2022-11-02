<!-- <table border="1" cellpadding="10"> -->
    <?php

// for ($i=1; $i <= 10; $i++) { 
//     echo "<tr>";
//     for ($j=1; $j <= 10 ; $j++) { 
//         echo "<td>";
//         echo "$i * $j = " . ($i * $j) . "</br>";
//         echo "</td>";
//     }
//     echo "<tr>";
// }
// ?>
// </table>
<!-- // <h1>
//     <div class="row">
//         <div class="col-xl-12">
//             <div class="box-"></div>
//             <div class="box-"></div>
//             <div class="box-"></div>
//         </div>
//     </div>
// </h1> -->
// <?php

// // for ($i=1; $i <= 10 ; $i++) { 
// //     for ($j=10; $j <= $i ; $j++) {
// //         echo "$i + $j" . "</br>" ;
// //     }
// // }

// // for ($i=0; $i <= 9; $i++){
// //     echo "$i--";

// //  for ($m=0; $m <= 9; $m++){
// //     echo $i . "</br>";
// //    }
// // }

// /*
//     #
//     ##
//     ###
//     ####
//     #####
//     ######
//     #######
//     ########
//     #########
//     ##########
// */

// // $sign = "#";

// // for ($i=1; $i < 10 ; $i++) { 
// //     echo $sign  . "-" . PHP_EOL;
// //     for ($j=0; $j < $i; $j++) {
// //         echo $sign;
// //     }
// // }

// $num1 = 1;
// // 4 * 3 * 2 * 1
// for ($i=4; $i > 0; $i--) { 
//     $num1 = $num1 * $i;
// } echo $num1;
// echo PHP_EOL;
// // 1*4 = 4 | 4 * 3 = 12 | 12 * 2 = 24; | 24*1 = 24 |

// // $num1 = $num1 * $i; Means each time loop exceute it saves the previous value of the varriable, on the second exceution it used the saved value and this cycle keeps looping.

// // 0 1 1 2 3 5 8 13 21 34

// // Fibonacci Numbers
// echo $const_val_1 = 0 ; 
// echo " ";
// echo $const_val_2 = 1;
// echo " ";
// $new_val;

// $amount_of_fibonacci = 30;

// for ($i=2; $i < $amount_of_fibonacci; $i++) {
//     $new_val = $const_val_1 + $const_val_2;
//     echo $new_val . " ";
//     $const_val_1 = $const_val_2; 
//     $const_val_2 = $new_val; 
// }


$stock = [
    "Crypto.com" => 0.02,
    "Helium" => 0.1,
    "The Graph" => 0.5,
    "1inch Network" => 1,23,
    "Avalanche" => 1
];

// foreach ($arr as $key => $value) {
//     echo $value . PHP_EOL;
// }

$key = array_keys($stock);

$size = sizeof($key);

for( $i = 0; $i < $size; $i++) {
    echo $stock[$key[$i]] . PHP_EOL;
}
