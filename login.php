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

    <title>Login | Alumni Association 2016</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

   <style>
        #loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 130px;
  height: 130px;
  margin: -75px 0 0 -75px;
  border: 8px solid rgb(247, 247, 247);
  border-radius: 50%;
  border-top: 8px solid #1E344C;
  width: 100px;
  height: 100px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
}


        ul.nav-tabs li a {
            border-bottom-color: #FECC0A;
            border-top: 0px transparent;
            border-left: 0px;
            border-bottom: 0px;
            border-right: 0px;
        }
        
        ul.nav-tabs li a:hover {
            background-color: transparent;
            border: 1px #FECC0A;
        }
        
        p, h1, h2, h3, h4, h5, h6 {
            color: #1E344C;
        }
        
        /* BEGIN PROPREITARY STYLES*/
        html, body {
    font-family: 'Lato', sans-serif;
}

h1, h2, h4, h5, h6 {
    font-family: 'Lato' !important;
    font-weight: 800; 
     }


.navbar-default {
    background-color: #FFF;
    border-color: #FFF;
}

@media (max-width: 425px) {
    .navbar-default {
         background-color: #fff !important;
    }
    .change {
        color: #000 !important;
    }
} 

.navbar {
    border-radius: 0px;
    margin-bottom: 0px;
    border: 1px solid transparent;
    
    -webkit-box-shadow: 0 0px 2px 0px #999;
    -moz-box-shadow: 0 0px 2px 0px #999;
    box-shadow: 0 0px 2px 0px #999;
    
    margin: 0px 0px 0px 0px;
}

.navbar-default .navbar-header .navbar-brand {
    color: #FECC0A !important;
    text-transform: uppercase;
    font-weight: 300;
}

.navbar-default .navbar-nav>li>a {
    color: #1E344C;
    text-transform: uppercase;
    font-weight: 300;
    font-size: 16px;
}

.navbar-default .navbar-nav>li>a:hover {
    color: #1E344C !important;
}

.navbar-default .navbar-nav>li>a:active {
    color: #1E344C !important;
}

.navbar-default .navbar-nav>li>a.here {
    color: #FECC0A !important;
}


span.icon-bar {
    background: #FECC0A !important;
}

.rounded {
    border-radius: 10px;
}

p {
    font-size: 16px !important;
}


/*FOR INDEX PAGE*/

.header {
    height: 580px;
    background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/school.png);
    background-size: cover;
    background-repeat: no-repeat;
}

.welcome_note {
    position: relative;
    top: 250px;
    left: 12.5%;
    min-height: auto;
}

@media (max-width: 425px) {
    .welcome_note {
        position: relative;
        top: 200px;
        left: auto;
    }
    .welcome_note button {
        padding: 4px 12px;
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .welcome_note {
        left: auto;
    }
}


.welcome_note h3 {
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 4px;
    display: inline-block;
    line-height: 1.25;
}

.welcome_note button {
    background-color: #FECC0A !important;
    height: 45px;
    min-width: 150px;
    text-transform: uppercase;
    margin: 10px 10px 10px 0px;
    border-radius: 0px;
    font-weight: 500;
    border-color: #FECC0A !important;
}

.welcome_note button:hover {
    background-color: transparent;
}

.welcome_note button:active {
    background: transparent;
}

.welcome_note button a {
    color: rgb(30, 52, 76);
    text-decoration: none;
    font-weight: 700;
}


.talk3 .row button {
    background-color: #FECC0A !important;
    height: 45px;
    min-width: 150px;
    text-transform: uppercase;
    margin: 10px 10px 10px 0px;
    border-radius: 0px;
    font-weight: 500;
    border-color: #FECC0A !important;
}

.talk3 .row button:hover {
    background-color: transparent;
}

.talk3 .row button:active {
    background: transparent;
}

.talk3 .row button a {
    color: rgb(30, 52, 76);
    text-decoration: none;
    font-weight: 700;
}




.showcase .row {
    padding: 25px 25px 25px 25px;
    text-align: justify; 
}

.talk0 .row {    
    padding: 25px 25px 25px 25px;
    text-align: justify; 
}

.talk1 .row {
    padding: 25px 25px 25px 25px;
    text-align: justify;  
}

.talk2 .row {
    padding: 25px 25px 25px 25px;
    text-align: justify; 
}

.talk3 .row {
    text-align: center; 
}




.talk0 .row p {    
    margin-bottom: 20px;
}

.talk1 .row p {
    margin-bottom: 20px;
}

.talk2 .row p {
    margin-bottom: 20px;
}

.talk3 .row p {
    margin-bottom: 20px;
}


/*Index page footer area*/
.footer .row {
    padding: 40px 0px 40px 0px;
}

/*END INDEX PAGE*/


/*iOS SCROLLBAR*/
/* Let's get this party started */
::-webkit-scrollbar {
    width: 5px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.25); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #1E344C; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: #1E344C; 
}


.text {
    color: #1E344C;
}


/*ABOUT US PAGE*/
.jumbotron {
    height: 425px;
    background: linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/Membership_Quote2-2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

.top_bar1 h1 {
    text-transform: uppercase;
    font-weight: 700;
    color: #fff;
    line-height: 50px;
    
}

.top_bar1 p {
    color: #e5e5e5;
}

.copy hr {
    border: 2px solid #FECC0A;
    width: 75px;
}

hr.short {
    border: 2px solid #FECC0A !important;
    width: 50px;
    display: inline-block!important;
    margin-top: 5px;
}

.top_bar1 .copy {
    position: relative;
    top: 100px;
    text-align: center;
}

.team img {
    width: 300px;
    height: 300px;
}




/*PEOPLE PAGE*/
.p2 {
    height: 425px;
    background: linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/Minority-Student-Hero-1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}






/*EVENTS PAGE*/
.p3 {
    height: 425px;
    background: linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/Volunteer-Landing-Page-Hero.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

/*JOIN PAGE*/
.p4 {
    height: 425px;
    background: linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/Student-Recruitment-Hero.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

/*CONTACT US PAGE*/
.p5 {
    height: 425px;
    background: linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/street.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

.msg {
    height: 150px;
    display: block;
    width: 100%;
    resize: none;
}

        .loginform {
            background-color: red;
            position: relative;
            
            
        }
        
        /* END PROPREITARY STYLES*/
        
        /* FORM STYLES*/

.login-page {
  width: 400px;
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
  font-size: 14px;
}
.form button {
  text-transform: uppercase;
  outline: 0;
  background: #FECC0A;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #1E344C;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
    font-weight: 700;
}
.form button:hover,.form button:active,.form button:focus {
  background: #FECC0A;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #FECC0A;
  text-decoration: none;
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
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
        
body {
    padding: 0px 0px 0px 0px !important;
    margin: 0px 0px 0px 0px !important;
  background: #1E344C; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #1E344C, #274D76);
  background: -moz-linear-gradient(right, #1E344C, #274D76);
  background: -o-linear-gradient(right, #1E344C, #274D76);
  background: linear-gradient(to left, #1E344C, #274D76);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; 
    background-image: url(img/geometry.png);
    background-color: #274D76;
    background-blend-mode: color-burn;
}
        
        /* END STYLES*/
        


   </style>


  </head>
  
  
  <body onload="myFunction()">

<div id="loader"></div>

  <div style="display:none;" id="myDiv" class="animate-bottom">
    
        
     <div class="login-page">
             <div class="form" style="border-radius: 5px; margin: 0 auto;">

            <form action="profile.php" method="POST" class="login-form">              
             <h1>PBGS Alumni Login</h1>
               <input type="text" placeholder="username"/ name="username">
               <input type="password" placeholder="password"/ name="password">
               <button type="submit" name="submit" class="btn btn-default btn-lg">Submit</button>
               <p class="message"><a href="http://pbgsewohimi.sch.ng" style="color: #b3b3b3">Home</a> | <a href="#" class="toggle">Admin login</a></p>
            </form>

            <form class="register-form">
               <h1>Admin Login</h1>
               <input type="text" placeholder="name"/>
               <input type="password" placeholder="password"/>
               <button>login</button>
               <p class="message"><a href="http://pbgsewohimi.sch.ng" style="color: #b3b3b3">Home</a> | <a href="#" class="toggle">Alumni login</a></p>
             </form>
            </div>
        </div>
    

    
    
    
   
   </div>
    
    
    
    
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="scripts/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="scripts/custom.js"></script>

    <script>
            var myVar;

       function myFunction() {
          myVar = setTimeout(showPage, 3000);
         }

       function showPage() {
          document.getElementById("loader").style.display = "none";
          document.getElementById("myDiv").style.display = "block";
          }
    </script>

    <script>
       $('.message a.toggle').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
    </script>
        
  </body>
</html>
