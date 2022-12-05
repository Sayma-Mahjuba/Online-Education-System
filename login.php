<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "online_education_website";

$conn = mysqli_connect($host, $user, $password, $db);

$uname = $_POST['username'];
$password = $_POST['password'];
$sql = "select username,password from user where username='" . $uname . "'AND password='" . $password . "'
	 limit 1";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) == 1) {
	header("location:index1.html");
	exit();
} else {
	echo "you have entered incorrect password";
	exit();
}