<!DOCTYPE html>

<?php

 $servername = "localhost";
  $username = "pbgs6397_admin";
  $pass = "childofGod1";
  $dbname = "pbgs6397_oldboys";

  // Create database connection
  $conn = mysqli_connect($servername, $username, $pass, $dbname);

  //Check connection
  if(!$conn) {
   die("Connection failed:" . mysqli_error());
}


 if(isset($_POST['submit'])) {
	 
	 //getting text data from input fields
	 $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
	 $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
	 $email = mysqli_real_escape_string($conn, $_POST['email']);
	 $phone = mysqli_real_escape_string($conn, $_POST['phone']);
	 $msg   = mysqli_real_escape_string($conn, $_POST['message']);
	 
	 $sql = "INSERT INTO contact (firstname, lastname, email, phone, message) 
	        VALUES ('$fname', '$lname', '$email', '$phone', '$msg')";
			  
	mysqli_select_db($conn, "pbgs6397_oldboys");
 $result = mysqli_query($conn, $sql);
 
 if($result) {
  
  echo "<script>alert('Message sent successfully, thank you for contacting us!')</script>";
 }
 
	
 }
 mysqli_close($conn);

?>







<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="Wed, 04 Jan 2017 13:00:00 GMT" />


    <title>Contact Us | Alumni Association 2016</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

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


 </style>
 



  </head>
  
  
  <body onload="myFunction()">

<div id="loader"></div>

  <div style="display:none;" id="myDiv" class="animate-bottom">
    
        <nav class="navbar navbar-default navbar-fixed-top" style="height: 52px !important;">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand change" href="index.html">PBGS Ewohimi </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    <li><a class="change" href="index.html">Home</a></li>
                    <li><a class="change" href="about.html">About</a></li>
                    <li><a class="change" href="people.html">People</a></li>
                    <li><a class="change" href="join.php">Join</a></li>
                    <li><a class="change here" href="contactus.php">Contact Us</a></li>
                    <li><a class="change" href="login.php">Login</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    
    
<div class="jumbotron p5 top_bar1" id="startchange">
         <div class="container">
             <div class="copy">
                 <h1>Contact Us</h1>
             </div>             
        </div>   
</div>
    
    
    <div class="talk2 text">
       <div class="container">
         <div class="row">
          
            <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-6">
                <h1>Contact form</h1>
                <hr class="short">
                </div>
               
            </div>
           
            <div class="col-xs-12 col-md-8">
              
               <form action="" method="post">
                     <div class="col-xs-12 col-md-6">
                             <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Firstname">
                             </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                            </div>
                     </div>
                     
                     <div class="col-xs-12 col-md-6">
                             <div class="form-group">
                            <label for="Email">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                             </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="phonenumber">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                            </div>
                     </div><br>
                      
                     <div class="col-xs-12 col-md-12">
                           <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" placeholder="Message" class="msg"></textarea>
                          </div><br>
                          
                          <button type="submit" name="submit" class="btn btn-default">Submit</button>
                     </div>                      
              </form>
            </div>
                        
            <div class="col-xs-12 col-md-4">
                      <p>You can also reach us through the following Phone numbers</p>
<p></p>
                       <ul>
<li><p>+16176699667</p></li>
<li><p>+2348033885086</p></li>

<li><p>+2348022235918</p></li>
<li><p>+2348033235594</p></li>


<li><p>+2348023522196</p></li>
<li><p>+447944929002</p></li>



</ul>            </div>
            
            
         </div>
       </div>    
    </div>
    
                
    
     <div class="footer" style="background-color: #1E344C;">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4">
                        <ul style="color: #fff; text-align: center; text-decoration: none; list-style: none;">
                            <li><p>Facebook</p></li>
                            <li><p>Twitter</p></li>
                            <li><p>Blog</p></li>
                        </ul>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                        <ul style="color: #fff; text-align: center; text-decoration: none; list-style: none;">
                            <li><p>Instagram</p></li>
                            <li><p>Skype</p></li>
                            <li><p>Forum</p></li>
                        </ul>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                        <ul style="color: #fff; text-align: center; text-decoration: none; list-style: none;">
                            <li><p>Join</p></li>
                            <li><p>Contact</p></li>
                            <li><p>Map</p></li>
                        </ul>
                </div>
 
                <div class="col-xs-8 col-sm-8 col-md-8 col-xs-push-2 col-sm-push-2 col-md-push-2">
                    <p style="color: #fff; text-align: center; text-decoration: none;">Copyright &copy; Pilgrim Baptist Grammar School, Ewohimi 2016 | Designed and developed by <a href="https://twitter.com/emmyyusufu">Yusufu Emmanuel </a>and supervised by Dr. A. U. Adoghe</p>
                </div>

            </div>
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



        
  </body>
</html>
