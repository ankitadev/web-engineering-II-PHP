<?php

$gender = htmlspecialchars($_POST['gender']);
$age = htmlspecialchars($_POST['age']);
$weight = htmlspecialchars($_POST['weight']);
$height = htmlspecialchars($_POST['height']);
$cal = htmlspecialchars($_POST['cal']);

//echo "Trying to insert: courseid: $course_id, date: $date, content: $content";

require_once("dbconnect.php");
$db = get_db();

// Get the Course from the DB
$query = 'INSERT INTO calories(gender, age, weight, height, cal) VALUES(:gender, :age, :weight, :height, :cal)';
$statement = $db->prepare($query);
$statement->bindValue(':gender', $gender, PDO::PARAM_STR);
$statement->bindValue(':age', $age, PDO::PARAM_STR);
$statement->bindValue(':weight', $weight, PDO::PARAM_STR);
$statement->bindValue(':height', $height, PDO::PARAM_STR);
$statement->bindValue(':cal', $cal, PDO::PARAM_STR);
$result = $statement->execute();

//echo "$result";
flush();
die();

?>