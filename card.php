<!DOCTYPE html>
<HTML dir="rtl">
  <head>
    <?php include "standardhead.php"?>
    

  </head>
  
  
  <body style="text-align:center;grid-template-rows:1fr auto 1fr;">
      <TITLE>כרטיס הקהל</TITLE>
    
    <div class='card' style="<?php  if($_POST['agree'] == 'agreed'){echo "transform: translate(0px,70vh);animation-name:insert;";} ?>">
    <p>בס"ד</p>
    <H1 style='text-align:center;'>כרטיס הקהל</H1>
    <form action="/card.php" method="Post" autocomplete="off">
      <input type="text" name="name" class='field' placeholder='שם יהודי מלא' <?php echo "value='".$_POST['name']."'";?>>
      <br>
      <hr>
      <input type="text" name="mname" class='field' placeholder='שם האם' <?php echo "value='".$_POST['mname']."'";?>>
      <br>
      <hr>
      <input type="text"  name="lname" class='field' placeholder='שם משפחה' <?php echo "value='".$_POST['lname']."'";?>>
      <br>
      <hr>
      <input type="email"  name="email" class='field' placeholder='אימיל' <?php echo "value='".$_POST['email']."'";?>>
      <br>
      <hr>

      <div style='text-align:right;display:inline;'>
        <input type="checkbox"  name="agree" value='agreed'>
        <label for="agree">אני מסכים לסדר קינוסי הקהל עם החברים שלי</label> 
      </div>
      <br>
      <div style='text-align:right;display:inline;'>
        <input type="checkbox"  name="emails" value='agreed'>
        <label for="emails">רצוני לקבל חומר הזכרות ודו"חות באימיל</label>
      </div>
      <br>


      <?php


    if(isset($_POST['name']) && !empty($_POST['name'])){
      $valid=TRUE;
      $name = $_POST['name'];
      $mname = $_POST['mname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $agree = $_POST['agree'];
      $emails = $_POST['emails'];

      #echo $username ;
      #echo $email ;
      #echo $password ;
      #echo $repassword;
      #echo $pp ;
      
      #if($password != $repassword){echo "<p style='color:red;'>passwords do not match!<p>"; $valid = False;}
      if($agree != 'agreed'){echo "<p style='color:red;'>agree to take part to continue<p>"; $valid = False;}
      #if(!(unique($email,'email'))){echo "<p style='color:red;'>This email is already registered with an account!<p>"; $valid = False;}
      #if(!(unique($username,'username'))){echo "<p style='color:red;'>This username is already in use!<p>"; $valid = False;}
      



      if ($valid){
        #data needed for the new account
        $date=date("Y/m/d");
        $hash = md5( rand(0,1000) );

        #creating connection to the database
        $database = "hakhel";
        $conn = mysqlconnect($database);
        $sql = "INSERT INTO cards (hash,time,name,mname,lname,email,agree)VALUES(
          '$hash','$date','$name','$mname','$lname','$email','$agreee'
        )";
        $conn->query($sql);
        $conn->close();
        
        #give feedback to the user
        echo "קבלנו את הכרטיס!";
        echo "<a href='home.php'>חוזר לדף הבית</a>";
        #send verification email
        $from = "MatehHakhelTLV";
        $subject = "Hakhel registration";
        $message = "We have recieved your Hakhel Card!";
        $headers = "From:" . $from;
        mail($email,$subject,$message, $headers);
        #for testing print url to signup page
        #echo "<a>$link</a>";
        
      }
    }
    ?>
      
    
</div>
<input type='submit' value='שלח' class='slot'></button>
</form>

<div style='background-color:rgb(139,20,42);width:100%;height:100%;z-index:3;'>

</div>
    
    


</body >


</HTML>


