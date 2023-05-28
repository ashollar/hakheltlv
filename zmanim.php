<!DOCTYPE html>
<HTML>
  <head>
    <?php include "utils.php"?>

  </head>
 <body style="font-size:20px;text-align:center;margin:0px;">
 <div style='background-color:AntiqueWhite;width:100vw;height=100vh;margin:0px;>
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
<img src="rebbe.jpg">
</div >
</body>
</html>