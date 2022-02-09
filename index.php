<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['user_email'])){	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>HOME PAGE</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<br>
	<nav>
	<div class="logo">
		<p>ss academy</p>
	</div>
	<ul>
		<li><a href="" class="">Home</a></li>
		<li><a href="course.php" class="">Courses</a></li>
		<li><a href="about.php" class="">About us</a></li>
		<li><a href="contact.php" class="">Contact us</a></li>
		<li><a href="logout.php"class="btn btn-warning">Logout</a></li>
		<li><p><font color="white"><?=$_SESSION['user_full_name']?></font></p></li>
	</ul>
	</nav><br><br><br>
	<div id="text1">
	<p>Take The First Step <br> To Learn With Us</p>
	</div>
	<div id="text2">
	<p>Discover a new way to learn, to train, engage and get reward of knowledge!<br>
	Get access to unlimited educational resources anywhere anytime with SS Academy!!!</p>
	</div>
	<div id="text3">
	<p>Get Some Free Ebooks!!!!</p>
	</div>
	<div id="text2">
	<a href="download.php?file=ctutor">C Programming Ctutor book</a><br>
	<a href="download.php?file=c++ prog">C++ Programming Book</a><br>
	<a href="download.php?file=html_tutorial">HTML Tutorial book by tutorials_point</a>
	</div>
</body>
</html>
<?php
}else{
	header("location: login.php");
}
?>