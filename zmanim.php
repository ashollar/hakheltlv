<!DOCTYPE html>

<HTML>
  <head>
    <?php include "utils.php"?>
    <meta name="viewport" content="minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $raw=zmanim(); $keys=array_keys($raw);?>
  </head>
 <body style="font-size:80px;text-align:center;margin:0px;height:100vh;">
 <div style='background-image:url("background2.jpg.jpg");width:100%;height:100%;margin:0px;'>


 <H2 style="margin:0px;">סוף זמן קריאת שמע</H2>
 <H1 style="margin:0px;"><?php echo $raw['סוף זמן קריאת שמע ']['time'];?></H1>

 <H2 style="margin:0px;">חצות היום</H2>
 <H1 style="margin:0px;"><?php echo $raw['חצות (היום) ']['time'];?></H1>

 <H2 style="margin:0px;">שקיעת החמה</H2>
 <H1 style="margin:0px;"><?php echo $raw['שקיעת החמה (שקיעה) ']['time'];?></H1>

 
 <H2 style="margin:0px;">צאת הכוכבים</H2>
 <H1 style="margin:0px;"><?php echo $raw['לילה (צאת הכוכבים) ']['time'];?></H1>

 <H2 style="margin:0px;">חצות</H2>
 <H1 style="margin:0px;"><?php echo $raw['חצות הלילה (הלילה) ']['time'];?></H1>

</div >
<?php print_r(dailystudy()); ?>
</body>
</html>