<!DOCTYPE html>
<html>
<head>
<base href="">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Ankita's profile</title>
</head>

<body>

<img class="underConstruction" src="underConstruction.png" alt="underConstruction" />

<?php
if(isset($_COOKIE['AboutVisit']))
{
$last = $_COOKIE['AboutVisit']; }
$year = 31536000 + time() ;
setcookie(AboutVisit, time (), $year) ;
if (isset ($last))
{
$change = time () - $last;
if ( $change > 86)
{
echo "Welcome back! <br> You last visited on ". date("m/d/y",$last) ;
}
else
{
echo "Thanks for visiting!";
}
}
else
{
echo "Welcome to my site!";
}
?> 

</body>


</html>