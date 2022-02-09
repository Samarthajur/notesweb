<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['user_email'])){	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible", content="ie-edge">
<link rel="stylesheet" href="bootstrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="style.css">

<title>HTMl page</title>
</head>
<body>

	<nav>
	<div class="logo">
		<p>ss academy</p>
	</div>
	<ul>
		<li><a href="index.php" class="">Home</a></li>
		<li><a href="c.php" class="">C</a></li>
		<li><a href="c++.php" class="">C++</a></li>
		<li><a href="java.php" class="">Java</a></li>
		<li><a href="pyth.php" class="">Python</a></li>
		<li><a href="sql.php" class="">SQL</a></li>
		<li><a href="logout.php"class="btn btn-warning">Logout</a></li>
		<li><p><font color="white"><?=$_SESSION['user_full_name']?></font></p></li>
	</ul>
	</nav><br>
	<div id="text1">
	<p>HTML HyperText Markup Language</p>
	</div>
	<div id="text2">
	<h2>HTML stands for HyperText Markup Language. HTML is used to create web pages and web applications. HTML is widely used language on the web. We can create a static website by HTML only. 
	Technically, HTML is a Markup language rather than a programming language.</h2> 
	</div>
	<div class="table-box">
	<div class="table-row">
	<table>
		<tr><td><h2>Contents</h2></td></tr>
		<tr><td><h4><a href="html1.php">Simple web page</a></h4></td></tr>
		<tr><td><h4><a href="html1.php">HTML tags</a></h4></td></tr>
		<tr><td><h4><a href="html1.php">HTML anchor</a></h4></td></tr>
		<tr><td><h4><a href="">HTML images</a></h4></td></tr>
		<tr><td><h4><a href="">HTML formatting</a></h4></td></tr>
		
		
	</table>
	</div>
	</div>
	</body>
</html>
<?php
}else{
	header("location: login.php");
}
?>

