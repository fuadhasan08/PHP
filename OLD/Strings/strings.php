<?php 
//Find the Given Word in the String (Case Insensitive)

$str = "Hello there, welcome to my channel, it's ok brother.";
$find = "h";

echo stripos($str,$find); //Will return the index of the find word or letter.
echo PHP_EOL;


//Calculate the Length of the String

echo strlen($str);
echo PHP_EOL;

//Remove White Spaces from left in the String

$str_1 = "      Hello Dear!        ";

echo ltrim($str_1);
echo PHP_EOL;

//Remove White Spaces from right in the String

echo rtrim($str_1);
echo PHP_EOL;

//Remove White Spaces from both side of the String

echo trim($str_1);
echo PHP_EOL;

//Reverse the String

echo strrev($str);
echo PHP_EOL;
echo PHP_EOL;

//Word Wrap the Long String

$l_str = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";

//echo wordwrap($l_str, 30);

echo PHP_EOL;

//Find and Replace the word in upper case

//echo str_ireplace("MANY", "Too Many", $l_str);

//Count number of words

echo str_word_count($l_str);

//Shuffle the Strings (Will generate random shuffling each every time exceution of the code)
echo PHP_EOL;
echo str_shuffle($str);
echo PHP_EOL;

//Lowercase
echo strtolower($str);
echo PHP_EOL;
//Uppercase
echo strtoupper($str);
echo PHP_EOL;
//str_len() count length of string 

echo strlen($str);
echo PHP_EOL;

//str_split

$my_str = "Hello World! Hello Try";
$splitting = str_split($my_str);
foreach ( $splitting  as $key => $value) {
    if(@$splitting[$key] == " ") {
        //unset($splitting[$key]); //to keep the removed position
        array_splice($splitting, $key, 1); //to skip the removed position
    }
}
print_r($splitting);
print_r(error_get_last());
//echo gettype(implode("", $slicing));

$arr = [1,2,3,4,45,56,67,7];



