<?php

// heredoc used as double quote
// nowdoc used as single quote

$arr = [1, 2, 3];

$text = <<< TEXT
{$arr[0]}
{$arr[1]}
{$arr[2]}
TEXT;

echo $text . "\n"; // It will have this in every end of line \n, This one to print in terminal

// echo nl2br($text); // This one for printing in browser
