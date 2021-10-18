<?php 

	require 'database.php';

	if( isset($_POST['member_first'])) 
	{
		$member_first = $_POST['member_first'];
		$member_middle = $_POST['member_middle'];
		$member_last = $_POST['member_last'];

		$post = $_POST['post'];

		$username = $_POST['username'];
		$password = $_POST['password'];

		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
	}


	$add = "INSERT INTO member_table (member_first,member_middle,member_last,post,username,password,mobile,email)
			VALUES ('$member_first','$member_middle', '$member_last','$post','$username','$password',$mobile,'$email')";

	mysqli_select_db($conn,$database);
	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Confirmation</title>
 	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
 </head>
 <body>

 	<div class = "header">
		<a href="index.php"><h1><u>Event Registration Form</u></h1></a>
	</div>

	<center><div>
		<p class = "main"><?php if($conn->query($add) === TRUE): {?>Student Details Successfully Entered...! <?php } else: {?></p>
		<p class = "main">There is some issue in entering the details <?php } endif; $conn->close(); ?></p>
	</div></center>

 </body>
 </html>