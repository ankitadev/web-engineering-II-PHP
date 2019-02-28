<?php

$id = htmlspecialchars($_POST['id']);
$gender = htmlspecialchars($_POST['gender']);
$age = htmlspecialchars($_POST['age']);
$weight = htmlspecialchars($_POST['weight']);
$height = htmlspecialchars($_POST['height']);
$cal = htmlspecialchars($_POST['cal']);

require_once("dbconnect.php");
$db = get_db();

// Get the Course from the DB
$query = 'INSERT INTO calories(id, gender, age, weight, height, cal) VALUES(:id, :gender, :age, :weight, :height, :cal)';
$statement = $db->prepare($query);
$statement->bindValue(':id', $id, PDO::PARAM_INT);
$statement->bindValue(':gender', $gender, PDO::PARAM_STR);
$statement->bindValue(':age', $age, PDO::PARAM_STR);
$statement->bindValue(':weight', $weight, PDO::PARAM_STR);
$statement->bindValue(':height', $height, PDO::PARAM_STR);
$statement->bindValue(':cal', $cal, PDO::PARAM_STR);
$result = $statement->execute();

//echo "$result";
flush();
header("Location:caloriecounter.php?id=$id");
die();

?>