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

<?php
require_once("dbconnect.php");
$db = get_db();

$course_id = htmlspecialchars($_GET["course_id"]);

$query = 'SELECT id, gender, age, weight, height, cal FROM calories';
$statement = $db->prepare($query);
$statement->execute();
$calo = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html class="sinInHTML">
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
 <div class="row">
  <div class="col-sm-4"><img style="width: 100%" src="gym.jpeg" alt="jpeg"></div>
  <div class="col-sm-8">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://thawing-mountain-32172.herokuapp.com/exercisegenerator/index.php">Fitness Calculator</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?= $username ?></a></li>
      <li><a href="signOut.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="col-sm-6 customMargin">
<h2 class= "signInH2">Calorie Counter</h2>
	<form method="post" class="form-horizontal" action="insert_calorie.php">
	<div class="form-group">
  <label for="sel1">Gender:</label>
  <select class="form-control" name="gender">
    <option>Male</option>
    <option>Female</option>
  </select>
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="age">Age: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="age" placeholder="Age (years)" name="age">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="weight">Weight: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="weight" placeholder="Weight (kg)" name="weight">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="height">Height: </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="height" placeholder="Height (cm)" name="height">
      </div>
    </div>
		<br><input type="Submit" class="btn btn-success" value="Calculate">
	

		<?php
			$age=$_POST['age'];
			$weight=$_POST['weight'];
			$height = $_POST['height'];
			$calories="0.0215183";
			$gender=$_POST['gender'];
		
				switch ($gender){
					case 'Female':
						$cal= 655 + (9.6 * $weight ) + (1.8 * $height) - (4.7 * $age);
						echo "<h4><small>Estimated daily metabolic rate for $gender of $age years with $height height and $weight weight is $cal calories</small></h4>";

						break;
						case 'Male':
							$cal=66 + (13.7 *$weight) + (5 * $height) - (6.8 * $age);
							echo "<h4><small>Estimated daily metabolic rate for $gender of $age years with $height height and $weight weight is $cal calories</small></h4>";
				}


foreach ($calo as $calories) {
    $date = $note['date'];
    $content = $note['content'];

    $id = $calories['id'];
    $age = $calories['age'];
    $gender = $calories['gender'];
    $weight = $calories['weight'];
    $height = $calories['height'];
    $cal = $calories['cal'];

    echo "<h4><small>Estimated daily metabolic rate for $gender of $age years with $height height and $weight weight is $cal calories</small></h4>";
}

?>

	</form>
	</div>
</div>
</div>
  </body>
</html>