<?php

	$conn = mysqli_connect('localhost','root','','educo');
	
	$email = $_POST['email'];
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	$sql = "Update users SET password = '".md5($password)."' WHERE email = '$email';";

	mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn) <= 0)
	{
		echo "<script>alert('No data updated in DB!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}
	else 
	{
		echo "<script>alert('Data updated in DB!');</script>";
		die ("<script>window.location.href='/website/general/login.php';</script>");
	}
?>