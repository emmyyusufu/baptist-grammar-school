<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=ISO-8859-1");


function get_data() 
{
  $connect = mysqli_connect("localhost", "pbgs6397_admin", "childofGod1", "pbgs6397_oldboys");
  $query = "SELECT * FROM reg";
  $result = mysqli_query($connect, $query);
  $members_data = array();
  while($row = mysqli_fetch_array($result))
  {
      $members_data[] = array(
          'firstname'        =>    $row["firstname"],
          'lastname'         =>    $row["lastname"],
          'email'            =>    $row["email"],
          'profession'       =>    $row["profession"],
          'country'          =>    $row["country2"],
          'date'             =>    $row["date"],
          'phone'            =>    $row["phone"],
          'photo'            =>    $row["photo"]     
      );
  }
  
  return json_encode($members_data);
}



print_r(get_data());


?>