<!DOCTYPE html>

<HTML>
  <head>
    <?php include "utils.php"?>
    <meta name="viewport" content="minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
 <body style="font-size:40px;text-align:center;margin:0px;">
 <div style='background-image:url("background2.jpg.jpg");width:100%;height:100%;margin:0px;'>
<p style='margin:0px;'>
<?php



$raw=zmanim();

//print_r($raw);

foreach ($raw as $item){
    echo "<div style='display:grid;border-radius:10px;box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.6);bbackground-color: rgba(255,255,255,.8);margin:0px;'>";
    foreach ($item as $detail){
        
        echo "<div style='grid-row:1;'>".$detail."</div>";
        
    }
    echo "</div>";
}
?>
</p>
</div >
</body>
</html>