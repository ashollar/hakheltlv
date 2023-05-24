<!DOCTYPE html>
<HTML>
  <head>
    <?php include "standardhead.php"?>

  </head>
<body style='height:100vh;display:block;'>
<img src="landingbanner.png" style="width:100%;">
<div style='scroll:auto;'>
<?php
$mivtza=$_GET["mivtza"];


$heblinks = array(
    "tefillin" => "https://he.chabad.org/library/article_cdo/aid/538826",
    "neshek" => "https://he.chabad.org/library/article_cdo/aid/4110938",
    "tzedaka" => "https://he.chabad.org/library/article_cdo/aid/620376",
    "ahavasyisroel" => "https://he.chabad.org/parshah/article_cdo/aid/1184268",
    "770" => "https://he.chabad.org/therebbe/default_cdo/jewish/page.htm",
    "seforim" => "https://he.chabad.org/library/article_cdo/aid/1071324",
    "torah" => "https://he.chabad.org/generic_cdo/aid/992381",
    "kosher" => "https://he.chabad.org/library/article_cdo/aid/578764",
    "mezuza" => "https://he.chabad.org/library/article_cdo/aid/538813",
    "hakhel" => "https://he.chabad.org/library/article_cdo/aid/748725",
);
$englinks = array(
    "tefillin" => "https://www.chabad.org/library/article_cdo/aid/489153/jewish/6-Black-Leather.htm",
    "neshek" => "https://www.chabad.org/library/article_cdo/aid/489151/jewish/4-Lighting-Up.htm",
    "tzedaka" => "https://www.chabad.org/library/article_cdo/aid/489148/jewish/1-The-Aluminum-Can.htm",
    "ahavasyisroel" => "https://www.chabad.org/library/article_cdo/aid/489737/jewish/10-Connectivity.htm",
    "770" => "https://www.chabad.org/library/article_cdo/aid/244369/jewish/About-Chabad-Lubavitch.htm",
    "seforim" => "https://www.chabad.org/library/article_cdo/aid/489149/jewish/2-Higher-Bookshelves.htm",
    "torah" => "https://www.chabad.org/kids/article_cdo/aid/333008/jewish/Get-Your-Letter-in-the-Torah.htm",
    "kosher" => "https://www.chabad.org/library/article_cdo/aid/489152/jewish/5-Soul-Food.htm",
    "mezuza" => "https://www.chabad.org/library/article_cdo/aid/489150/jewish/3-Strange-Looking-Doorbells.htm",
    "hakhel" => "https://www.chabad.org/library/article_cdo/aid/744089/jewish/What-Is-Hakhel.htm",
);
$mivtzaimg = array(
    "tefillin" => "https://he.chabad.org/library/article_cdo/aid/538826",
    "neshek" => "https://he.chabad.org/library/article_cdo/aid/4110938",
    "tzedaka" => "https://he.chabad.org/library/article_cdo/aid/620376",
    "ahavasyisroel" => "https://he.chabad.org/parshah/article_cdo/aid/1184268",
    "770" => "https://he.chabad.org/therebbe/default_cdo/jewish/page.htm",
    "seforim" => "https://he.chabad.org/library/article_cdo/aid/1071324",
    "torah" => "https://he.chabad.org/generic_cdo/aid/992381",
    "kosher" => "https://he.chabad.org/library/article_cdo/aid/578764",
    "mezuza" => "https://he.chabad.org/library/article_cdo/aid/538813",
    "hakhel" => "https://he.chabad.org/library/article_cdo/aid/748725",
);



$link_heb='';
$link_eng='';
echo "<div class='panel' style='background-color:white;text-align:center;padding:10px;' onclick=\"location.href = '".$heblinks[$mivtza]."'\">\n";
echo "<H1 style='text-decoration: none; color:tomato;font-size:30px;' >עברית</a><br>\n";
echo "</div>\n";
echo "<div class='panel' style='background-color:white;text-align:center;padding:10px;' onclick=\"location.href = '".$englinks[$mivtza]."'\">\n";
echo "<H1 style='text-decoration: none; color:tomato;font-size:30px;' >English</a>\n";
echo "</div>\n";
?>
</div>

<div style="position:absolute;bottom:0px;">
<img src="landingfooter.png" style="width:100%;">
</div>
</body>
</HTML>