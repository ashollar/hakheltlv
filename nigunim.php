<!DOCTYPE html>
<HTML>
  <head>
    <?php include "standardhead.php"?>

  </head>
  
  
  <body style="height:100vh;text-align:center;background-image: url('nigunbg.jpg');display:block;">
  
    <TITLE>ניגונים</TITLE>
    <div class='footer' onclick="window.location.href = '/home.php'">
    <span class="material-symbols-outlined" style='text-align:right;'>navigate_next</span>
    </div>
    <H1>ניגון השבוע</H1>
    <H2>ניגון שבת ויום טוב - קלימוביץ</H2>
    <audio controls>
      <source src="nigunim/Chabad Nigunim - Rabbi Menachem Amar/all/ניגון שבת ויום טוב - קלימוביץ.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <br>
    <audio controls>
      <source src="nigunim/Heichal Neginah/12 - Klimavitch/1202 Niggun L_Shabbos V_Yom Tov - Fr.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
      <br>
    
      






      <hr>
      <H1>ניגונים שלמדנו</H1>
      <H2>ניגון געגועים</H2>
    <audio controls>
      <source src="nigunim/Nichoach/Nichoach Vol 07/00 - 10 - Nigun Ga_aguim.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
      <br>
      <audio controls>
      <source src="nigunim/Velner/05 Gaguim/05 138 Ga_aguim, Nikolayev.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
      <br>
      <H2>ניגון כלות הנפש</H2>
    <audio controls>
      <source src="nigunim/Chabad Nigunim - Rabbi Menachem Amar/all/ניגון כלות הנפש.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <br>
      <H2>ניגון דביקות</H2>
    <audio controls>
      <source src="nigunim/Nichoach/Nichoach Vol 04/00 - 02 - Nigun Dveikus.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
      <H2>ניגון הבינוני</H2>
      <audio controls>
      <source src="nigunim/Nichoach/Nichoach Vol 13/00 - 02 - Bainuni.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
      <br>
      <hr>
      <H1>אוצר ניגונים </H1>

      <div class='collapsible'>
            <button type="button" class="collapsebutton" id="collapsebutton">
             <p>ניחוח</p>
            </button>
            <div class="collapsedcontent" id="collapsedcontent">
              <a href="nigunim/Nichoach.zip" download>הורדת "ניחוח" (ניגוני חסידי חב"ד)</a>
            </div>
      </div>
      

        <?php 
            $artists=readdirectory("./nigunim");
            foreach($artists as $artist){
              $albums=readdirectory("./nigunim/$artist");
            echo"
            <div class='collapsible'>
              <button type='button' class='collapsebutton' id='collapsebutton'>
                <p>$artist</p>
              </button>
              <div class='collapsedcontent' id='collapsedcontent'>";
                foreach($albums as $album){
                  $songs=readdirectory("./nigunim/$artist/$album");

                  echo"
            <div class='collapsible'>
              <button type='button' class='collapsebutton' id='collapsebutton'>
                <p>$album</p>
              </button>
              <div class='collapsedcontent' id='collapsedcontent' style='line-height:18px;'>";
              foreach($songs as $song){
                $link="/nigunim/$artist/$album/$song";
                $link=urlencode($link);
                echo "
                <a style='font-size:18;' href='/player.php?ref=$link'>$song</a><br>";
              }
            echo"
              </div>
            </div>
            ";
                }
            echo"
              </div>
            </div>
            ";
          }
        
        
        
        ?>
        <script type="text/javascript" src="collapse1.js?v=<?php echo getversion();?>"></script>
</body >


</HTML>


