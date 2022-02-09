
<?php
$dbhandle=mysql_connect("localhost","root","") or die("could not connect to database");
$selected=mysql_select_db("contact_us",$dbhandle);
if(isset($_POST['UName']) && isset($_POST['Email']) && isset($_POST['Subject']) && isset($_POST['msg'])){
	$name=$_POST['UName'];
	$email=$_POST['Email'];
	$subject=$_POST['Subject'];
	$Msg=$_POST['msg'];
	if(empty($email)){
		header("location: contact.php?error= Email is required");
	}else if(empty($name)){
		header("location: contact.php?error= name is required");
	}else if(empty($Msg)){
		header("location: contact.php?error=message is required");
	}else if(empty($subject))
	{
		header("location: contact.php?error=subject is needed");
	}else{
		mysql_query("insert into data(name,email,subject,msg) values('$name','$email','$subject','$Msg')");
		header("location: contact.php?success= thanks for contacting us!!");
	}
}


	/*if(isset($_POST['btn-send'])){
		$UserName = $_POST['UName'];
		$Email = $_POST['Email'];
		$Subject = $_POST['Subject'];
		$Msg = $_POST['msg'];
		
		
		if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg)){
			header("location: contact.php?error");
		}else{
			$to = "samarthajur@gmail.com";
			if(mail($to,$Subject,$Msg,$Email)){
				header("location: contact.php?success");
			}
		}
	}else{
		header("location: contact.php");
	}*/
	
?>