<?php
session_start();
include 'db_conn.php';
if(isset($_POST['email']) && isset($_POST['password'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if(empty($email)){
		header("location: login.php?error= Email is required");
	}else if(empty($password)){
		header("location: login.php?error= Password is required");
	}else{
		$stmt = $conn->prepare("SELECT *FROM users1 WHERE
											email=?");
		$stmt->execute([$email]);
		
		if($stmt->rowCount() ===1){
			$user = $stmt->fetch();
			
			$user_id = $user['id'];
			$user_email=$user['email'];
			$user_password=$user['password'];
			$user_full_name=$user['full_name'];
			
			if($email ===$user_email){
				if(password_verify($password, $user_password)){
					$_SESSION['user_id'] = $user_id;
					$_SESSION['user_email'] = $user_email;
					$_SESSION['user_full_name'] = $user_full_name;
					header("location: index.php");

				}else{
					header("location: login.php?error= Incorrect email and password");
				}
			}else{
				header("location: login.php?error= Incorrect email and password");
			}
		}else{
			header("location: login.php?error= Incorrect email and password");
		}
	}
}

?>