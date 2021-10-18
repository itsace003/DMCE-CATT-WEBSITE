<?php 

	require 'database.php';

	if( isset($_POST['participant_first'])) 
	{
		$participant_first = $_POST['participant_first'];
		$participant_middle = $_POST['participant_middle'];
		$participant_last = $_POST['participant_last'];

		$title = $_POST['title'];
		$story = $_POST['story'];
	}

	$add = "INSERT INTO event_table (participant_first,participant_middle,participant_last,title,story)
			VALUES ('$participant_first','$participant_middle', '$participant_last','$title','$story')";

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
		<a href="index.php"><h1><u>Student Form</u></h1></a>
	</div>

	<center><div>
		<p class = "main"><?php if($conn->query($add) === TRUE): {?>Student Details Successfully Entered...! <?php } else: {?></p>
		<p class = "main">There is some issue in entering the details <?php } endif; $conn->close(); ?></p>
	</div></center>

 </body>
 </html>