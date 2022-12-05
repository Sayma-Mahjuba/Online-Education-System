<?php
 session_start();
 
 require_once("loginconn.php");
 
?>
<?php
  if(isset($_POST['submit'])){
  $sqlSelect="SELECT * FROM user WHERE username='$_POST[username]'and password='$_POST[password]'";
  $records=mysqli_query($conn,$sqlSelect);
  $count= mysqli_num_rows($records);
  if($count==1){
	  $field=mysqli_fetch_array($records);
		   $_SESSION['id']=$field['id'];
		   $_SESSION['username']=$field['username'];
		   $_SESSION['email']=$field['email'];
		   $_SESSION['password']=$field['password'];
		   $_SESSION['institute']=$field['institute'];
		   
		   echo"<script language=Javascript>document.location.href='admin/admin/viewprofile.php'</script>";
		   
  }
  else{
	  echo"failed";
  }
  
  
  
  }
?>





<head>
<title> LOGIN FORM</title>
<link rel="stylesheet" href="login.css">
<body>
<div class="loginbox">

<form action="" method="POST">
<p>Username</p>
<input type="text" name="username" placeholder="Enter Username" value=""required>
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password" value=""required>
<br>
<input type="submit" name="submit" value= "Login">
<br>
<a href="#">Lost your password?</a><br>
<a href ="#">Don't have an account?</a>
<a href ="registration.html">Don't have an account?</a>
</div>
</form>
</body>

