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
	<title>Fitness Calculator</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div>

<div class="row">
  <div class="col-sm-4"><img style="width: 100%" src="background2.jpeg" alt="jpeg"></div>
  <div class="col-sm-8">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://thawing-mountain-32172.herokuapp.com/exercisegenerator/index.php">Fitness Calculator</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><span class="glyphicon glyphicon-user"></span><?= $username ?></li>
      <li><a href="signOut.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<h2 class= "signInH2">Answer questions below to find your progress!</h2>
  <form class="form-horizontal" id="mainForm" action="submit.php" method="POST">
    <div class="form-group">
<button type="button" class="btn btn-default btn-block">Medium</button>
    </div>
    <div class="form-group">
<button type="button" class="btn btn-default btn-block">Medium</button>
    </div>
        <div class="form-group">
<button type="button" class="btn btn-default btn-block">Medium</button>
    </div>
        <div class="form-group">
<button type="button" class="btn btn-default btn-block">Medium</button>
    </div>
  </form>

  </div>
</div>
</div>
</body>
</html>