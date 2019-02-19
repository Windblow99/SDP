<?php
	session_start();

	$user_id = $_SESSION['user'];
	$ori_password = $_POST['old_pass'];
	$password1 = $_POST['new_pass'];
	$password2 = $_POST['confirm_pass'];

	$conn = mysqli_connect('localhost','root','','educo');
	
	$sql = "UPDATE users SET password = '".md5($password1)."' WHERE password = '".md5($ori_password)."' AND Name = '$user_id' AND '$password1' = '$password2'";
	
	//after writing the query, execute the query
	mysqli_query($conn, $sql); //$conn variable get from conn.php file

	//step 3: output (display alert box)
 	if(mysqli_affected_rows($conn) <=0)
 	{
		echo "<script>alert('Failed to update your password.');</script>";
 		echo $sql;
 		die;
 	}
 	//successfully inserted
		echo "<script>alert('Your password was successfully changed.');</script>";
		echo("<script>window.location.href='account_security.php';</script>");
?>