
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Login form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <link rel="stylesheet" href"style.css">
</head>
<body>
<h2 class="text-center" style="background-color: #2f4f4f"><font color="white">"Welcome To SS Academy, Kindly login to Continue</font></h2>

	<div class="d-flex justify-content-center align-items-center" style="height: 580px">
	<form class="p-5 rounded shadow" action="auth.php" method="post" style="width: 30rem">
	
	<h1 class="text-center pb-5 display-4">LOGIN</h1>
	<?php if(isset($_GET['error'])) {?>
	<div class="alert alert-danger" role="alert">
	<?php echo $_GET['error']; ?>
  </div>
	<?php } ?>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1">
		</div>
		<button type="submit" class="btn btn-primary">Login</button>
		<p class="text-center">Don't have account then, <a href="register.php">Register Here</a></p>
	</form>

	</div>
	
</body>
</html>