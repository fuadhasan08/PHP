<?php
require 'scramble.php';
$task = "encode";

if (isset($_GET['mode']) && $_GET['mode'] !== "") {
    $task = $_GET['mode'];
}

$key = 'abcdefghijklmnopqrstuvwxyz1234567890';

if (isset($_GET['mode']) && $_GET['mode'] == "key") {
    $keyOriginal = $key;
    $key = str_shuffle($key);
} else if (isset($_POST['keyField']) && $_POST['keyField'] !== "") {
    $key = $_POST['keyField'];
}

if ($task == "encode") {
    $data = $_POST['dataField'] ?? "";

    if ($data !== "") {
        $srambleddata = scramble($data, $key);
    }
}

if ($task == "decode") {
    $data = $_POST['dataField'] ?? "";
    if ($data !== "") {
        $scrambleddata = Decodescramble($data, $key);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        .container {
            margin-top: 100px;
        }

        textarea {
            height: 200px;
        }

        a {
            display: inline-block;
            margin: 20px 10px;
        }
    </style>
    <title>DATA SCRAMBLER</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-10"></div>
            <div class="column">
                <h1>DATA SCRAMBLER</h1>
                <div class="modes">
                    <a href="index.php?mode=encode">ENCODE</a>
                    <a href="index.php?mode=decode">DECODE</a>
                    <a href="index.php?mode=key">GENERATE</a>
                </div>
                <form method="POST" action="index.php<?php if ($task == "decode") {
                                                            echo "?mode=decode";
                                                        } ?>">
                    <fieldset>
                        <label for="keyField">Key</label>
                        <input type="text" placeholder="Enter Key Here" id="keyField" name="keyField" value="<?php displayKey($key) ?>">
                        <label for="dataField">Data</label>
                        <textarea placeholder="Enter Data Here" id="dataField" name="dataField"><?php echo isset($_POST["dataField"]) ? $_POST["dataField"] : ""; ?></textarea>
                        <label for="resultField">Result</label>
                        <textarea placeholder="Output Here" id="resultField" name="resultField"><?php echo isset($Scrambleddata) ? $Scrambleddata : ""; ?></textarea>
                        <input class="button-primary" type="submit" value="Send" name="submit">
                    </fieldset>
                </form>
            </div>
            <div class="column column-10"></div>
        </div>
    </div>
</body>

</html>