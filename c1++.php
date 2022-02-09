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

<title>C++ Programming</title>
</head>
<body>

	<nav>
	<div class="logo">
		<p>ss academy</p>
	</div>
	<ul>
		<li><a href="index.php" class="">Home</a></li>
		<li><a href="c.php" class="">C++ Programming</a></li>
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
			<p><u>To write the first c++ program, open the C++ console and write the following code:</u><br>
			#include <iostream> <br>
			  
			int main(){  <br>  
			cout<<"Hello C++ Language"; <br>
			return 0;  <br>
			}	
			</p>	
			</div></td>
			<td align="right"><br>
				<video height="315" width="500" controls><source src="files/c++1.mp4"></video><br>
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
			<p>A variable is a name of the memory location. It is used to store data. Its value can be changed,<br> and it can be reused many times.
			It is a way to represent memory location through symbol.<br>
			The example of declaring the variable is given below:<br>
			int a; <br> 
			float b;  <br>
			char c;  <br></p>
			</div>
			<br>
			<div id="text2">
				<h3>3. Datatypes in c++</h3>
				</div>
			<div id="text4">
			<p>
			A data type specifies the type of data that a variable can store such as integer, floating, character, etc.
			There are the following data types in C++ language.<br>
			<table><tr style="outline: thin solid"><td>Types</td>
			<td>Datatypes</td></tr>
			<tr><td>Basic datatypes</td><td>int ,float,char,double</td></tr>
			<tr><td>Derived Datatypes</td><td>array,pointer,structure,union</td></tr>
			<tr><td>Enumeration Datatypes</td><td align="center">enum</td></tr>
			<tr><td>user defined datatype</td><td>structure</td></tr>
			</table>
			</p>
			</div></td>
			<td>
			<td align="right">
				<br><video height="315" controls><source src="files/c++2.mp4"></video><br>
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
