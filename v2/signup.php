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


    <title>Hivebrite</title>

    


    <!--Import Google Icon Font-->
      


    <!-- Bootstrap -->
    <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">    


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">    

    
    <script src="https://use.fontawesome.com/7de8fbdfda.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Miscellaneous -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    
    
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
 

   
<style>
        
/* FORM STYLES*/

.login-page {
  padding: 0 0 0;
  margin: 15px 0 15px 0;;   
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 800px;
  margin: 0 auto;
  padding: 25px;
  text-align: left;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 5px;
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
    
}
        
        /* END STYLES*/
        
     <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">

div.login-page form label {
        text-align: left !important;
    }
    

</style>


  </head>
  
  
  <body style="background-color: #FAFAFA; background-image: url(img/topography.png);">

        
     <div class="login-page">
             <div class="form" style="border-radius: 5px; margin: 0 auto;">             
             <div class="row">
                 <div class="col-xs-12 col-md-12">
              
               <form action="" method="post" enctype="multipart/form-data">
                     
                     <h1 style="text-align: center;margin-top: 0px;
    margin-bottom: 30px;">Signup form</h1>

                    
                     <div class="col-xs-12 col-md-6">
                             <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" class="form-control" name="firstname" required>
                             </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" name="lastname" required>
                            </div>
                     </div>
                     
                     <div class="col-xs-12 col-md-6">
                             <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="" required>
                             </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="" required>
                            </div>
                     </div>

                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="profession">Profession</label>
                            <input type="text" class="form-control" name="profession" placeholder="" required>
                            </div>
                     </div>

                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="date">Year of Graduation</label>
                            <input type="text" class="form-control" name="date" placeholder="" required>
                            </div>
                     </div>
                       
                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="country2">Country</label>
                            <select id="country2" name="country2" class="form-control"><option>select country</option></select>
                            </div>
                     </div>

                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="address">Town/Current location</label>
                            <input type="text" class="form-control" name="address" placeholder="">
                            </div>
                     </div>


                     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="available">When can you be reached?</label>
                            <input type="text" id="timepicker" name="time" placeholder="" class="form-control">
                            </div>
                     </div>
						
		     <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label for="photo">Upload a headshot photo</label>
                            <input type="file" name="photo" accept="image/*" class="form-control" required>	
                            </div>
                     </div>

                     <div class="col-xs-12 col-md-6">
                             <div class="form-group">
                            <label for="username">Portal Username</label>
                            <input type="text" class="form-control" name="username" placeholder="username" required>
                             </div>
                     </div>

                     <div class="col-xs-12 col-md-6">
                             <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="firstname" placeholder="password" required>
                             </div>
                     </div>				
		     

                     <div style="padding: 10px !important;" class="col-xs-12 col-md-12"></div>
 
                        
                     <div class="col-xs-12 col-md-12" style="text-align: center;">
                               <button type="submit" name="submit" class="btn btn-default btn-lg">Submit</button>
                     </div>       
            </form>
            </div>
            </div>
            </div>
            </div>
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="scripts/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="scripts/script.js"></script>
    
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="scripts/countries.js"></script>    

    
    <script src="js/countries.js"></script>
    <script>
      $( function() {
      $( "#datepicker" ).datepicker();
        } );
    </script>
    <script language="javascript">
          populateCountries("country2");
    </script>
  
  
  
  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
	<script>
	  $("#timepicker").timepicker();
     </script> 
 
  
  

    <script>
       $('.message a.toggle').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
    </script>
        
        
  </body>
</html>
