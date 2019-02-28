<!DOCTYPE html>
<html class="sinInHTML">
<head>
	<title>Sign In</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
</head>

<body>
<div>

<div class="row">
  <div class="col-sm-4"><img style="width: 100%" src="background2.jpeg" alt="jpeg"></div>
  <div class="col-sm-8">
  	<nav class="navbar navbar-inverse">
  
  <p class="navbar-text">Welcome to The Fitness Calculator</p>
</nav>
<h2 class= "signInH2">Sign Up</h2>



  <form class="form-horizontal" id="mainForm" action="createAccount.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="txtUser">Username: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtUser" placeholder="Username" name="txtUser">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="txtPassword">Password: </label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="txtPassword" placeholder="Password" name="txtPassword">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Create Account" />
      </div>
    </div>
  </form>
  </div>
</div>
</div>

</body>
</html>