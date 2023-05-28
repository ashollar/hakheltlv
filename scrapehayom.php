<?php
    $month='1';
    $day="1";
    $path="https://chabadlibrary.org/books/admur/hymym/".$month."/".$day.".htm";

    $dom = new DOMDocument();
    @$dom->loadHTMLFile($path);

    $xml = simplexml_import_dom($dom);

    print $xml;


?>