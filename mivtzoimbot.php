<!DOCTYPE html>
<html>
<body>
<form action="mivtzoimbot.php" method='POST'>
  <label for="fname">input:</label><br>
  <input type="text" id="From" name="From"><br>
</form>
</body>
</html>


<?php
include 'utils.php';
require_once '/home/hakheltlv.com/public_html/twilio-php-main/twilio-php-main/src/Twilio/autoload.php'; // Loads the library
use Twilio\TwiML\MessagingResponse;

$incoming_number=$_POST['From'];
$incoming_message=$_POST['Body'];
session_start();
$name = $_SESSION['name'];
$mothername = $_SESSION['mothername'];



$response = new MessagingResponse();
$response->message('שלום חבר קבלנו הSMS שלך מהמספר:'.$incoming_number);

echo $response;
?>