<!DOCTYPE html>

<HTML>
  <head>
    <?php include "utils.php"?>
    <meta name="viewport" content="minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $raw=dailystudy(); $keys=array_keys($raw);?>
  </head>
 <body style="font-size:80px;text-align:center;margin:0px;height:100vh;">
 <div style='background-image:url("background2.jpg.jpg");width:100%;height:100%;margin:0px;'>


 <H2 style="margin:0px;"></H2>
 <H1 style="margin:0px;"><?php echo $raw['Daily Chumash with Rashi'];?></H1>

 <H2 style="margin:0px;"></H2>
 <H1 style="margin:0px;"><?php echo $raw['Daily Tehilim - Psalms'];?></H1>
 
 <H2 style="margin:0px;"></H2>
 <H1 style="margin:0px;"><?php echo $raw['Daily Tanya'];?></H1>

 <H2 style="margin:0px;"></H2>
 <H1 style="margin:0px;"><?php echo $raw['Daily Rambam - 1 Chapter Per Day (Hebrew)'];?></H1>

 <H2 style="margin:0px;"></H2>
 <H1 style="margin:0px;"><?php echo $raw['Daily Rambam - 3 Chapter Per Day (Hebrew)'];?></H1>

 <H2 style="margin:0px;"></H2>
 <H1 style="margin:0px;"><?php echo $raw['Daily Mitzvah - Sefer Hamitzvot'];?></H1>

</div >
<?php print_r(dailystudy()); ?>
</body>
</html>