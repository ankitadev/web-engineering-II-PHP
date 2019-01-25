<!DOCTYPE html>
<html>
<head>
<base href="">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Ankita's profile</title>
</head>

<body>
<div class="container">
<div class="indexHeader">
<h1 class="inexH1">Ankita Dev's Home Page</h1>
<hr class="titleHR">
<h2 class="indexH2">Introduction Page</h2>
</div>
<?php
echo "Today is " . date("Y/m/d") . " " . date("l") ."<br>";
?>
<?php
if(isset($_COOKIE['AboutVisit']))
{
$last = $_COOKIE['AboutVisit']; }
$year = 31536000 + time() ;
//this adds one year to the current time, for the cookie expiration
setcookie(AboutVisit, time (), $year) ;
if (isset ($last))
{
$change = time () - $last;
if ( $change > 86400)
{
echo "Welcome back! <br> You last visited on ". date("m/d/y",$last) ;
// Tells the user when they last visited if it was over a day ago
}
else
{
echo "Thanks for using our site!";
//Gives the user a message if they are visiting again in the same day
}
}
else
{
echo "Welcome to our site!";
//Greets a first time user
}
?> 
<div class="topnav">
  <a class="active" href="https://thawing-mountain-32172.herokuapp.com/profilepage/index.php">Home</a>
  <a href="https://thawing-mountain-32172.herokuapp.com/profilepage/index.php">Contact</a>
  <a href="https://thawing-mountain-32172.herokuapp.com/profilepage/index.php">About</a>
</div>
<hr class="mainHr1">
<hr class="mainHr2">
<blockquote><b>
But man is not made for defeat. A man can be destroyed but not defeated.</b>
<br>-Ernest Hemingway
</blockquote>

<div class="profilePic">
<img class="profPicture" src="ankita.jpg" alt="Ankita's Picture" />
</div>
<div class="landscapeIMG">
<p>Last spring semester I did a month backpacking in South East Asia. So this picture is from then, this is in Thailand Khao Sok National park. It was really great first solo traveling for me. I really like Swimming and you can find me going for a swim at the Hart building every day.
</p>
</div>
<div class="introTable">
<table class="FirstTable">
  <tr>
    <td>Name:</td>
    <td>Ankita Dev</td>
  </tr>
  <tr>
    <td>Major:</td>
    <td>Computer Science</td>
  </tr>
  <tr>
    <td>From:</td>
    <td>Nepal</td>
  </tr>
</table>
</div>

<div class="clear"></div>
<div class="goBackLink">
<a class="goToMainPage" href="https://thawing-mountain-32172.herokuapp.com/profilepage/secondpage.php">Next Page</a>
</div>
</div>

</body>


</html>