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

<title>Java Programming</title>
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
		<li><a href="pyth.php" class="">Python</a></li>
		<li><a href="sql.php" class="">SQL</a></li>
		<li><a href="htmlpage.php" class="">html</a></li>
		<li><a href="logout.php"class="btn btn-warning">Logout</a></li>
		<li><p><font color="white"><?=$_SESSION['user_full_name']?></font></p></li>
	</ul>
	</nav><br>
	<div id="text1">
	<p>Java Programming</p>
	</div>
	<div id="text2">
	<h2>Java is a programming language and a platform. Java is a high level, robust,object-oriented<br> and secure programming language.
	Java was developedby Sun Microsystems (which is now <br> the subsidiary of Oracle) in the year 1995. James Gosling is known as the father of Java.<br>
	Before Java, its name was Oak. Since Oak was already a registered company, so James Gosling<br> and his team changed the Oak name to Java.<br>
	Platform: Any hardware or software environment in which a program runs, is known as a platform. Since Java has a runtime environment (JRE) and API, it is called a platform.

</h2> 
	</div>
	<div class="table-box">
	<div class="table-row">
	<table>
		<tr><td><h2>Contents</h2></td></tr>
		<tr><td><h4><a href="java1.php">first Program</a></h4></td></tr>
		<tr><td><h4><a href="java1.php">Variables and datatypes</a></h4></td></tr>
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
