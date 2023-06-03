<!DOCTYPE html>

<HTML>
  <head>
    <?php include "utils.php"?>
    <meta name="viewport" content="minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
 <body style="font-size:20px;text-align:center;margin:0px;">
 <div style='background-image:"background.png";width:100vw;height=100vh;margin:0px;'>
<p style='margin:0px;'>
<?php



$raw=zmanim();

//print_r($raw);

foreach ($raw as $item){
    foreach ($item as $detail){
        echo $detail."\n<br>";
    }
    echo "<HR>";
}
?>
</p>
</div >
</body>
</html>