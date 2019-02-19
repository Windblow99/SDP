<?php
	$conn = mysqli_connect('localhost','root','','educo');

	$password = $_POST['password'];
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$role = $_POST['position'];	
	
	//echo "$role";
	$sql = "Insert into users (Name, Contact_No, Email, Password, Role, Status) VALUES ('$name', '$contact', '$email', '".md5($password)."', '$role', 0)";
	
	mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn) <= 0)
	{
		echo "<script>alert('Unable to register!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}
	
	echo "<script>alert('Register Successfully!');</script>";
	echo "<script>window.location.href='login.php';</script>";
?>