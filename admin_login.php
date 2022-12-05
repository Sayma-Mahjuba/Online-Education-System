<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"online_education_website");

if(isset($_REQUEST["submit"]))
{
	$username=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	$query=mysqli_query($con,"select * from admin where username='$username' && password='$password'");
	$rowcount=mysqli_num_rows($query);
	
	if($rowcount==true)
	{
	echo "your username and password is correct";
	header("refresh:2; url=index1.html");
	}
	
else
{
echo "your username and password is wrong";
}  
}
?>