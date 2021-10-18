<!DOCTYPE html>
 <html>
 <head>
 	<title>Modify Data</title>
 	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
 </head>
 <body>

 	<div class= "header">
		<a href="index.php"><h1><u>Event Registration Form</u></h1></a>
	</div>
	<center>
 </body>
 </html>
 
 <?php
$con=mysqli_connect("localhost","root","","event_database");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM participant_table");

echo "<table border='1'>";

$i = 0;
while($row = $result->fetch_assoc())
{
    if ($i == 0) {
      $i++;
      echo "<tr>";
      foreach ($row as $key => $value) {
        echo "<th>" . $key . "</th>";
      }
      echo "</tr>";
    }
    echo "<tr>";
    foreach ($row as $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
