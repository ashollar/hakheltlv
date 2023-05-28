<!DOCTYPE html>
<HTML>
  <head>
    <?php include "standardhead.php"?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="mivtzoim,chabad,lubavitch,jewish,mitzva" />
    <meta name="description" content="create your free account on Mivtzoim App" />
    <style>
      body{
        background-color: white;
        grid-template-rows:auto 1fr auto 1fr;
        grid-template-columns:1fr;
        width:100vw;
        max-width:100%;

      }
      .description{
        font-family: 'Noto Serif Hebrew', serif;
        align-self:top;
      }
    </style>

  </head>
  
  
  <body style="text-align:center;"> 

    <TITLE> הקהל </TITLE>
    <div class='splash' style=''>
      <div>
        <H1 style="font-size:100px;font-family: 'Open Sans', sans-serif;margin:0px;line-height:100px;">הקהל</H1>
        <img src="chatzotzrah4.png" width='200px' style=' -webkit-transform: scaleX(-1);
  transform: scaleX(-1);'>
      </div>
    </div>

    <span style='justify-self:right;grid-row:1;' onclick="window.location.href = 'https://hakheltlv.com/home.php';" class="material-symbols-outlined">close</span>
    <div style='grid-row:2;'>
    <img src="rebbe.jpg" width='90%' style='border-radius:10px;' id='pic'>
    <video  id="video"  style='display:none;width:90%;justify-self:center;margin:0px;'>
      <source src="rebbe.m4v" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    
    <p class='description'>
        וודיא של הרבי כחצי דקה שמדבר על ענין ההקהל

    </p>
    <button class='play' onclick="openFullscreen();"><span class="material-symbols-outlined" style='  color: rgb(245,140,41);'>play_arrow</span></button>
    </div>
    <button type="button" class="buttonb" id='popupbutton' onclick="window.location.href = 'https://hakheltlv.com/home.php';">
                <p style='margin:0px;'>דף הבית</p>
    </button>

    


   
    
 
</body >
<script>
    /* Get the element you want displayed in fullscreen */ 
    var elem = document.getElementById("video");

    /* Function to open fullscreen mode */
function openFullscreen() {
  elem.style.display='block';
  document.getElementById("pic").style.display='none';
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
  elem.play();
}
elem.addEventListener('ended', (event) => {
  window.location.href = "https://hakheltlv.com/home.php";
});

</script>


</HTML>


