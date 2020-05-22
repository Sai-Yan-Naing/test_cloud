<?php
// $servername = "localhost";
$servername = "localhost";
$username = "fly-sai";
$password = "welcome123";
$dbname = "php_to_cloud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
	echo "Connection successfully";
}

?>