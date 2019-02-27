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
<h2 class= "signInH2">BMI Calculator</h2>
<?php
    $course_name = $course['name'];
    $course_code = $course['course_code'];
    echo "<h1>Notes for course:  $course_code - $course_name</h1>";
?>
    <form action="insert_bmi.php" method="post">
        <input type="date" name="date" /><br />
        <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
        <textarea name="content"></textarea><br />
        <input type="submit" value="Insert Note">
    </form>




    <form class="form-horizontal" action="insert_bmi.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="txtUser">Weight(lb): </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtUser" placeholder="Username" name="txtUser">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="txtPassword">Height(eg:6.4): </label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="txtPassword" placeholder="Password" name="txtPassword">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Insert Note" />
      </div>
    </div>
  </form>




<?php

foreach ($notes as $note) {
    $date = $note['date'];
    $content = $note['content'];

    echo "<p>Date: $date</p>";
    echo "<p>$content</p>";
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
</body>
</html>