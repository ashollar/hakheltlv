<?php
    $month='1';
    $day="1";
    $path="https://chabadlibrary.org/books/admur/hymym/".$month."/".$day.".htm";
    echo "pizza!";
    $xmlfile = file_get_contents($path);
    // Convert xml string into an object
    $new = simplexml_load_string($xmlfile);
    $con = json_encode($new);
    // Convert into associative array
    $newArr = json_decode($con, true);
    $rawarray=$newArr['channel']['item'];
    
    print_r($rawarray);


?>