<?php 

$servername="localhost";
$username="root";
$password="";
$database = "nightout_database";
$conn = mysqli_connect($servername,$username,$password);
$sql = "CREATE DATABASE IF NOT EXISTS nightout_database";
$conn->query($sql);
mysqli_select_db($conn,$database);

$create = "CREATE TABLE IF NOT EXISTS event_table (
participant_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
participant_first VARCHAR(30) NOT NULL,
participant_middle VARCHAR(30) NOT NULL,
participant_last VARCHAR(30) NOT NULL,
title VARCHAR(20) NOT NULL,
story VARCHAR(500) NOT NULL
)";

$conn->query($create);

 ?>