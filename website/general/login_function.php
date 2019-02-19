<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','educo');
	
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	$sql="SELECT * from users where Email = '$email' and Password='".md5($password)."'";
	
	$result=mysqli_query($conn, $sql);

	$array=mysqli_fetch_assoc($result);
	
	//echo $sql
	if(mysqli_num_rows($result)<=0)
	{
		echo "<script>alert('Unable to Login!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}

	if($array['Status'] == "1")
	{
		echo "<script>alert('You have been banned! Please contact the site admin for further assistance if you wish to resolve this issue.')</script>";
		die ("<script>window.location.href='index.php';</script>");
	}

	if($array['Role'] == "admin")
	{
		$_SESSION['user_id'] =  $array['U_ID'];
		$_SESSION['role'] = 'admin';
		$_SESSION['user'] = $array['Name'];
		echo "<script>window.location.href='/website/admin/admin_panel.php';</script>";
	}
	else if($array['Role'] == "corporate")
	{
		$_SESSION['user_id'] =  $array['U_ID'];
		$_SESSION['role'] = 'admin';
		$_SESSION['user'] = $array['Name'];
		echo "<script>window.location.href='/website/corporate/corporate_main_menu.php';</script>";
	}
	else if($array['Role'] == "moderator")
	{
		$_SESSION['user_id'] =  $array['U_ID'];
		$_SESSION['role'] = 'admin';
		$_SESSION['user'] = $array['Name'];
		echo "<script>window.location.href='/website/moderator/moderator_panel.php';</script>";
	}
	else if($array['Role'] == "teacher")
	{
		$_SESSION['user_id'] =  $array['U_ID'];
		$_SESSION['role'] = 'admin';
		$_SESSION['user'] = $array['Name'];
		echo "<script>window.location.href='/website/teacher/teacher_menu.php';</script>";
	}
	else if($array['Role'] == "student")
	{
		$_SESSION['user_id'] =  $array['U_ID'];
		$_SESSION['role'] = 'admin';
		$_SESSION['user'] = $array['Name'];
		echo "<script>window.location.href='/website/student/studentmainpage.php';</script>";
	}
?>