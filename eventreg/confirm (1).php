<?php

if( isset($_POST['participant_first'])) 
{
$participant_first = $_POST['participant_first'];
$participant_middle = $_POST['participant_middle'];
$participant_last = $_POST['participant_last'];

@$event = $_POST['event'];

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
		<a href="index.php"><h1><u>Student Form</u></h1></a>
	</div>

	<form id="participant_form" action="confirm.php" method="POST">
		<h3>PERSONAL INFORMATION</h3>
		<center><div class = "personal_info">
			<div>STUDENT'S NAME :
				<input name = "participant_first" readonly type = "text" placeholder= "First Name" value = <?= $participant_first ?> >
				<input name = "participant_middle" type = "text" placeholder= "Middle Name" value = <?= $participant_middle ?> readonly>
				<input name = "participant_last" type = "text" placeholder= "Last Name" value = <?= $participant_last ?> readonly>
			</div>
			Event : 
				<select id = "event" name  = "event">
					<option value= '<?= $event ?>' selected><?= $event ?></option>
				</select>
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