
<?php
function cURL() {

// Create a new cURL resource
$curl = curl_init();

if (!$curl) {
    die("Couldn't initialize a cURL handle");
}

// Set the file URL to fetch through cURL
curl_setopt($curl, CURLOPT_URL, 
"hakheltlv.com/ip.php"
);

// Set a different user agent string (Googlebot)


// Follow redirects, if any
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

// Fail the cURL request if response code = 400 (like 404 errors)
curl_setopt($curl, CURLOPT_FAILONERROR, true);

// Returns the status code
curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);

// Wait 10 seconds to connect and set 0 to wait indefinitely
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);

// Execute the cURL request for a maximum of 50 seconds
curl_setopt($curl, CURLOPT_TIMEOUT, 50);

// Do not check the SSL certificates
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// Fetch the URL and save the content in $html variable
$html = curl_exec($curl);

// Check if any error has occurred
if (curl_errno($curl))
{
    echo 'cURL error: ' . curl_error($curl);
}
    // cURL executed successfully
    print_r(curl_getinfo($curl));
    // will display the page contents i.e its html.
    echo $html;


// close cURL resource to free up system resources
curl_close($curl);
}
cURL();
?>

