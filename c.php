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

<title>C Programming</title>
</head>
<body>

	<nav>
	<div class="logo">
		<p>ss academy</p>
	</div>
	<ul>
		<li><a href="index.php" class="">Home</a></li>
		<li><a href="c++.php" class="">C++</a></li>
		<li><a href="java.php" class="">Java</a></li>
		<li><a href="pyth.php" class="">Python</a></li>
		<li><a href="sql.php" class="">SQL</a></li>
		<li><a href="htmlpage.php" class="">html</a></li>
		<li><a href="logout.php"class="btn btn-warning">Logout</a></li>
		<li><p><font color="white"><?=$_SESSION['user_full_name']?></font></p></li>
	</ul>
	</nav><br>
	<div id="text1">
	<p>C Programming</p>
	</div>
	<div id="text2">
	<h2>C is a powerful general purpose, procedural programming language. it can be used to<br> develop operating systems, compilers, databases etc. it was developed
	by<br><b> Dennis M. Ritche</b> in 1972 at Bell Telephone laboratories to develop unix os.</h2> 
	</div>
	<div class="table-box">
	<div class="table-row">
	<table>
		<tr><td><h2>Contents</h2></td></tr>
		<tr><td><h4><a href="c1.php">first Program</a></h4></td></tr>
		<tr><td><h4><a href="c1.php">Variables and datatypes</a></h4></td></tr>
		<tr><td><h4><a href="">Keywords</a></h4></td></tr>
		<tr><td><h4><a href="">Operators</a></h4></td></tr>
		<tr><td><h4><a href="">Loops</a></h4></td></tr>
		<tr><td><h4><a href="">Conditional Statements</a></h4></td></tr>
		<tr><td><h4><a href="">Functions</a></h4></td></tr>
		
		
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

