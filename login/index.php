<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
	<div class= "header">
		<a href="index.php"><h1><u>Login</u></h1></a>
	</div>

	<form id="participant_form" action="confirm.php" method="GET">
			<div>
					USERNAME :
					<input name = "username" type = "text" placeholder="Username" value = <?php if(isset($_POST['username'])): ?> <?=  $user ?> <?php endif; ?> >
			</div>
			<div>
					PASSWORD : 
					<input name = "password" id = "email" type = "password" placeholder= "Password" value =  <?php if(isset($_POST['password'])): ?> <?=  $pass ?> <?php endif; ?> >
			</div>
		</div></center>


		<center><div class = "button">
			<input type="submit" id="submit" value= "SUBMIT"></form>
		</div></center>
</body>

</html>


