<?php
// $servername = "localhost";
$servername = "47.56.81.246";
$username = "root";
$password = "";
$dbname = "php_to_cloud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
	// echo "Connection successfully";
}

?>