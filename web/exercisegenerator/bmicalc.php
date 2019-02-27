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
<div class="col-sm-6">
<h2 class= "signInH2">BMI Calculator</h2>
    <form action="insert_bmi.php" method="post">
        <input type="date" name="date" /><br />
        <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
        <textarea name="content"></textarea><br />
        <input type="submit" value="Insert Note">
    </form>




    <form class="form-horizontal" action="insert_bmi.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="weight">Weight: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="weight" placeholder="Weight (lb)" name="weight">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="height">Height: </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="height" placeholder="Height (eg : 6.4)" name="height">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Insert Note" />
      </div>
    </div>
  </form>




<?php

foreach ($bmi as $bmi) {
    $weight = $bmi['weight'];
    $height = $bmi['height'];
    $weightin = $weight * 12;
    $bmicalc = ($height / ($weightin * $weightin)) * 703;


echo "Today is " . date("Y/m/d") . "<br>";
    echo "<p>Your BMI is: $bmicalc</p>";
}

?>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Weight Category</th>
        <th>BMI Range</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Underweight</td>
        <td> < 18.5 </td>
      </tr>
      <tr>
        <td>Normal Weight</td>
        <td> 18.5 - 24.9 </td>
      </tr>
      <tr>
        <td>Overweight</td>
        <td>  25.0 - 29.9 </td>
      </tr>
            <tr>
        <td>Grade I Obesity</td>
        <td>  30.0 - 34.9 </td>
      </tr>
            <tr>
        <td>Grade II Obesity</td>
        <td>  35.0 - 39.9 </td>
      </tr>
            <tr>
        <td>Grade III Obesity</td>
        <td>  > 40 </td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</body>
</html>