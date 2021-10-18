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
	<title>Event Registration Form</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
	<div class= "header">
		<a href="index.php"><h1><u>Event Registration Form</u></h1></a>
	</div>

	<form id="participant_form" action="confirm.php" method="POST">
		<h3>PARTICIPANT INFORMATION</h3>
		<center><div class = "personal_info">
			<div>PARTICIPANT'S NAME :
				<input  name = "participant_first" type = "text" placeholder= "First Name" value = <?php if(isset($_POST['participant_first'])): ?> <?=  $participant_first ?> <?php endif; ?> >
				<input name = "participant_middle" type = "text" placeholder= "Middle Name" value = <?php if(isset($_POST['participant_middle'])): ?> <?=  $participant_middle ?> <?php endif; ?> >
				<input name = "participant_last" type = "text" placeholder= "Last Name" value = <?php if(isset($_POST['participant_last'])): ?> <?=  $participant_last ?> <?php endif; ?> >
			</div>
				Event : 
				<select id = "event" name  = "event">
					<option value="" disabled selected>SELECT YOUR OPTION</option>
					<option value = "WEB GAMES">WEB GAMES</option>
					<option value = "TREASURE HUNT">TREASURE HUNT</option>
					<option value = "BLACKOUT">BLACKOUT</option>
					<option value = "NIGHTOUT">NIGHTOUT</option>
					<option value = "GAME OF DRONES">GAME OF DRONES</option>
					<option value = "CODE WARS">CODE WARS</option>
					<option value = "VISION 2050">VISION 2050</option>
					<option value = "MEETING ROOM">MEETING ROOM</option>
				</select>
			<div>
					MOBILE :
					<input name = "mobile" type = "text" placeholder="mobile" value = <?php if(isset($_POST['mobile'])): ?> <?=  $mobile ?> <?php endif; ?> >
					EMAIL-ID : 
					<input name = "email" id = "email" type = "text" placeholder= "email" value =  <?php if(isset($_POST['email'])): ?> <?=  $email ?> <?php endif; ?> >
			</div>
		</div></center>


		<center><div class = "button">
			<input type="submit" id="submit" value= "CONFIRM"></form>
			<button value="DISPLAY" formaction = "display1.php" >DISPLAY</button>
		</div></center>
</body>

</html>