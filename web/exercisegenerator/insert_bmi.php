<?php

$weight = htmlspecialchars($_POST['weight']);
$height = htmlspecialchars($_POST['height']);

require_once("dbconnect.php");
$db = get_db();

// Get the Course from the DB
$query = 'INSERT INTO calories(weight, height) VALUES(:weight, :height)';
$statement = $db->prepare($query);
$statement->bindValue(':weight', $weight, PDO::PARAM_STR);
$statement->bindValue(':height', $height, PDO::PARAM_STR);
$result = $statement->execute();

//echo "$result";
flush();
header("Location:caloriecounter.php?weight=$weight");
die();
?>