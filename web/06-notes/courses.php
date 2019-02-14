<?php
require_once('dbconnect.php');
$db = get_db();

$query = 'SELECT id, name, course_code FROM course';
$statememnt = $db->prepare($query);
$statement->execute();
$courses = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Courses</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<h1>Notes App</h1>
	<h2>Courses</h2>

	<ul>
		<?php
		foreach($courses as $course)
		{
			$id = $course['id'];
			$name = $couse['name'];
			$course_code = $course['course_code'];

			echo "<li>$course_code - $name</li>\n";
		}
		?>
		<li></li>
	</ul>
</body>
</html>