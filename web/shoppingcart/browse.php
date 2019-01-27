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
 $products = array("product A", "product B", "product C");
 $amounts = array("19.99", "10.99", "20.99");

 if ( !isset($_SESSION["total"]) ) {

  $_SESSION["total"] = 0;

  for ($i=0; $i< count($products); $i++) {
   $_SESSION["qty"][$i] = 0;
   $_SESSION["amounts"][$i] = 0;
 }
}

//---------------------------
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


//---------------------------
//Add
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
			      <li>Naruto Magaziiine</li>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="https://thawing-mountain-32172.herokuapp.com/shoppingcart/browse.php">Home</a></li>
			      <li><a href="https://thawing-mountain-32172.herokuapp.com/shoppingcart/about.php">About Us</a></li>
			    </ul>
			 	<ul class="nav navbar-nav navbar-right">
			      <li><a href="https://thawing-mountain-32172.herokuapp.com/shoppingcart/about.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="thumbnail">
				<img src="magazine1.jpeg" class="img-thumbnail" alt="Naruto Shippuden Summer 2009 Collector">
				<div class="caption">
           			 <p class="text-center text-muted">Naruto Shippuden Summer 2009 Collector</p>
           			 <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
          		</div>
          	</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
				<img src="magazine2.jpeg" class="img-thumbnail" alt="Naruto Winter 2007/2008 Collector">
				<div class="caption">
	           		 <p class="text-center text-muted">Naruto Winter 2007/2008 Collector</p>
	           		 <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
	         	</div>
	         </div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
				<img src="magazine3.jpeg" class="img-thumbnail" alt="Naruto Collector 3">
				<div class="caption">
	            	<p class="text-center text-muted">Naruto Collector 3</p>
	            	<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
	         	 </div>
	         	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="thumbnail">
				<img src="magazine4.jpeg" class="img-thumbnail" alt="Naruto Shippuden Summer 2009 Collector">
				<div class="caption">
           			 <p class="text-center text-muted">Naruto Shippuden Summer 2009 Collector</p>
           			 <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
          		</div>
          	</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
				<img src="magazine5.jpeg" class="img-thumbnail" alt="Naruto Winter 2007/2008 Collector">
				<div class="caption">
	           		 <p class="text-center text-muted">Naruto Winter 2007/2008 Collector</p>
	           		 <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
	         	</div>
	         </div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
				<img src="magazine6.jpeg" class="img-thumbnail" alt="Naruto Collector 3">
				<div class="caption">
	            	<p class="text-center text-muted">Naruto Collector 3</p>
	            	<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
	         	 </div>
	         	</div>
			</div>
		</div>
	<div class="panel panel-default">
	    <div class="panel-footer">Panel Footer</div>
  	</div>
	</div>
	
</body>
</html>