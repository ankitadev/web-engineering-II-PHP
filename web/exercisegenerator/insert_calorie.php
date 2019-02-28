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
$query = 'INSERT INTO calories(gender, age, weight, height, cal) VALUES(:gender, :age, :weight, :height, cal)';
$statement = $db->prepare($query);
$statement->bindValue(':date', $date, PDO::PARAM_STR);
$statement->bindValue(':content', $content, PDO::PARAM_STR);
$statement->bindValue(':course_id', $course_id, PDO::PARAM_INT);
$result = $statement->execute();

//echo "$result";
flush();
header("Location:notes.php?course_id=$course_id");
die();

?>