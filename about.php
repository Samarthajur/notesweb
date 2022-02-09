<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['user_email'])){	
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="navbar.css">
</head>
<body>
<nav>
	<div class="logo">
		<p>ss academy</p>
	</div>
	<ul>
		<li><a href="index.php" class="">Home</a></li>
		<li><a href="course.php" class="">Courses</a></li>
		<li><a href="contact.php" class="">Contact us</a></li>
		<li><a href="logout.php"class="btn btn-warning">Logout</a></li>
		<li><p><font color="white"><?=$_SESSION['user_full_name']?></font></p></li>
	</ul>
	</nav><br><br><br><br>
<div class="d-flex justify-content-center align-items-center" style="height: 550px">
   <form class="p-5 rounded shadow"  method="post" style="width: 40rem">
	
	<h1 class="text-center pb-5 display-4">About US</h1>
		<div class="mb-3">
			<label class="form-label" style="font-size: +20px">Welcome to <b>SS Academy</b> This is the first step towards the digital learning. send feedback if you faced any difficulty so that e will fix it.</label><br>
			<label class="form-label">Email address:<b>samarthajur@gmail.com</a></label><br>
			<label class="form-label">Address: GPS , akkalkote road solapur</label><br>
			<label class="form-label">Phone no: +000 0000 00000000</label><br>
			<label class="form-label">Office Time: 12pm-6pm</label><br>
			<label class="form-label">thank you!!!</label>
		</div>
	</form>
	</div>
</body>
</html>
<?php
}else{
	header("location: login.php");
}
?>