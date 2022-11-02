<?php

// $str = "Hello World";
// $str2 = "fuad hasan";
// $str3 = "Lorem Ipsum Dolor Sit Amet, ipsum Ipsum Dolor, DOLOR, DOlor";
// $str4 = "Hello, MR. Fuad Hasan. He said 'Okay, To be Honest'";

// //Split String into Array
// print_r( str_split( $str ) );
// echo PHP_EOL;

// //Add string inside in string at any position, will repeat
// echo chunk_split( $str, 4, "..." );
// echo PHP_EOL;

// //String to Uppercase
// echo strtoupper( $str );
// echo PHP_EOL;

// //String to Lowercase
// echo strtolower( $str );
// echo PHP_EOL;

// //Make strings first character capital
// echo ucfirst( $str2 );
// echo PHP_EOL;

// //Make strings first character lowercase
// echo lcfirst( $str2 );
// echo PHP_EOL;

// //Make every words first character capital
// echo ucwords( $str2 );
// echo PHP_EOL;

// //Calculate String Length
// echo strlen( $str );
// echo PHP_EOL;

// //Word Count
// echo str_word_count( $str3 );
// echo PHP_EOL;

// //Count a word's amount in string
// echo substr_count( strtolower( $str3 ), "dolor" );
// echo PHP_EOL;

// //Find String Position case sensitive
// echo strpos( $str3, "Dolor" );
// echo PHP_EOL;

// //Find String Position from Reverse order case sensitive
// echo strrpos( $str3, "Dolor" );
// echo PHP_EOL;

// //Find String Position in case insensitive
// echo stripos( $str3, "Dolor" );
// echo PHP_EOL;

// //Find String Position in case insensitive reverse order
// echo strripos( $str3, "Dolor" );
// echo PHP_EOL;

// //Search string word and return the rest part of the string in right direction
// echo "strstr... " . strstr( $str3, "Dolor" );
// echo PHP_EOL;

// //Search string word and return the first part before the search item of the string , if true parameter passed
// echo "strstr true... " . strstr( $str3, "Dolor", true );
// echo PHP_EOL;

// // echo strchr($str3, "Dolor"); // Same as Strstr
// // echo PHP_EOL;

// //Search string character and same as strstr
// echo strpbrk( $str, "l" );
// echo PHP_EOL;

// //Extract any part from string with negative index
// echo substr( $str, 6, -1 );
// echo PHP_EOL;

// //Replace word case sensitive
// echo str_replace( "fuad", "Welcome", $str2 );
// echo PHP_EOL;

// //Replace word case Insensitive
// echo str_ireplace( "FUAD", "Welcome", $str2 );
// echo PHP_EOL;

// //Replace character case Insensitive
// echo strtr( $str2, "fu", "FU" );
// echo PHP_EOL;

// $arr = [
//     "fuad"  => "Fuads",
//     "hasan" => "Hasans",
// ];

// echo strtr( $str2, $arr );
// echo PHP_EOL;

// //Reverse string
// echo strrev( $str2 );
// echo PHP_EOL;

// //Shuffle string
// echo str_shuffle( $str2 );
// echo PHP_EOL;

// //Add Padding to String
// echo str_pad( $str2, 20, ".", STR_PAD_BOTH );
// echo PHP_EOL;

// //Add Padding to String
// echo str_repeat( $str2, 2 );
// echo PHP_EOL;

// //trim(), ltrim(), rtrim()

// //Add Slashes to quotation

// echo ( addslashes( $str4 ) );
// echo PHP_EOL;

// //Add to character
// //echo(addcslashes($str4, "o"));

// //Remove Slashes
// echo ( stripslashes( addslashes( $str4 ) ) );
// echo PHP_EOL;
// echo PHP_EOL;
// //md5, sha1, sha256

// echo md5( $str );
// echo PHP_EOL;
// echo sha1( $str );
// echo PHP_EOL;
// echo hash( "sha256", $str );
// echo PHP_EOL;

// //Remove uunicode
// echo convert_uuencode( $str );
// echo PHP_EOL;
// echo convert_uudecode( convert_uuencode( $str ) );
// echo PHP_EOL;
// echo PHP_EOL;
// //Bin2Hex, Hex2bin

// //chr, ord is reverse of chr
// //strip_tags, wordwrap

// //echo strtolower($str[stripos($str, "h")]);

// echo substr( $str, 0, -1 . "\n" );

// echo PHP_EOL;
// echo PHP_EOL;

class PERSON
{
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Dipro extends PERSON
{
    public $salary;
    static $stat = "Statistics";

    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function output()
    {
        return "His name is {$this->name}, age is {$this->age} & salary is {$this->salary}";
    }

    public static function myFunc()
    {
        return "I am statistics and it is the ";
    }
}

$dpro = new Dipro("Fuad", 20, 100);

echo $dpro->output();
echo "\n";
echo Dipro::$stat;
echo "\n";
echo $dpro->myFunc();

// $array = [
//     "name" => "Dipro",
//     "class" => 12,
//     "roll" => 290
// ];

// $array2 = [
//     "hel", "del", "tel"
// ];

// echo "\n";

// $ser = serialize($array);
// echo "\n";

// $people = array("Peter", "Joe", "Joe", "Glenn", "Cleveland");

// echo count($people);

print_r("Lick");
