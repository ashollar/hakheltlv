<!DOCTYPE html>
<HTML>
  <head>
    <?php include "standardhead.php"?>

  </head>
  
  
  <body style="height:100vh;text-align:center;background-image: url('nigunbg.jpg');display:grid;justify-items:center;height:80%;">
  
    <TITLE>ניגונים</TITLE>
    <?php
        $ref=$_GET["ref"];
        echo"

        <audio controls style=''>
        <source src='$ref' type='audio/mpeg'>
        Your browser does not support the audio element.
        </audio>
        <P>$ref</P>
        ";

    
    
    
    
    ?>

</body >


</HTML>


