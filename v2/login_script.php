<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];


// Create database connection
  $servername = "localhost";
  $username = "pbgs6397_admin";
  $pass = "childofGod1";
  $dbname = "pbgs6397_oldboys";

  $conn = mysqli_connect($servername, $username, $pass, $dbname);

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);
 

  
  //Check connection
  if(!$conn) {
   die("Connection failed:" . mysqli_error());
   }

//Selecting Database
$db_select = mysqli_select_db($conn,'pbgs6397_oldboys');

// SQL query to fetch information of registered users and finds user match.
$query = mysqli_query($conn,"select * from reg where username = '$username' AND password = '$password'");
$rows = mysqli_num_rows($query);

if ($rows == 1) {
$_SESSION['login_user'] = $username; // Initializing Session
header("location: pbgsewohimi.sch.ng/profile.php"); // Redirecting To Other Page
} 
else {
$error = "Username or Password is invalid";
}
}
}
#mysqli_close($conn); // Closing Connection


?>