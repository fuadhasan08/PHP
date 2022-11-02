<?php
    require_once("conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>

<body>
    <button class="dark-mode-selection">🌙</button>
    <div class="container justify-content-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10">
                <div class="survey-box mt-3">
                    <form method="post">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Uername Here" name="username" required>
                        <?php
                        for ($i = 0; $i < count($data); $i++) {
                        ?>
                            <div class="qsn-wrapper">
                                <div class="qsn">
                                    <div class="mb-3">
                                    </div>
                                    <h2><?php echo $data[$i]["qsn"] ?></h2>
                                    <?php
                                    for ($j = 0; $j < count($data[$i]["options"]); $j++) {
                                    ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios-<?php echo $i; ?>" id="<?php echo $data[$i]["Unique"] . "-" . $j; ?>" value="<?php echo $data[$i]["options"][$j] ?>">
                                            <?php 
                                                if (isset($_POST["exampleRadios-$i"])) {
                                                    $arr[$i] = $_POST["exampleRadios-$i"];
                                                }
                                            ?>
                                            <label class="form-check-label" for="<?php echo $data[$i]["Unique"]. "-" . $j; ?>">
                                                <?php echo $data[$i]["options"][$j] ?>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <input type="submit" class="btn btn-primary" value="Submit" name="survey_submit">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_POST["survey_submit"])) {
        $arr_json = serialize(($arr));
        $username_in_bal = $_POST["username"];

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO `survey` (`id`, `username`, `ans_json`) VALUES (NULL, '$username_in_bal', '$arr_json')";

        if (mysqli_query($conn, $sql)) {
            echo '<script>window.location.href = "index.php"</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);

    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        let body = document.querySelector("body");
        let dms = document.querySelector(".dark-mode-selection");
        let qsn = document.querySelectorAll(".qsn");
        
        dms.addEventListener("click", ()=> {
            if(!body.classList.contains("dark-mode")) {
                body.classList.add("dark-mode")
                dms.innerHTML = "☀️";
                qsn.forEach((val, ind) => {
                    qsn[ind].style.background = "#17181c";
                })
            }else {
                body.classList.remove("dark-mode")
                dms.innerHTML = "🌙";
                qsn.forEach((val, ind) => {
                    qsn[ind].style.background = "#fff";
                })
            }
        })
    </script>
</body>

</html>