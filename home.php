<!DOCTYPE html>
<HTML>
  <head>
    <?php include "standardhead.php"?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="mivtzoim,chabad,lubavitch,jewish,mitzva,hakhel,tel aviv" />
    <meta name="description" content="תכנס לעולם של הקהל" />

  </head>
  
  
  <body style="height:100vh;text-align:center;background-image: url('bg.png');display:grid;grid-template-rows:auto 1fr 1fr auto;">
  
    <TITLE> הקהל </TITLE>
    <div class='splash' style=''>
      <div>
        <H1 style="font-size:120px;font-family: 'Open Sans', sans-serif;margin:0px;line-height:100px;">הקהל</H1>
        <img src="chatzotzrah4.png" width='200px' style=' -webkit-transform: scaleX(-1);
  transform: scaleX(-1);'>
      </div>
    </div>

    <div class='header'>

        <div class='clock' style='display:block;'>
    <?php
        $database = "hakhel";
        $conn = mysqlconnect($database);
        $sql = "SELECT COUNT(*) FROM `cards`;";
        $result = $conn->query($sql);
        $conn->close();
        while($row = $result->fetch_assoc()) {
            $a=$row['COUNT(*)'];
            }
        $length=strlen($a);
        $clockstring=str_repeat("0",5-$length).$a;
        $digits=str_split($clockstring);
        foreach($digits as $digit){
            echo "<div class='digit'>".$digit."</div>";
        }
    ?>
    

        
    </div>
        
    
        <button class='button' onclick="window.location.href = 'https://hakheltlv.com/card.php';">הרשמה</button>
        
    </div>



            <button type="button" class="buttona" id='popupbutton'>
                <p style='margin:0px;'>?מה זה הקהל</p>
            </button>

            <div class="popup" id='popup'>
            <div class='popupcard'>
            <span style='justify-self:left;text-align:left;' class="material-symbols-outlined" id='close'>close</span>
                <div class='title'>
                    <p>פעם בשבע שנים</p>
                </div>

                <p>
השנה הזאת, תשפ"ג, היא שנת 'הקהל', העוקבת שנת השמיטה. בעבר, בשנה זו, הונהגה התקהלות המונית של עם ישראל לבית המקדש, בהתאם לצו התורה:
(דברים לא\ב)
  הַקְהֵ֣ל אֶת־הָעָ֗ם הָֽאֲנָשִׁ֤ים וְהַנָּשִׁים֙ וְהַטַּ֔ף וְגֵרְךָ֖ אֲשֶׁ֣ר בִּשְׁעָרֶ֑יךָ לְמַ֨עַן יִשְׁמְע֜וּ וּלְמַ֣עַן יִלְמְד֗וּ וְיָֽרְאוּ֙ אֶת־יְהֹוָ֣ה אֱלֹהֵיכֶ֔ם וְשָֽׁמְר֣וּ לַעֲשׂ֔וֹת אֶת־כׇּל־דִּבְרֵ֖י הַתּוֹרָ֥ה הַזֹּֽאת׃
כלומר: במוצאי כל שנה שביעית, שנת השמיטה, ביום השני של חג הסוכות, מצווהלהקהיל את כל עם ישראל לבית המקדש ולהאזין למלך הקורא קטעים מספר התורה. 
המטרה
לעורר את הלב העם ליראת שמים ולהתחזקות בתורה ומצוותיה.
המעמד הייחודי היה מעין שחזור של מתן תורה, ובמרכזו המלך שהקריא קטעים נבחרים מספר התורה באזני העם כולו.
                </p>
                <div class='title'>
                    <p>בימינו</p>
                </div>
                <p>
הרבי מלובביץ' קרא להקדיש את שנת 'הקהל' להתכנסויות ברוח מצוות 'הקהל', ובהן לעודד התחזקות בקיום המצוות. זו גם הייתה מטרתה של המצווה המקורית.

                </p>
                <div class='title'>
                    <p>אז מה לעשות?</p>
                </div>
                <p>
כל אחד ואחת יכולים להיות 'מלך' בסביבתם, כלומר להפוך למנהיגים ובעלי השפעה בחיק המשפחה, בחוג הידידים, בין העמיתים לעבודה, ועוד. להיות אלו שנותנים את הטון ומציפים את האור סביבנו. אפשר ליזם התכנסויות, להשמיע דברי תורה וחיזוק האמונה. מומלץ לשלב מצוה משותפת, לדוגמה נתינת צדקה.
                </p>
                <div class='title'>
                    <p>כרטיס הקהל</p>
                </div>
                <p>
                  
הרבי גם הציע שכל מי שמוכן ליטול חלק בהגשמת הרעיון של 'הקהל', שיחתום על 'כרטיס הקהל', כדי לבטא את מחוייבותו לכך.

את/ה מוזמן/נת למלא את הכרטיס להלן כדי להצטרף לרבבות יהודים בכל העולם השותפים לפעילות זו, למען כל אחד ואחת בפרט ולמען עם ישראל בכלל. 
                
                </p>
            </div>
      </div>
      


      <div class="popup" id='popup1' style='text-align:right;'>
      <span style='' class="material-symbols-outlined" id='close1'>close</span><br>
      <p>
      הִנְנִי מֵבִיא אוֹתָם מֵאֶרֶץ צָפוֹן
וְקִבַּצְתִּים מִיַּרְכְּתֵי אָרֶץ
בָּם עִוֵּר וּפִסֵּחַ הָרָה וְיֹלֶדֶת יַחְדָּו
קָהָל גָּדוֹל יָשׁוּבוּ הֵנָּה:
      </p>
      <audio controls>
      <source src="laufer.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio><br>
      <audio controls>
      <source src="bfriedman.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio><br>
      <audio controls>
      <source src="afriedhup.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio><br>
      <audio controls>
      <source src="kids.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio><br>
      <audio controls>
      <source src="kids5748.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio><br>


      </div>



        <div class='apps'>
      <div class='app_container'>
        <span></span>
        <button class='app' onclick="window.location.href='https://www.he.chabad.org/3227210'"><span class="material-symbols-outlined">
video_library
</span></button>
        <p class='app_title'>ויאדו</p>
      </div>
      <div class='app_container' id='popupbutton1'>
        <span></span>
        <button class='app'><span class="material-symbols-outlined">
library_music
</span></button>
        <p class='app_title'>אדיו</p>
      </div>
      <div class='app_container'>
        <span></span>
        <button class='app' onclick="window.location.href='sichos.php'"><span class="material-symbols-outlined">
menu_book
</span></button>
        <p class='app_title'>שיחות</p>
      </div>
      <div class='app_container'>
        <span></span>
        <button class='app' onclick="window.location.href='https://he.chabad.org/library/article_cdo/aid/841782'"><span class="material-symbols-outlined">
library_books
</span></button>
        <p class='app_title'>חומר</p>
      </div>
      <div class='app_container'>
        <span></span>
        <button class='app'><span class="material-symbols-outlined">
contact_support
</span></button>
        <p class='app_title'>תתקשר</p>
      </div>
      <div class='app_container'>
        <span></span>
        <button class='app'><span class="material-symbols-outlined">
more_horiz
</span></button>
        <p class='app_title'>עוד</p>
      </div>
     
      </div>


    <div class='footer' onclick="window.location.href='/donate.php'">
        <P style='font-size:12px;margin:2px;'>מטה הקהל תל אביב - יפו שע"י תלמידים השלוחים ישיבת חזון אליהו חב"ד ליובאוויטש</P>
        <span class="material-symbols-outlined" style='grid-column:2;align-self:center;'>monetization_on</span>
    </div>
    

<script type="text/javascript" src="collapse.js?v=<?php echo '123';?>"></script>
</body >


</HTML>


