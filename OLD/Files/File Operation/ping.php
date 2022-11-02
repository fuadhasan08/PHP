<?php

function pingAddress($ip){
    $pingresult = shell_exec("start /b ping $ip -n 1");
    $dead = "Request timed out.";
    $deadoralive = strpos($dead, $pingresult);

    if ($deadoralive == false){
        echo "The IP address, $ip, is dead";
    } else {
        echo "The IP address, $ip, is alive";
    }

}

    pingAddress("8.8.8.8") . "</br>";
