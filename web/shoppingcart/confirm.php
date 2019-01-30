<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm Purchase</title>
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
	unset($_SESSION["qty"]); //The quantity for each product
	   unset($_SESSION["amounts"]); //The amount from each product
	   unset($_SESSION["total"]); //The total cost
	   unset($_SESSION["cart"]); //Which item has been chosen
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
			      <li><a href="https://thawing-mountain-32172.herokuapp.com/shoppingcart/cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
		<h1><small>Thank You <?php echo $_POST["firstName"]; ?> for Shopping with us</small></h1>
		<h2><small>Your Items will be sent to</small></h2>
		<h2><small>
		<?php echo $_POST["address"]; ?><br>
		<?php echo $_POST["city"]; ?><br>
		<?php echo $_POST["country"]; ?><br>
		<?php echo $_POST["state"]; ?><br>
		<?php echo $_POST["zipCode"]; ?><br></small></h2>
</div>
</body>
</html>