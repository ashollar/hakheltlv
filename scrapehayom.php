<?php
    $month='1';
    $day="1";
    $path="https://chabadlibrary.org/books/admur/hymym/".$month."/".$day.".htm";

    // initialize the cURL request 
$curl = curl_init(); 
// set the URL to reach with a GET HTTP request 
curl_setopt($curl, CURLOPT_URL, "https://scrapeme.live/shop/"); 
// get the data returned by the cURL request as a string 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
// make the cURL request follow eventual redirects, 
// and reach the final page of interest 
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
// execute the cURL request and 
// get the HTML of the page as a string 
$html = curl_exec($curl); 
// release the cURL resources 
curl_close($curl);


?>