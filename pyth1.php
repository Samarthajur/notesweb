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

<title>Python Programming</title>
</head>
<body>

	<nav>
	<div class="logo">
		<p>ss academy</p>
	</div>
	<ul>
		<li><a href="index.php" class="">Home</a></li>
		<li><a href="pyth.php" class="">Python</a></li>
		<li><a href="logout.php"class="btn btn-warning">Logout</a></li>
		<li><p><font color="white"><?=$_SESSION['user_full_name']?></font></p></li>
	</ul>
	</nav><br><br><br><br>
	<table style="width:100%">
		<tr style="outline: solid">
			<td>
				<div id="text2">
				<h3>1. First Program</h3>
				</div>
			<div id="text4">
			<p>Instead of writing so manyline for just printinn<br>
			Hello world we write <b>print("Hello World")</b> in python.
			</p>	
			</div></td>
			<td align="right"><br>
				<video height="315" controls><source src="files/py1.mp4"></video><br>
			</td>
		</tr>
	</table>
	<table style="width: 100%">
		<tr style="outline: solid">
			<td>
				<div id="text2">
				<h3><br>2. Variables</h3>
				</div>
			<div id="text4">
			<p>Variables can hold values, and every value has a data-type. Python is a dynamically typed language;<br>
			hence we do not need to define the type of the variable while declaring it. 
			<br>The interpreter implicitly binds the value with its type.</p>
			</div>
			<br>
			<div id="text2">
				<h3>3. Datatypes in python</h3>
				</div>
			<div id="text4">
			<p>
			<table><tr style="outline: thin solid"><td>standard dataTypes</td></tr>
			<tr><td>Number</td></tr>
			<tr><td>Boolean</td></tr>
			<tr><td>Dictionary</td></tr>
			<tr><td>set</td></tr>
			<tr><td>tuple</td></tr>
			<tr><td>list</td></tr>
			</table>
			</p>
			</div></td>
			<td>
			<td align="right">
				<br><video height="315" controls><source src="files/py2.mp4"></video><br>
			</td>
		</tr>
	</table>
</body>
</html>
<?php
}else{
	header("location: login.php");
}
?>
