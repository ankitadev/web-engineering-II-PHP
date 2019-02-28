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

$query = 'SELECT id, weight, height, bmical FROM bmi';
$statement = $db->prepare($query);
$statement->execute();
$calculation = $statement->fetchAll(PDO::FETCH_ASSOC);

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
  <?php
function bmicalc($height,$weight)
{
  $height = $height/100;
  $height = $height * $height;
  $BMI = $weight / $height;
  $BMI = round($BMI,2);
  return $BMI;
}
function category($BMI)
{
  $result = '';
  if($BMI < 18.5){$result = 'Underweight';}
  if(18.5 <= $BMI && $BMI < 24.9){$result = 'Normal weight';}
  if(25.0 <= $BMI && $BMI < 29.9){$result = 'Overweight';}
  if(30.0 <= $BMI && $BMI < 34.9 ){$result = 'Grade I Obesity';}
  if(35.0 <= $BMI && $BMI < 39.9 ){$result = 'Grade II Obesity';}
  if($BMI >= 40){$result = 'Grade III Obesity';}  
  return $result;
}
?>
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
<h2 class= "signInH2">BMI Calculator</h2>


    <form class="form-horizontal" method="post" action="insert_bmi.php">
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
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Calculate" />
      </div>
    </div>
  </form>
  <?php
      $height = $_POST['height'];
      $weight = $_POST['weight'];
      $bmical = bmicalc($height,$weight);
      $typecalc = category($bmical);
      echo "<h4><small>BMI of $weight weight and $height height is $bmical which falls under $typecalc</small></h4>";

    foreach ($calculation as $bmi) {
    $id = $bmi['id'];
    $weight = $bmi['weight'];
    $height = $bmi['height'];
    $bmical = $bmi['bmical'];
    $bmical = bmicalc($height,$weight);
    $typecalc = category($bmical);

    echo "<h4><small>BMI of $weight weight and $height height is $bmical which falls under $typecalc</small></h4>";
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