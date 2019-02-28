<?php

$bmi_id = htmlspecialchars($_POST['bmi_id']);
$weight = htmlspecialchars($_POST['weight']);
$height = htmlspecialchars($_POST['height']);

//echo "Trying to insert: courseid: $course_id, date: $date, content: $content";

require_once("dbconnect.php");
$db = get_db();

$query = 'INSERT INTO bmi(weight, height) VALUES(:weight, :height)';
$statement = $db->prepare($query);
$result = $statement->execute();

//echo "$result";
flush();
die();
?>