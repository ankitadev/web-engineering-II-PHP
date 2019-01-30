<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Browse shopping cart</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
//Define the products and cost
 $products = array("Naruto Shippuden Summer 2009 Collector", "Naruto Winter 2007/2008 Collector", "Naruto Collector 3", "Naruto Weekly Jump", "Naruto Winter 2007/2008 Collector", "Naruto Collector 3");
 $amounts = array("19.99", "10.99", "20.99", "5.25", "2.70", "10.90");

 if ( isset($_GET["add"]) )
   {
   $i = $_GET["add"];
   $qty = $_SESSION["qty"][$i] + 1;
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
   $_SESSION["cart"][$i] = $i;
   $_SESSION["qty"][$i] = $qty;
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
			      <li><a href="https://thawing-mountain-32172.herokuapp.com/shoppingcart/cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
		<div class="row">
			 <?php
			 for ($i=0; $i< count($products); $i++) {
			   ?>
			<div class="col-sm-4">
				<div class="thumbnail">
				<img src="magazine<?php echo([$i]); ?>.jpeg" class="img-thumbnail" alt="<?php echo($products[$i]); ?>">
				<div class="caption">
           			 <p class="text-center text-muted"> <?php echo($products[$i]); ?> </p></br>
           			 <p class="text-center text-muted">$ <?php echo($amounts[$i]); ?> </p></br>
           			 <a href="?add=<?php echo($i); ?>"><button type="button" class="btn btn-primary btn-block" action>Add to cart</button></a>
          		</div>
          	</div>
			</div>
			 <?php
			 }
			 ?>
		</div>
	
	</div>
	
</body>
</html>