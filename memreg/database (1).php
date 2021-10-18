<?php 

$servername="localhost";
$username="root";
$password="";
$database = "catt_database";
$conn = mysqli_connect($servername,$username,$password);
$sql = "CREATE DATABASE IF NOT EXISTS catt_database";
$conn->query($sql);
mysqli_select_db($conn,$database);

$create = "CREATE TABLE IF NOT EXISTS member_table (
member_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
member_first VARCHAR(30) NOT NULL,
member_middle VARCHAR(30) NOT NULL,
member_last VARCHAR(30) NOT NULL,
post VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
mobile INT(20) NOT NULL,
email VARCHAR(50) NOT NULL
)";

$conn->query($create);

 ?>