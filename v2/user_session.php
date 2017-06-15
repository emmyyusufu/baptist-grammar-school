<?php
session_start();// Starting Session

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$servername = "localhost";
  $username = "pbgs6397_admin";
  $pass = "childofGod1";
  $dbname = "pbgs6397_oldboys";

  // Create database connection
  $conn = mysqli_connect($servername, $username, $pass, $dbname);

// Selecting Database
$db_select = mysqli_select_db($conn,'pbgs6397_oldboys');



// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql = mysqli_query($conn,"select username from reg where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];

if(!isset($login_session)){
mysqli_close($conn); // Closing Connection

header('Location: pbgsewohimi.sch.ng/index.html'); // Redirecting To Home Page
}

?>