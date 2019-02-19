<?php
	session_start();

	$user_id = $_SESSION['user'];
	$ori_email = $_POST['old_email'];
	$email1 = $_POST['new_email'];
	$email2 = $_POST['confirm_email'];

	$conn = mysqli_connect('localhost','root','','educo');
	
	$sql = "UPDATE users SET Email = '$email1' WHERE Name = '$user_id' AND '$email1' = '$email2' AND Email = '$ori_email'";
	
	//after writing the query, execute the query
	mysqli_query($conn, $sql); //$conn variable get from conn.php file

	//step 3: output (display alert box)
 	if(mysqli_affected_rows($conn) <=0)
 	{
		echo "<script>alert('Failed to update your email.');</script>";
 		echo $sql;
 		die;
 	}
 	//successfully inserted
		echo "<script>alert('Your email was successfully changed.');</script>";
		echo("<script>window.location.href='account_security.php';</script>");
?>