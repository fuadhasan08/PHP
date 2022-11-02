<?php

$path = "Dummy";

//Getting FIle From Path
$result = scandir($path);
$result = array_diff($result, [".", ".."]);

// Getting Files with only .txt extention

// $result = glob("Dummy/*.txt");

// CREATING NEW Folder

// if(!file_exists("hmm")) {
//     mkdir("Hello");
// }

//Copying a FIle from another not folder

//copy("Dummy/ind.txt", "Dummy/Index/ss.txt");

//Checks Only File

/*if(file_exists("Dummy/ind.txt")) {
    echo "File here";
}else {
    echo "Mollo";
}*/

//Check Only Folder

// if(is_dir("Dummy/Index/ss.txt")) {
//     echo "File here";
// }else {
//     echo "Mollo";
// }

var_dump($result);

for ($i=0; $i < 10; $i++) { 
    if(!file_exists("Dummy/Loop/Loop- " . $i . ".txt")) {
        copy($path . "/ind.txt", "Dummy/Loop/Loop- " . $i . ".txt" );
    }

    //Rename Files, Directory Must be included in both side of the comma
    //rename("Dummy/Loop/Loop- " . $i . ".txt", "Dummy/Loop/Baal- " . $i . ".txt");

    //Delete A File
    //unlink("Dummy/Loop/Loop- " . $i . ".txt");
}

for($i = 1; $i < 10; $i++) {
    echo $i;
}