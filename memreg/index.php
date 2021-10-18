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
	<title>Member Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/all-re-style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
	
	<div class="jumbotron jumbotron-fluid jumbotron-fluid-4" style="text-align: center" id="fifth">
        
      <div class="container">
	<div class= "header">
		<a href="index.php"><h1><u>CATT Member Registration Form</u></h1></a>
	</div>

	<form action="confirm.php" method="POST">
		<h3>PERSONAL INFORMATION</h3>
		<center><div class = "personal_info">
			<div>MEMBER'S NAME :
				<input  name = "member_first" type = "text" placeholder= "First Name" value = <?php if(isset($_POST['member_first'])): ?> <?=  $member_first ?> <?php endif; ?> >
				<input name = "member_middle" type = "text" placeholder= "Middle Name" value = <?php if(isset($_POST['member_middle'])): ?> <?=  $member_middle ?> <?php endif; ?> >
				<input name = "member_last" type = "text" placeholder= "Last Name" value = <?php if(isset($_POST['member_last'])): ?> <?=  $member_last ?> <?php endif; ?> >
			</div>
			<div>DESIGNATION:
				<input name = "post" type = "text" placeholder="Post" value = <?php if(isset($_POST['post'])): ?> <?=  $post ?> <?php endif; ?> >
			</div>
			<div>
					USERNAME :
					<input name = "username" type = "text" placeholder="Username" value = <?php if(isset($_POST['username'])): ?> <?=  $username ?> <?php endif; ?> >
					PASSWORD : 
					<input name = "password" id = "email" type = "password" placeholder= "Password" value =  <?php if(isset($_POST['password'])): ?> <?=  $password ?> <?php endif; ?> >
			</div>
			<div>
					MOBILE :
					<input name = "mobile" type = "text" placeholder="Mobile" value = <?php if(isset($_POST['mobile'])): ?> <?=  $mobile ?> <?php endif; ?> >
					EMAIL-ID : 
					<input name = "email" id = "email" type = "text" placeholder= "email" value =  <?php if(isset($_POST['email'])): ?> <?=  $email ?> <?php endif; ?> >
			</div>
		</div></center>


		<center><div class = "button">
			<input type="submit" id="submit" value= "CONFIRM"></form>
			<button value="DISPLAY" formaction = "display1.php" >DISPLAY</button>
		</div></center>
				
		</div></div>
</body>

</html>