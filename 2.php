<?php
include("config.php");
      session_start();

     $error="";
     $f="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $pass=mysqli_real_escape_string($db,$_POST['password']);
      $pass1=mysqli_real_escape_string($db,$_POST['repassword']);
      $gender=mysqli_real_escape_string($db,$_POST['gender']);
      $mobile=mysqli_real_escape_string($db,$_POST['phone']);
      
     // $sql = "SELECT UsernameID FROM UserName WHERE username = '$myusername' and pass = '$mypassword'";
      if($pass==$pass1){
      $sql = "INSERT INTO profile values('$username','$email','$name','$mobile','$gender')";
      $sql1="INSERT INTO LOGIN values('$username','$pass')";
      if(!mysqli_query($db,$sql)){
       
        $f="<br>Username not avialable";
      }
      else if(!mysqli_query($db,$sql1)){
         $f="Username not avialable";
        }else{
     

      header("location: index.php");

      }
      }else{
        $error="<br> Password not same";
      }
      
      
   }





?>
<html>
<head> 
<title>background</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Romanesco' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="messages.js"></script>
<style type ="text/css">
*{
left:0;
right:0;
top:0;
}

body{
	font-family: 'Dancing Script', Georgia, Serif;
  overflow: hidden;
}

.content 
{
position:absolute;
width:100%;
height:100%;
background-color: rgba(0,0,0,0.7);

}
ul {
    list-style-type: none;
    margin-top: 0px;
    font-size:20px;
    padding:9px;
    overflow: hidden;


   
    opacity:0.8;
    color:#fff;
    border-color: #C0C0C0;
    border-style: solid;
    border-width: 0px 0px 1px 0px;
}

li {
    float: left;

}
.f
{
color:red;

}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 15px 30px;
    text-decoration: none;
   
}

/* Change the link color to #111 (black) on hover */
    li a:hover {
    
	color:#fff;
  border-radius:3px 3px 3px 3px;
  
  border-color: #fff;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
}
.active 
{
    background-color: #111;
	color:white;
	
}
.content ul img{
 
  -webkit-transition: -webkit-transform .8s ease-in-out;
  transition: transform 0s ease-in-out;
  height:48px;
  
  
}
.content ul img:hover {
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.container img{
  position: absolute;
  margin-top: 100px;
  height:500px;
}
.container h1{
  font-size: 60px;
  left:60px;
  top:85px;
  color:#DAA520;
  font-family: 'Dancing Script', cursive;
  position:absolute;

}
.form p{
  color:#fff;
}
</style>
</head>
<body background="green.jpg">

<div class = "content">
<ul><li><img src="vapture.png"></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="company.html">Company</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="about.html">About</a></li>
</ul>
<div class="container">
<h1>Airyatra.com</h1>
			<div  class="form"><img src="vapture.png">
    		<form id="contactform"  method="POST" action="" > 
              <p class="contact" ><label for="name">Name</label></p> 
          <input id="name" name="name" placeholder="Name" required="" tabindex="1" type="text">

    			   <p class="contact"><label for="username">Create a username</label></p> 
          <input id="username" name="username" placeholder="username" required="" tabindex="2" type="text">
          <div class="f"><?php 
               echo $f;
               ?> 
               </div> 

               <p class="contact"><label for="email">Email</label></p> 
          <input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                
    			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required=""><?php
               echo $error;
                ?> 
        
               <fieldset>
                 <label>Birthday</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth">
                  <option value="">Month</option>
                  <option  value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>
                  </label>
                 </select>    
                <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required=""></label>
                <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required=""></label>
              </fieldset>
  
            <select class="select-style gender" name="gender">
            <option value="select">i am..</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="others">Other</option>
            </select><br><br>
            
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 

</div>      
</div>

</div>
</body>
</html>