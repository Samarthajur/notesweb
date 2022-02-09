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

<title>html</title>
</head>
<body>

	<nav>
	<div class="logo">
		<p>ss academy</p>
	</div>
	<ul>
		<li><a href="index.php" class="">Home</a></li>
		<li><a href="htmlpage.php" class="">html</a></li>
		<li><a href="logout.php"class="btn btn-warning">Logout</a></li>
		<li><p><font color="white"><?=$_SESSION['user_full_name']?></font></p></li>
	</ul>
	</nav><br><br><br><br>
	<table style="width:100%">
		<tr style="outline: solid">
			<td>
				<div id="text2">
				<h3>1. Simple web page</h3>
				</div>
			<div id="text4">
			<p><img src="files/1st.jpg" width="300" height="300"></p>	
			</div></td>
			<td align="right"><br>
				<video height="315" controls><source src="files/htm1.mp4"></video><br>
			</td>
		</tr>
	</table>
	<table style="width: 100%">
		<tr style="outline: solid">
			<td>
				<div id="text2">
				<h3><br>2.HTML tags</h3>
				</div>
			<div id="text4">
			<p>HTML tags are like keywords which defines that how web browser will format and display the content.
			With the help of tags, a web browser can distinguish between an HTML content and a simple content. 
			HTML tags contain three main parts: opening tag, content and closing tag. But some HTML tags are unclosed tags.<br>
			</p>
			</div>
			<br><br><br>
			<div id="text2">
				<h3>3. HTML anchor</h3>
				</div>
			<div id="text4">
			<p> The HTML anchor tag defines a hyperlink that links one page to another page. It can create hyperlink 
			to other web page as well as files, location, or any URL. The "href" attribute is the most important attribute
			of the HTML a tag. and which links to destination page or URL.



			</p>
			</div></td>
			<td>
			<td align="right">
				<br><video height="315" controls><source src="files/htt2.mp4"></video><br>
				<video height="315" controls><source src="files/htt3.mp4"></video><br>
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
