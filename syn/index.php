<?php
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Test PHP With Database</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
</head>
<body>

	<div class="container">
	  <div class="row mt-5">

	  	<div class="col-md-3"></div>
		  <div class="col-md-6">
		  	<h3>Testing PHP With Database into cloud Server</h3>
		  	<form action="signup.php" method="post">
		  		<div class="form-group">
			      <label for="name">Name:</label>
			      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
			    </div>
			    <div class="form-group">
			      <label for="email">Email:</label>
			      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			    </div>
			    <div class="form-group">
			      <label for="pwd">Password:</label>
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
			    </div>
			    <button type="submit" name="signup" class="btn btn-success">Sign Up</button> Already have account? <a href="signin.php" class="btn btn-primary">Sign In</a>
			  </form>
		  </div>
		  <div class="col-md-3"></div>
		  </div>
	</div>


<script type="text/javascript" src="assets/jquery.js"></script>
<script type="text/javascript" src="assets/bootstrap.min.js"></script>
</body>
</html>