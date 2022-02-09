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
		<li><a href="java.php" class="">Java Programming</a></li>
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
			<p><u>To write the first java program, open the java console and write the following code:</u><br>
			import java.lang.*; <br>
			class abc{ <br>
			Public Static void  main(){  <br>  
			System.out,println("Hello java Language"); <br>
			}	
			</p>	
			</div></td>
			<td align="right"><br>
				<video height="315" controls><source src="files/java1s.mp4"></video><br>
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
			<p>Variable is name of reserved area allocated in memory. In other words, it is a name of memory location. <br>
			It is a combination of "vary + able" that means its value can be changed.<br>int data=50;//Here data is variable<br>
			</div>
			<br>
			<div id="text2">
				<h3>3. Datatypes in java</h3>
				</div>
			<div id="text4">
			<p>
			A data type specifies the type of data that a variable can store such as integer, floating, character, etc.<br>
			There are the following data types in java language.<br>
			<table><tr style="outline: thin solid"><td>Types</td>
			<td>Datatypes</td></tr>
			<tr><td>Primitive datatypes</td><td> boolean, char, byte, short, int, long, float and double.</td></tr>
			<tr><td>non-primitive Datatypes</td><td> Classes, Interfaces, and Arrays.</td></tr>
			</table>
			</p>
			</div></td>
			<td>
			<td align="right">
				<br><video height="315" controls><source src="files/java2.mp4"></video><br>
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
