<?php

$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];

$servername="localhost";
$username="root";
$password="";
$dbname="catt_database";

$conn=mysqli_connect($servername,$username,$password,$dbname);


if(!$conn){
die("CONNECTION FAILED:".mysqli_connect_error($conn));
}
else{
	echo "connection sucess "."</br>";
}

$sql="SELECT * from member_table WHERE username = '$user'and password = '$pass'";
$result=mysqli_query($conn,$sql);
if(!$result){
die("CONNECTION FAILED:".mysqli_connect_error($conn));
}

$rowcount=mysqli_num_rows($result);

if($rowcount>0)
{
	header('Location:main.html');
}

else
{
	echo "LOGIN CREDENTIALS NOT FOUND";

	}
?>