<!DOCTYPE html>

<HTML>
  <head>
    <?php include "utils.php"?>
    <meta name="viewport" content="minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
 <body style="font-size:40px;text-align:center;margin:0px;">
 <div style='width:100vw;height=100vh;margin:0px;'>
<p style='margin:0px;'>
<?php



$raw=zmanim();

//print_r($raw);

foreach ($raw as $item){
    echo "<div style='border-radius:10px;box-shadow: 0px -10px 5px 0px rgba(0,0,0,0.5);background-color:white;margin:20px;'>";
    foreach ($item as $detail){
        
        echo $detail."\n<br>";
        
    }
    echo "</div>";
}
?>
</p>
</div >
</body>
</html>