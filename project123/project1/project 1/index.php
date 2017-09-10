<?php
   include("config.php");
   session_start();

     $error="";
     $f=0;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT UsernameID FROM UserName WHERE username = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
        // session_register("myusername");
        // $_SESSION['login_user'] = $myusername;
          $f=0;
         header("location: welcome.php");
         
      }else {$f=1;
           $error = "Your Login Name or Password is invalid";
        // header("location: welcome.php");
        // header("location:index.php");
      }
   }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login/Logout animation concept</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    
    
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body background="airplane-wallpaper-5.jpg">

<div class = "content">
<ul>
  <li><a href="#home"><font size=4.5>Home</font></a></li>
  <li><a href="#news"><font size=4.5>Company</font></a></li>
  <li><a href="#contact"><font size=4.5>Contact</font></a></li>
  <li style="float:right"><a class="active" href="#about"><font size=4.5>About</font></a></li>
</ul>


<div class="cont">   
    <img src="Capture.png"> 
  <div class="demo">

    <div class="login">

      <div class="login__check"></div>
      <div class="login__form" >
        <form  method="POST" action="">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" name="username" placeholder="username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="password" placeholder="password"/>
        </div>
        <button id="button" type="submit" class="login__submit" >Sign in</button>
        <?php 
        if($f==1){
          echo $error;
        }

         ?>
        </form>
        <p class="login__signup">Don't have an account? &nbsp;<a>Sign up</a></p>
      </div>
    </div>
    
    </div>
  
 </div>
</div>  

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><!/script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
