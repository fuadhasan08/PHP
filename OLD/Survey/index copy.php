<?php 
    $servername = "127.0.0.1";
    $username = "survey";
    $password = "survey";
    $dbname = "survey";
    $conn = mysqli_connect($servername, $username, $password, $dbname); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container justify-content-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10">
                <div class="survey-box mt-3">
                    <form method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Uername Here" name="username" required>
                        </div>
                        <div class="qsn">
                            <h2>Which Browser You Often Use?</h2>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Chrome">
                                <label class="form-check-label" for="exampleRadios1">
                                    Chrome
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input bilai" type="radio" name="exampleRadios" id="exampleRadios2" value="Edge">
                                <label class="form-check-label bilai" for="exampleRadios2">
                                    Edge
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Safari">
                                <label class="form-check-label" for="exampleRadios3">
                                    Safari
                                </label>
                            </div>
                        </div>
                        <div class="qsn">
                            <h2>Who is your Favourote Actor?</h2>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="q2i1" value="option1">
                                <label class="form-check-label" for="q2i1">
                                    Chris Hemsworth
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="q2i2" value="option2">
                                <label class="form-check-label" for="q2i2">
                                    Chris Evans
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="q2i3" value="option3">
                                <label class="form-check-label" for="q2i3">
                                    Robert Downey JR.
                                </label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit" name="survey_submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_POST["survey_submit"])) {
        $arr = [];
        if (isset($_POST["exampleRadios"])) {
            array_push($arr, $_POST["exampleRadios"]);
        }
        if ($_POST["exampleRadios2"]) {
            array_push($arr, $_POST["exampleRadios2"]);
        }
        $arr_json = json_encode(($arr));
        $username_in_bal = $_POST["username"];

        // Create connection
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "INSERT INTO `survey` (`id`, `username`, `ans_json`) VALUES (NULL, '$username_in_bal', '$arr_json')";

        if (mysqli_query($conn, $sql)) {
            //header("Location: /PHP/Survey");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
    mysqli_close($conn);
    
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>