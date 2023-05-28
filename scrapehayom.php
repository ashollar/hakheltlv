<?php

    $path="https://chabadlibrary.org/books/admur/hymym/1/1.htm";
    $xmlfile = file_get_contents($path);
    // Convert xml string into an object
    $new = simplexml_load_string($xmlfile);
    echo $new;
?>