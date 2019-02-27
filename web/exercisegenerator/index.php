<?php
// Start the session
session_start();
echo $_SESSION['add'];
if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: signIn.php");
	die(); // we always include a die after redirects.
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Workout Calculator</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
		<div class="page-header">
			<nav class="navbar navbar-inverse navbar-fixed-top">
			  <div class="container-fluid">
			   <div class="navbar-header">
			      <a class="navbar-brand" href="https://thawing-mountain-32172.herokuapp.com/exercisegenerator/index.php">Workout Generator</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="https://thawing-mountain-32172.herokuapp.com/exercisegenerator/about.php">About Us</a></li>
			    </ul>
			 	<ul class="nav navbar-nav navbar-right">
			 	<li><a href="signOut.php"><span class="glyphicon glyphicon-user"></span> <?= $username ?></a></li>
			      <li><a href="signOut.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			      
			    </ul>
			  </div>
			</nav>
		</div>
    <div class="row">
  <div class="col-sm-4">
    <img src="gym.jpeg" alt="jpeg">
  </div>
  <div class="col-sm-8">
    <h1><small>Answer questions below to find the best workout to help you reach your goals!</small></h1>
    <form class="form-horizontal" action="confirm.php" method="post">
      <h3><small>Your fitness level?</small></h3>
  <div class="form-check">
  <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
  <label class="form-check-label" for="materialUnchecked">Intermediate</label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
  <label class="form-check-label" for="materialUnchecked">Advanced</label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
  <label class="form-check-label" for="materialUnchecked">Material unchecked</label>
</div>
<h3><small>Type of workout</small></h3>
  <div class="form-check">
  <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
  <label class="form-check-label" for="materialUnchecked">Cardio</label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
  <label class="form-check-label" for="materialUnchecked">Lifting</label>
</div>
</form>

  </div>
</div>



		
</div>
</body>
</html>