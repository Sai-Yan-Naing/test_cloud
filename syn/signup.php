<?php

	require "db/db.php";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pswd = $_POST['pswd'];

	echo $name."<br>".$email."<br>".$pswd."<br>";

// 	$sql = "INSERT INTO users (name, email, pswd)
// 		VALUES ('$name', '$email', '$pswd')";

// 		if (mysqli_query($conn, $sql)) {
// 		  echo "New record created successfully";
// 		} else {
// 		  echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
// 		}
// mysqli_close($conn);
?>

<!-- hello -->
<!-- ($name, $email, $pswd) -->