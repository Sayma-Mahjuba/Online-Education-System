<?php
	include 'admin/lib/Session.php';
	Session::checkSession();
	$userid   = Session::get('userId');
  $userrole = Session::get('userRole');


	require_once("loginconn.php");
	$sql="SELECT * FROM definition WHERE Course='C'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	?><!DOCTYPE html>
<html>
<head>
	<title>
	</title>
	<link rel="stylesheet" type="text/css" href="details.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>

<div class="name">
<h1> <?php echo $row['Course'];  ?> LANGUAGE</h1>
</div>
<br>
<p><?php echo $row['Intro']; ?></p>

<table>
	<tr><th><h1>Commands</h1></th><th><h1>Explanation</h1></th>

	</tr>
<?php
	$sql1="SELECT * FROM difference_table";
	$result1=mysqli_query($conn,$sql1);
	if ($result1) {
			$i=0;
	while($row1=mysqli_fetch_array($result1)){
         echo "<tr><td><h3>".$row1['Commands']."</h3></td><td><h3>".$row1['Explanation'];
				 if (Session::get('userRole') == '1') { ?>

 										<b><a href="admin/admin/editpost_c1.php?editpostid=<?php echo $row1['id']; ?>">(Edit</a></b>
										||
									<b><a href="admin/admin/addpost_c1.php?delpostid=<?php echo $row1['id']; ?>">Add</a></b>
 											||
 										<b><a href="admin/admin/deletepost_c1.php?delpostid=<?php echo $row1['id']; ?>" onclick="return confirm('Are you sure want to DELETE?');">Delete)</a></b>
 				<?php };

         		echo"</h3></td></tr>";
     }
	 }?>
     </table>

	<p><br><br><br><b><?php echo $row['col1']; ?></b></br></p>


		<p><br><?php echo $row['col2']; ?></br></p>

<table>
	<tr><th><h1>Section</h1></th><th><h1>Description</h1></th>

	</tr>
<?php
	$sql2="SELECT * FROM structure";
	$result2=mysqli_query($conn,$sql2);
	if ($result2) {
			$i=0;
	while($row2=mysqli_fetch_array($result2)){
         echo "<tr><td><h3>".$row2['section']."</h3></td><td><h3>".$row2['description'];
				 if (Session::get('userRole') == '1') { ?>

 										<b><a href="admin/admin/editpost_c2.php?editpostid=<?php echo $row2['id']; ?>">(Edit</a></b>
										||
									<b><a href="admin/admin/addpost_c2.php?delpostid=<?php echo $row2['id']; ?>">Add</a></b>
 											||
 										<b><a href="admin/admin/deletepost_c2.php?delpostid=<?php echo $row2['id']; ?>" onclick="return confirm('Are you sure want to DELETE?');">Delete)</a></b>
 				<?php };
        echo"</h3></td></tr>";
			}
     }?>
     </table>
	 <p><br><br><br><b><?php echo $row['add1']; ?></b></p>
	 <p><br><?php echo $row['add2']; ?></br></p>
	 <p><br><?php echo $row['add3']; ?></br></p>



</header>
</body>
</html>
