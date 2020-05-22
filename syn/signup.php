<?php

	require "db/db.php";

	if(isset($_POST['signin']))
	{

		$email = $_POST['email'];
		$pswd = $_POST['pswd'];
		echo "<br>".$email."<br>".$pswd."<br>";


		$sql = "SELECT * FROM users where email= '$email' and pswd = '$pswd'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    echo "Name: " . $row["name"]. "<br> - Email: " . $row["email"]. "<br> Sign IN successfully<br>";
		  }
		} else {
		  echo "email and password invilid";
		}
	}else
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pswd = $_POST['pswd'];

		echo $name."<br>".$email."<br>".$pswd."<br>";

		$sql = "INSERT INTO users (name, email, pswd)
			VALUES ('$name', '$email', '$pswd')";

			if (mysqli_query($conn, $sql)) {
			  echo "Sign Up Successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
			}
	}


	
mysqli_close($conn);
?>
<a href="index.php">Back</a>
<!-- hello -->
<!-- ($name, $email, $pswd) -->