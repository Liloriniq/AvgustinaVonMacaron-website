<?php
$serverName="localhost";
$userName="id8680843_marinap";
$password="Nemogabezteb13";
$dbName="id8680843_requests";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);
//check the connection 
if(!$conn) {
	die("connection failed: " . mysqli_connect_error());
}

# For default timezone setup
date_default_timezone_set('UTC');
?>