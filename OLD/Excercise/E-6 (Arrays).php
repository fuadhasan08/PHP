<?php 

$ind_array = [1,2,3,4,5,6,7,8];

foreach($ind_array as $value) {
    echo $value . PHP_EOL;
}

$assoc_array = [
    "Mon" => "Monday",
    "Tue" => "Tuesday",
    "Wed" => "Wednesday",
    "Thu" => "Thursday",
    "Fri" => "Friday"
];

//Printing Keys

foreach ($assoc_array as $key => $value) {
    echo $key . PHP_EOL;
}

//Printing Values

foreach ($assoc_array as $key => $value) {
    echo $value . PHP_EOL;
}
echo PHP_EOL;
echo PHP_EOL;
//MULTIDIMENSIONAL ARRAY

$datas = [
    "sun" => [
        "temp" => "hot",
        "color" => "yellow"
    ],
    "earth" => [
        "temp" => "average",
        "color" => "blue"
    ],
    "neptune" => [
        "temp" => "cold",
        "color" => "blue"
    ]
];

foreach ($datas as $key => $val) {
    foreach ($val as $key => $values) {
        echo $key . "->" . $values . PHP_EOL;
    }
}

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

sort($ind_array); //Asc Order Index Array
rsort($ind_array); //Dsc Order Index Array

asort($datas); //Asc Order by values Associative Array
arsort($datas); //Dsc Order by values Associative Array

ksort($datas); //Dsc Order by key Associative Array
krsort($datas); //Asc Order by key Associative Array

print_r($ind_array) ;
print_r($datas) ;
echo PHP_EOL;

echo empty($ind_array) ? "Ëmpty" : "Full";
echo PHP_EOL;
echo count($ind_array);
echo PHP_EOL;

//remove index 0 from $ind_array array.
unset($ind_array[0]);

print_r($ind_array) ;
//reset array
$ind_array = [];

print_r($ind_array) ;

$n = 10;
$sign = "#";

// for ($i=1; $i <= $n; $i++) { 
//     echo "$i -" . PHP_EOL;
//     for ($j=1; $j <= $i; $j++) { 
//             echo "$j ";
//     }
// }
echo PHP_EOL;
echo PHP_EOL;

$arr_op = [1,2,"3",4,5];

// array_push($arr_op, 6); // Add Element to last index
// array_unshift($arr_op, 6); // Add Element to first index

//array_shift($arr_op); // Remove Element from frist index
//array_pop($arr_op); // Remove Element from last index

$store = array_slice($arr_op, 1, 3); //will store the value , copy from main array

array_search(3,$arr_op);

print_r(array_search(3,$arr_op,true)); //return the index, work like findindex js, if not found return false

print_r(array_splice($arr_op, 0, 3)); //Will cut these elements and stores, change main array

print_r($arr_op);