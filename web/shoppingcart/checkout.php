<?php
// Start the session
session_start();
echo $_SESSION['add'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
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
			      <a class="navbar-brand" href="https://thawing-mountain-32172.herokuapp.com/shoppingcart/browse.php">Naruto Magaziiiine</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="https://thawing-mountain-32172.herokuapp.com/shoppingcart/browse.php">Home</a></li>
			    </ul>
			 	<ul class="nav navbar-nav navbar-right">
			      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
		<form class="form-horizontal" action="confirm.php" method="post">
  <div class="form-group">>
    <label class="control-label col-sm-2" for="firstName">First Name:</label>
    <div class="col-sm-4">
    <input type="firstName" class="form-control" name="firstName">
</div>
  </div></br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastName">Last Name:</label>
    <div class="col-sm-4">
    <input type="lastName" class="form-control" name="lastName">
</div>
  </div></br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-4">
    <input type="email" class="form-control" name="email">
</div>
  </div></br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-6">
    <input type="address" class="form-control" name="address">
</div>
  </div></br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="city">City:</label>
    <div class="col-sm-4">
    <input type="city" class="form-control" name="city">
</div>
  </div></br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="state">State:</label>
    <div class="col-sm-4">
    <input type="state" class="form-control" name="state">
</div>
  </div></br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="country">Country:</label>
    <div class="col-sm-4">
    <input type="country" class="form-control" name="country">
</div>
  </div></br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="zipCode">Zip Code:</label>
    <div class="col-sm-2">
    <input type="zipCode" class="form-control" name="zipCode">
</div>
  </div></br>
   <div class="col-sm-4">
  <button type="submit" class="btn btn-success">Confirm Purchase</button>
</div>
</form>
</div>
</body>
</html>