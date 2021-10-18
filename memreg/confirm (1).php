<?php

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

?>



<!DOCTYPE html>
<html>
<head>
	<title>Confirm Form</title>
	<link rel="stylesheet" type="text/css" href="assets/confirm_style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
	<div class= "header">
		<a href="index.php"><h1><u>CATT Member Registration Form</u></h1></a>
	</div>

	<form id="participant_form" action="confirm.php" method="POST">
		<h3>PERSONAL INFORMATION</h3>
		<center><div class = "personal_info">
			<div>STUDENT'S NAME :
				<input name = "member_first" readonly type = "text" placeholder= "First Name" value = <?= $member_first ?> >
				<input name = "member_middle" type = "text" placeholder= "Middle Name" value = <?= $member_middle ?> readonly>
				<input name = "member_last" type = "text" placeholder= "Last Name" value = <?= $member_last ?> readonly>
			</div>
			<div>
					DESIGNATION :
					<input name = "post" type = "text" placeholder="post" value =  <?= $post ?> readonly>
			</div>
			<div>
					USERNAME :
					<input name = "username" type = "text" placeholder="Username" value =  <?= $username ?> readonly>
					PASSWORD : 
					<input name = "password" id = "email" type = "text" value =  <?= $password ?> placeholder= "password" readonly>
			</div>
			<div>
					MOBILE :
					<input name = "mobile" type = "text" placeholder="mobile" value =  <?= $mobile ?> readonly>
					EMAIL-ID : 
					<input name = "email" id = "email" type = "text" value =  <?= $email ?> placeholder= "email" readonly>
			</div>
		</div></center>

		<center><div class = "button">
			<input type="submit" formaction = "add.php" value= "SUBMIT">
			<input type="submit" formaction = "index.php" value="EDIT CHANGES">
		</div></center>

	</form>
</body>
</html>