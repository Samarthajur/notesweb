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

<title>SQL</title>
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
		<li><a href="htmlpage.php" class="">html</a></li>
		<li><a href="logout.php"class="btn btn-warning">Logout</a></li>
		<li><p><font color="white"><?=$_SESSION['user_full_name']?></font></p></li>
	</ul>
	</nav><br>
	<div id="text1">
	<p>SQL Programming</p>
	</div>
	<div id="text2">
	<h2>SQL (Structured Query Language) is used to perform operations on the records stored in the database such as updating records, deleting records, creating and modifying tables, views, etc.

SQL is just a query language; it is not a database. To perform SQL queries, you need to install any database, for example, Oracle, MySQL, MongoDB, PostGre SQL, SQL Server, DB2, etc.</h2> 
	</div>
	<div class="table-box">
	<div class="table-row">
	<table>
		<tr><td><h2>Contents</h2></td></tr>
		<tr><td><h4><a href="sql1.php">SQL datatypes</a></h4></td></tr>
		<tr><td><h4><a href="sql1.php">SQL Operators</a></h4></td></tr>
		<tr><td><h4><a href="sql1.php">SQL DDL</a></h4></td></tr>
		<tr><td><h4><a href="">SQL DML</a></h4></td></tr>
		<tr><td><h4><a href="">SQL DCL</a></h4></td></tr>
		
		
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

