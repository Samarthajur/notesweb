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

<title>SQL Programming</title>
</head>
<body>

	<nav>
	<div class="logo">
		<p>ss academy</p>
	</div>
	<ul>
		<li><a href="index.php" class="">Home</a></li>
		<li><a href="sql.php" class="">SQL Programming</a></li>
		<li><a href="logout.php"class="btn btn-warning">Logout</a></li>
		<li><p><font color="white"><?=$_SESSION['user_full_name']?></font></p></li>
	</ul>
	</nav><br><br><br><br>
	<table style="width:100%">
		<tr style="outline: solid">
			<td>
				<div id="text2">
				<h3>1. DDL data defination language</h3>
				</div>
			<div id="text4">
			<p>DDL changes the structure of the table like creating a table, deleting a table, altering a table, etc.<br>
			All the command of DDL are auto-committed that means it permanently save all the changes in the database.<br>
			<u>Here are some commands that come under DDL:</u><br>
			CREATE<br>ALTER<br>DROP<br>TRUNCATE</p>	
			</div></td>
			<td align="right"><br>
				<video height="315" controls><source src="files/ddlsql.mp4"></video><br>
			</td>
		</tr>
	</table>
	<table style="width: 100%">
		<tr style="outline: solid">
			<td>
				<div id="text2">
				<h3><br>2. SQL operators</h3>
				</div>
			<div id="text4">
			<p>SQL statements generally contain some reserved words or characters that are used to<br>
			perform operations such as comparison and arithmetical operations etc.<br>
			These reserved words or characters are known as operators.<br>
			<u>Generally there are three types of operators in SQL:</u><br>
			SQL Arithmetic Operators<br>SQL Comparison Operators<br>SQL Logical Operators</p>
			</div>
			<br>
			<div id="text2">
				<h3>3. Datatypes</h3>
				</div>
			<div id="text4">
			<p> Data types are used to represent the nature of the data that can be stored in<br>
			the database table. For example, in a particular column of a table, if we want to<br>
			store a string type of data then we will have to declare a string data type of this column.<br>
			<u>Data types mainly classified into three categories for every database.</u><br>

			String Data types<br>
			Numeric Data types<br>
			Date and time Data types<br>
			</p>
			</div></td>
			<td>
			<td align="right">
				<br><video height="315" controls><source src="files/sqldt.mp4"></video><br>
				<video height="315" controls><source src="files/sqlop.mp4"></video><br>
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
