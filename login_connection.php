<?php
$dbhost="localhost";  // hostname
$dbuser="root"; // mysql username
$dbpass=""; // mysql password
$db="online_education_website"; // database you want to use
 

 
if( isset($_POST["username"]) and isset($_POST["password"]) ) {
		$conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($conn) );
		$username=$_POST["username"];
		$password=$_POST["password"];
 
		$ret=mysqli_query( $conn, "SELECT * FROM user WHERE username='$username' AND password='$password' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);
		if(!$row) {
			include('login.html');
			echo 'Wrong Username and password';
		}
		else {
	        session_start();
	        $_SESSION['username'] = $username;
			header("refresh:2; url=index.html");
			exit;
		}
}
?>