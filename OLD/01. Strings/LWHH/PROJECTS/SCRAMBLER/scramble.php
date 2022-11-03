<?php

function displayKey($key)
{
    $task = "encode";

    if (isset($_GET['mode']) && $_GET['mode'] !== "") {
        $task = $_GET['mode'];
    }

    if ($task != "decode") {
        isset($_POST['key']) ? $key = $_POST['key'] : "";

        printf("%s", $key);
    }
}

function scramble($data, $key)
{

    $originalKey = "abcdefghijklmnopqrstuvwxyz1234567890";

    $originalKeyArr = str_split($data);

    $newStr = "";

    foreach ($originalKeyArr as $ky => $val) {

        $currChar = $data[$ky];
        $str_pos = strpos($originalKey, $currChar);
        if ($str_pos !== false) {
            $newStr .= $key[$str_pos];
        } else {
            $newStr .=
                $data[$ky];
        }
    }

    return $newStr;
}

function Decodescramble($data, $key)
{
    // data = hello

    $originalKey = "abcdefghijklmnopqrstuvwxyz1234567890";

    $originalDataArr = str_split($data);

    $newStr = "";

    foreach ($originalDataArr as $ky => $val) {

        $currChar = $data[$ky];
        $str_pos = strpos($key, $currChar);
        if ($str_pos !== false) {
            $newStr .= $originalKey[$str_pos];
        } else {
            $newStr .=
                $data[$ky];
        }
    }

    return $newStr;
}
