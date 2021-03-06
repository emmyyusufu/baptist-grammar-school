<?php
include('login_script.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="Wed, 04 Jan 2017 13:00:00 GMT" />


    <title>Hivebrite</title>

    


    <!--Import Google Icon Font-->
      


    <!-- Bootstrap -->
    <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">    

   


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Miscellaneous -->
    
    
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
   
   
<style>
        
/* FORM STYLES*/

.login-page {
  padding: 8% 0 0;
  margin: auto;   
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 400px;
  margin: 0 auto;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 15px;
}
.form button {
  text-transform: uppercase;
  outline: 0;
  background: #5cb85c;
  width: 183px !important;
  height: 50px !important; 
  border-radius: 5px;    
  border: 0;
  padding: 15px;
  color: #fff;
  font-size: 15px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: ;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 15px;
}
.form .message a {
  color: #333;
  text-decoration: underline;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 15px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
        
body {
    background-image: url(img/topography.png);
}
        
        /* END STYLES*/
        
     <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
    

</style>


  </head>
  
  
  <body style="background-color: #FAFAFA;">

        
     <div class="login-page">
             <div class="form" style="border-radius: 5px; margin: 0 auto;">
            <form action="profile.php" method="POST" class="login-form">              
             <h1>Alumni Login</h1>
             
              <span style="padding: 15px;"></span>
              
               <input type="text" placeholder="username"/ name="username">
               
               <input type="password" placeholder="password"/ name="password">
               
               <button>login</button>
               <p class="message"><a href="#" class="toggle">Admin login</a></p>
            </form>
            <form class="register-form">
               <h1>Admin Login</h1>
               
               <span style="padding: 15px;"></span>
               
               <input type="text" placeholder="name"/>
               <input type="password" placeholder="password"/>
               <button>login</button>
               <p class="message"><a href="#" class="toggle">Alumni login</a></p>
             </form>
            </div>
        </div>
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="scripts/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="scripts/script.js"></script>


    <script>
       $('.message a.toggle').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
    </script>
        
  </body>
</html>
