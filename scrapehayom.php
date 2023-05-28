<?php
    $month='1';
    $day="1";
    $path="https://chabadlibrary.org/books/admur/hymym/".$month."/".$day.".htm";

    require 'simple_html_dom.php';

    $html = file_get_html($path);
    $title = $html->find('title', 0);
    
    echo $title->plaintext."<br>\n";



?>