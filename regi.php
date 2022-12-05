<?php

$username = filter_input(INPUT_POST, 'username');
$email  = filter_input(INPUT_POST, 'email');
$institute  = filter_input(INPUT_POST, 'institute');
$password = filter_input(INPUT_POST, 'password');

	
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_education_website";




// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO user (username,email,institute,password)
  values ('$username', '$email', '$institute', '$password')";
   
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }

}
 
?>