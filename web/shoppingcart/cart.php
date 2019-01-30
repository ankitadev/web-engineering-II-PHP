<?php
// Start the session
session_start();
$_GET["i"] = $_SESSION["cart"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Cart</title>
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
	 //Delete
	 if ( isset($_GET["delete"]) )
	 {
	   $i = $_GET["delete"];
	   $qty = $_SESSION["qty"][$i];
	   $qty--;
	   $_SESSION["qty"][$i] = $qty;

		 //remove item if quantity is zero
		 if ($qty == 0) {
		   $_SESSION["amounts"][$i] = 0;
		   unset($_SESSION["cart"][$i]);
		 }
		 else
		 {
		   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
		 }
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
			      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
		<table>
			 <tr>
			 <th>Product</th>
			 <th width="10px">&nbsp;</th>
			 <th>Qty</th>
			 <th width="10px">&nbsp;</th>
			 <th>Amount</th>
			 <th width="10px">&nbsp;</th>
			 <th>Action</th>
			 </tr>
		 <?php
		 $total = 0;
		 foreach ( $_SESSION["cart"] as $i ) 
		 {
		 ?>
			 <tr>
			 <td><?php echo( $products[$_SESSION["cart"][$i]] ); ?></td>
			 <td width="10px">&nbsp;</td>
			 <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
			 <td width="10px">&nbsp;</td>
			 <td><?php echo( $_SESSION["amounts"][$i] ); ?></td>
			 <td width="10px">&nbsp;</td>
			 <td><a href="?delete=<?php echo($i); ?>">Delete from cart</a></td>
			 </tr>
		 <?php
		 $total = $total + $_SESSION["amounts"][$i];
		 }
		 $_SESSION["total"] = $total;
		 ?>
		 	<tr>
			 <td colspan="7">Total : <?php echo($total); ?></td>
			 </tr>
		 </table>
<div class="row">
  <div class="col-sm-8">
  </div>
  <div class="col-sm-4">
  	<button type="button" class="btn btn-danger"><a href="?reset=true">Reset Cart</a></button>
  	<button type="button" class="btn btn-success"><a href="https://thawing-mountain-32172.herokuapp.com/shoppingcart/browse.php">Keep Shopping</a></button>
  	<button type="button" class="btn btn-success">CheckOut</button>
  </div>
</div>
	
		<div class="panel panel-default">
	    <div class="panel-footer">Panel Footer</div>
  	</div>
</div>
</body>
</html>