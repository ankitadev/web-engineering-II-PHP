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
	<?php
	//Reset
	 if ( isset($_GET['reset']) )
	 {
	 if ($_GET["reset"] == 'true')
	   {
	   unset($_SESSION["qty"]); //The quantity for each product
	   unset($_SESSION["amounts"]); //The amount from each product
	   unset($_SESSION["total"]); //The total cost
	   unset($_SESSION["cart"]); //Which item has been chosen
	   }
	 }
	 ?>
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
		<form class="form-inline" action="confirm.php" method="post">
  <div>
    <label for="firstName">First Name:</label>
    <input type="firstName" class="form-control" name="firstName">
  </div></br>
  <div class="form-group">
    <label for="lastName">Last Name:</label>
    <input type="lastName" class="form-control" name="lastName">
  </div></br>
   <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email">
  </div></br>
   <div class="form-group">
    <label for="address">Address:</label>
    <input type="address" class="form-control" name="address">
  </div></br>
   <div class="form-group">
    <label for="city">City:</label>
    <input type="city" class="form-control" name="city">
  </div></br>
   <div class="form-group">
    <label for="state">State:</label>
    <input type="state" class="form-control" name="state">
  </div></br>
   <div class="form-group">
    <label for="country">Country:</label>
    <input type="country" class="form-control" name="country">
  </div></br>
   <div class="form-group">
    <label for="zipCode">Zip Code:</label>
    <input type="zipCode" class="form-control" name="zipCode">
  </div></br>
  <a href="?reset=true"><button type="submit" class="btn btn-success">Confirm Purchase</button></a>
</form>
</div>
</body>
</html>