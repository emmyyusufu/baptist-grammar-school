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
	 $prof = mysqli_real_escape_string($conn, $_POST['profession']);
	 $thedate = mysqli_real_escape_string($conn, $_POST['date']);
	 $location = mysqli_real_escape_string($conn, $_POST['country2']);
	 $address = mysqli_real_escape_string($conn, $_POST['address']);
	 $thetime = mysqli_real_escape_string($conn, $_POST['time']);
         $username = mysqli_real_escape_string($conn, $_POST['username']);
	 $password = mysqli_real_escape_string($conn, md5($_POST['password']));
	 
	 
	 //getting the user images
	 $photo = $_FILES['photo']['name'];
	 $photo_tmp = $_FILES['photo']['tmp_name'];
	 
	 move_uploaded_file($photo_tmp, "photos/$photo");

 #$sql = "insert into reg (firstname, lastname, email, phone, profession, date, country2, address, time, photo, username, password) 
    # values ('$fname', '$lname', '$email', '$phone', '$prof', '$thedate', '$location', '$address', 
             # '$thetime', '$photo', '$username', '$password')";
 
  $db_select = mysqli_select_db($conn,'pbgs6397_oldboys');

  $qry = mysqli_query($conn,"insert into reg (firstname, lastname, email, phone, profession, date, country2, address, time, photo, username, password) 
     values ('$fname', '$lname', '$email', '$phone', '$prof', '$thedate', '$location', '$address', 
              '$thetime', '$photo', '$username', '$password')");

  #$result = mysqli_query($conn,$sql); 

 
 if($qry) {
  
/* Prevent duplicate submissions 
if (isset($_COOKIE['FormSubmitted']))
{
    show_error('You may only submit this form once per session!');
}
*/

  //Return mail to members after registration

$subject = "Successful Registration";   //subject of sent email
$headers = "From: admin@pbgsewohimi.sch.ng \r\n";
$headers .= "Reply-To: admin@pbgsewohimi.sch.ng \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message.='<div style="width:550px; background-color:#CC6600; padding:15px; font-weight:bold;">';
$message.='Successful registration mail';
$message.='</div>';
$message.='<div style="font-family: Arial;">You have registered.<br/>';
$message.='Now click on the below link to login using the username and password you chose at registration.<br/>';
$message.='http://pbgsewohimi.sch.ng/login.php<br/>Thank you.';
$message.='</div>';
$message.='</body></html>';

mail($email,$subject,$message,$headers);

 /* Set a cookie to prevent duplicate submissions 
setcookie('FormSubmitted', '1');
*/
 
}

echo "<script>alert('Thank you. Please check your mailbox now for follow up message.')</script>";
echo "<script>window.open('http://pbgsewohimi.sch.ng/index.html','_self')</script>";

/*else {
     echo "<script>alert('Sorry, your registration details not sent. Try again.')</script>";
     echo "<script>window.open('http://pbgsewohimi.sch.ng/join.php','')</script>";
  */

}

  //End of mail script
 
mysqli_close($conn);

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


    <title>Join Us | Alumni Association 2016</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">

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
              <a class="navbar-brand change" href="index.html">PBGS Ewohimi  </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="change" href="index.html">Home</a></li>
                    <li><a class="change" href="about.html">About</a></li>
                    <li><a class="change" href="people.html">People</a></li>
                    <li><a class="change here" href="join.php">Join</a></li>
                    <li><a class="change" href="contactus.php">Contact Us</a></li>
                    <li><a class="change" href="login.php">Login</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    
    
<div class="jumbotron p4 top_bar1" id="startchange">
     <div class="container">
             <div class="copy">
                 <h1>Join Us</h1>
             </div>             
        </div>    
</div>  
    
     <div class="talk2 text">
       <div class="container">
         <div class="row">
          
            <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-6">
                <h1>Registration form</h1>
                <hr class="short">
                </div>
               
            </div>
           
            <div class="col-xs-12 col-md-8">
              
               <form action="" method="post" enctype="multipart/form-data">

                     <div class="col-xs-12 col-md-6">
                             <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Firstname" required>
                             </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Lastname" required>
                            </div>
                     </div>
                     
                     <div class="col-xs-12 col-md-6">
                             <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                             </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                            </div>
                     </div>

                     <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                            <label for="profession">Profession</label>
                            <input type="text" class="form-control" name="profession" placeholder="" required>
                            </div>
                     </div>

                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="date">Year of Graduation</label>
                            <input type="text" class="form-control" name="date" id="datepicker" placeholder="Pick a date/year" required>
                            </div>
                     </div>
                       
                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="country2">Country</label>
                            <select id="country2" name="country2" class="form-control" required><option>Select Country</option></select>
                            </div>
                     </div>

                     <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                            <label for="address">Town/Current location</label>
                            <input type="text" class="form-control" name="address" placeholder="e.g Ikorodu" required>
                            </div>
                     </div>


                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="available">When can you be reached?</label>
                            <input type="text" id="timepicker" name="time" placeholder="choose a time" class="form-control" required>
                            </div>
                     </div>
						
		     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="photo">Upload a picture (headshot preferably)</label>
                            <input type="file" name="photo" accept="image/*" class="form-control" required>	
                            </div>
                     </div>

                     <div class="col-xs-12 col-md-6">
                             <div class="form-group">
                            <label for="username">Portal Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                             </div>
                     </div>

                     <div class="col-xs-12 col-md-6">
                             <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                             </div>
                     </div>				
		     

                     <div style="padding: 10px !important;" class="col-xs-12 col-md-12"></div>
 
                        
                     <div class="col-xs-12 col-md-12">
                               <button type="submit" name="submit" class="btn btn-default btn-lg">Submit</button>
                     </div>                  
                                         


                                           
              </form>
            </div>
                        
            
            
            
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
	
	
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="scripts/countries.js"></script>

	<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="scripts/custom.js"></script>
	<script src="scripts/countries.js"></script>
	
	<script language="javascript">
          populateCountries("country2");
    </script>
	
  
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
	<script>
	
	  $("#timepicker").timepicker();
	
     </script> 

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
