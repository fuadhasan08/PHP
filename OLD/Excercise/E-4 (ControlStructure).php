<?php

//require_once "./Namespace/lib.php";

// for($i = 1; $i <= constant1\MAX_NUM; ++$i) {
//     if($i % 2 == 0) {
//         echo $i . " Even " . PHP_EOL;
//     }else{
//         echo $i . " Odd " . PHP_EOL;
//     }
// }

?>

<table border="1" cellpadding="10" cellspacing="10">
    <th>Sl</th>
    <th>Even Numbers</th>

    <?php
    $n = 0;
        for ($i=1; $i <= 1000; $i++) { 
            if($i %2 == 0) {
                $n++;
            ?>
            <tr><td><?php echo $n; ?></td><td><?php echo $i; ?></td></tr>
            <?php
            }
        }
    ?>
</table>