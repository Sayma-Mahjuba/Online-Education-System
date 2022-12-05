<?php
 session_start();
 
 if(isset($_SESSION['id'])){
	 require_once("header1.php");
?>
<body style="background-image:url('img/mat.jpg');">

<center><h1>Your profile is here</h1></center>
<div class="profile">
<div style="background:white;float:left;font-size:20px;width:300px;height:200px;padding:10px;border:1px solid black;text-align:center; min-height:200px;border-radius:20px">

ID: <?php echo $_SESSION['id']; ?> <br>
Name: <?php echo $_SESSION['username']; ?> <br>
Email: <?php echo $_SESSION['email']; ?> <br>
Password: <?php echo $_SESSION['password']; ?> <br>
Phone: <?php echo $_SESSION['institute']; ?> <br>
   </div>
   <div style="margin-top:20px;">
     <a href="updateProfile.php"></a>
   </div>
   
</div>

</body>

<?php
 }
 else{
	 ?>
	 <script language="Javascript">document.location.href="loginnew.php"</script>
	 <?php
 }
 require_once("footer1.php");
?>