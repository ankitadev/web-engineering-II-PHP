<?php

$weight = htmlspecialchars($_POST['weight']);
$height = htmlspecialchars($_POST['height']);
$bmical = htmlspecialchars($_POST['bmical']);

require_once("dbconnect.php");
$db = get_db();

// Get the Course from the DB
$query = 'INSERT INTO bmi(weight, height, bmical) VALUES(:weight, :height, :bmical)';
$statement = $db->prepare($query);
$statement->bindValue(':weight', $weight, PDO::PARAM_STR);
$statement->bindValue(':height', $height, PDO::PARAM_STR);
$statement->bindValue(':bmical', $bmical, PDO::PARAM_STR);
$result = $statement->execute();

//echo "$result";
flush();
header("Location:caloriecounter.php?weight=$weight");
die();
?>