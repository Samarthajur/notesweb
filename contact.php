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

<title>Contact Us!!!</title>
</head>
<body>

	<nav>
	<div class="logo">
		<p>ss academy</p>
	</div>
	<ul>
		<li><a href="index.php" class="">Home</a></li>
		<li><a href="course.php" class="">Courses</a></li>
		<li><a href="about.php" class="">About us</a></li>
		<li><a href="register.php" class="">Register</a></li>
		<li><a href="logout.php"class="btn btn-warning">Logout</a></li>
		<li><p><font color="white"><?=$_SESSION['user_full_name']?></font></p></li>
	</ul>
	</nav>
<div class="d-flex justify-content-center align-items-center" style="height: 780px">
	<form class="p-5 rounded shadow" action="con_process.php" method="post" style="width: 35rem" id="myform">
	
	<h1 class="text-center pb-5 display-4">Contact Us</h1>
	<?php if(isset($_GET['error'])) {?>
	<div class="alert alert-danger" role="alert">
	<?php echo $_GET['error']; ?>
  </div>
	<?php } ?>
	<?php
	$Msg="";
	if(isset($_GET['success'])){
		$Msg="Thanks for contacting with us!";
		echo '<div class="alert alert-success">'.$Msg.'</div>';
	}
	
	?>
	<div class="mb-3">
	<label class="form-label">Enter name</label>
	<input type="text" name="UName" class="form-control" id="name">
	</div>
			<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
			<label class="form-label">Subject</label>
			<input type="text" name="Subject" class="form-control" id="examplesubject">
		</div>
		<div class="mb-3">
			<label class="form-label">Message</label>
			<textarea name="msg" class="form-control"placeholder="enter your msg"></textarea>
		</div>
		
		<button type="submit" class="btn btn-success" name="btn-send" onClick="sendEmail()">Submit</button>
		
	</form>

	</div>
	
</body>
</html>
<?php
}else{
	header("location: login.php");
}
?>
