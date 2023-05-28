<?php
    $month='1';
    $day="1";
    $path="https://chabadlibrary.org/books/admur/hymym/".$month."/".$day.".htm";
    echo $path;

    $dom = new DOMDocument();
    $dom->loadHTMLFile($path);

    $xml = simplexml_import_dom($dom);

    $con = json_encode($xml);
    
    // Convert into associative array
    $newArr = json_decode($con, true);
    $rawarray=$newArr['channel']['item'];
    
    print_r($rawarray);


?>