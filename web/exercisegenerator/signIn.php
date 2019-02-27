<?php
session_start();

$badLogin = false;

// First check to see if we have post variables, if not, just
// continue on as always.

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	// Connect to the DB
	require_once("dbconnect.php");
	$db = get_db();

	$query = 'SELECT password FROM login WHERE username=:username';

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);

	$result = $statement->execute();

	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];

		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: index.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
		}

	}
	else
	{
		$badLogin = true;
	}
}

// If we get to this point without having redirected, then it means they
// should just see the login form.
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<div>

<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>

<div class="row">
  <div class="col-sm-4"><img style="width: 100%" src="background.jpeg" alt="jpeg"></div>
  <div class="col-sm-8">
  	<nav class="navbar navbar-inverse">
  
  <p class="navbar-text">Welcome TO The Workout Calculator</p>
</nav>
<h2>Sign In</h2>
  <form class="form-horizontal" id="mainForm" action="signIn.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="txtUser">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtUser" placeholder="Username" name="txtUser">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="txtPassword">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="txtPassword" placeholder="Password" name="txtPassword">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Sign In" />
      </div>
    </div>
  </form>



<br /><br />

Or <a href="signUp.php">Sign up</a> for a new account.


  </div>
</div>






</div>

</body>
</html>