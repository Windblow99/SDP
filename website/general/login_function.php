<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','educo');
	
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	$sql="SELECT * from users where Email = '$email' and Password='".md5($password)."'";
	
	$result=mysqli_query($conn, $sql);
	
	//echo $sql
	if(mysqli_num_rows($result)<=0)
	{
		//echo "<script>alert('Unable to Login!');</script>";
	//	die ("<script>window.history.go(-1);</script>");
	}
	
	if($row = mysqli_fetch_array($result))
	{
		$_SESSION['user'] = $row['Name'];
		//echo "<script>alert('Welcome back," .$_SESSION['user']." ');</script>";
		if($row['Role'] == 'student'){
		echo "<script>window.location.href='/website/student/studentmainpage.php';</script>";
			//echo "a";
		}

		elseif($row['Role'] == 'teacher'){
		echo "<script>window.location.href='/website/teacher/teacher_menu.php';</script>";
			//echo "b";
		}

		elseif($row['Role'] == 'corporate'){
		echo "<script>window.location.href='/website/corporate/corporate_main_menu.php';</script>";
			//echo "c";
		}
	}
?>