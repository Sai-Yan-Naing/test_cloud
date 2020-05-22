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
	  <h2>Stacked form</h2>
	  <form action="/action_page.php">
	    <div class="form-group">
	      <label for="email">Email:</label>
	      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Password:</label>
	      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
	    </div>
	    <div class="form-group form-check">
	      <label class="form-check-label">
	        <input class="form-check-input" type="checkbox" name="remember"> Remember me
	      </label>
	    </div>
	    <button type="submit" class="btn btn-primary">Submit</button>
	  </form>
	</div>


<script type="text/javascript" src="assets/jquery.js"></script>
<script type="text/javascript" src="assets/bootstrap.min.js"></script>
</body>
</html>