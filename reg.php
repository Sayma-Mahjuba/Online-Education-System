<?php
session_start();
//initialising variables
$username = "";
$email ="";
$institute = "";
$password = "";

$errors = array();
//connect to db
$db = mysqli_connect('localhost','root','','online_education_website') or die("could not connect to database");

//Register users


$username = mysqli_real_escape_string($db,$_POST['username']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$institute = mysqli_real_escape_string($db,$_POST['institute']);
$password = mysqli_real_escape_string($db,$_POST['password']);

//form validation
if(empty($username)) {array_push($errors,"Username is required");}
if(empty($email)) {array_push($errors,"Email is required");}
if(empty($institute)) {array_push($errors,"institute is required");}
if(empty($password)) {array_push($errors,"Password is required");}



//check db for existing user with same username

$user_check_query = "SELECT *FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user) { //if user exists
	if($user['username'] === $username){array_push($errors,"Username already exists");}
	if($user['email'] === $email){array_push($errors,"This email id already has a registered username");}
}

//Finally, a Register user if there are no errors in the form

if(count($errors) == 0){
	$password = md5($password); //this will encrypt the password
	print $password;
	$query = "INSERT INTO user (username,email,institute,password) VALUES ('$username', '$email', '$institute','$password')";
	
	mysqli_query($db,$query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";
	header('location: login.html');
}
//Login User
if(isset($_POST['login_user'])){
	$username= mysqli_real_escape_string($db,$_POST['username']);
    $password= mysqli_real_escape_string($db,$_POST['password']);
if(empty($username)){
	array_push($errors, "Username is required");
}
if(empty($password)){
	array_push($errors, "Password is required");
}
if(count($errors)==0){
	$password=md5($password);
	$query="SELECT *FROM user WHERE username='$username' AND password='$password' ";
    $results=mysqli_query($db,$query);
	if(mysqli_num_rows($results)){
		$_SESSION['username']=$username;
		$_SESSION['success']="Logged in successfully";
		header('location: index.html');
	}else
	{array_push($errors,"Wrong username/password combination.please try again.");}
}
}

?>
