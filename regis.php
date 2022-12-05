<?php
  define('db_server','localhost');
  define('db_username','root');
  define('db_password','');
  define('db_database','online_education_website');
  $conn=mysqli_connect(db_server,db_username,db_password,db_database);
  
  if($conn){
      echo"Succeccfully connected to database <br>";
  }
else{
    echo"Failed to connect to database";
   }

$username=$_POST['username'];
$email=$_POST['email'];
$institute=$_POST['institute'];
$password=$_POST['password'];
$sql="INSERT INTO `user` (`id`, `username`, `email`, `institute`, `password`) VALUES (NULL, 'sayma', 'saymamahjuba@gmail.com', 'cuet', '1234')";
$var1=$_POST['username'];
$var2=$_POST['email'];
$var3=$_POST['institute'];
$var4=$_POST['password'];
$sql2="INSERT INTO `user` (`id`, `username`, `email`, `institute`, `password`) VALUES (NULL, '$var1', '$var2', '$var3', '$var4')";

  $result=mysqli_query($conn,$sql2);
  if($result)
  {
  	echo"Yeah it works";
  }
  else{
  	echo"can not insert data into database";
  }
  
//header("refresh:2; url=login.html");
?>