<?php
$dbhandle=mysql_connect("localhost","root","") or die("could not connect to database");
$selected=mysql_select_db("test1_db",$dbhandle);
if(isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['birth_date'])){
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$birth_date=$_POST['birth_date'];
	$query=mysql_query("SELECT * FROM users2 WHERE email='$email'");
	if(empty($email)){
		header("location: register.php?error= Email is required");
	}else if(empty($birth_date)){
		header("location: register.php?error= birthdate is required");
	}else if(mysql_num_rows($query)>0){
		header("location: register.php?error= Email already exist!");
		
	}else{
		mysql_query("insert into users2(full_name,email,birthday) values('$full_name','$email','$birth_date')");
		header("location: register.php?error= Sucessfully registerred!!!! wait for your password.");
		$hashed_password = password_hash($birth_date,PASSWORD_DEFAULT);
		mysql_query("insert into users1(full_name,email,password) values('$full_name','$email','$hashed_password')");
	}
}
?>