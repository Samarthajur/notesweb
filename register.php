<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Registeration form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<h2 class="text-center" style="background-color: #2f4f4f"><font color="white">SS Academy, Register new member!</font></h2>
	<div class="d-flex justify-content-center align-items-center" style="height: 650px">
	<form class="p-5 rounded shadow" action="reg.php" method="post" style="width: 30rem">
	
	<h1 class="text-center pb-5 display-4">REGISTER</h1>
	<?php if(isset($_GET['error'])) {?>
	<div class="alert alert-danger" role="alert">
	<?php echo $_GET['error']; ?>
  </div>
	<?php } ?>
	<div class="mb-3">
			<label class="form-label">Full Name</label>
			<input type="text" name="full_name" class="form-control" id="full_name">
	</div>
	<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
			<label class="form-label">BirthDate</label>
			<input type="text" name="birth_date" class="form-control" id="birth_date">
		</div>
		<p class="text-center">We Will Provide Password To You!!</p>
		<button type="submit" class="btn btn-primary">Register</button>
		<p class="text-center">goto back to <a href="login.php">login</a></p>
	</form>
	</div>
</body>
</html>
		