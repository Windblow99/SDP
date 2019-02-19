<?php
	session_start(); 

	$id = $_GET['id'];
	$name = $_SESSION['user'];	

	$conn = mysqli_connect('localhost','root','','educo');

	$select = "SELECT * FROM users WHERE Name = '$name';";
    $result = mysqli_query($conn,$select)
    or die("<script>alert('Maybe select wrong table / columns');</script>");
      
    $count = (mysqli_num_rows($result)>=1? true:
    die("<script>alert('No data available in the table!');</script>"));
    $rows = mysqli_fetch_array($result);
    $role = $rows['Role'];  	

	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];
	$answer4 = $_POST['answer4'];
	$trueanswer = $_POST['trueanswer'];
	$status = "Pending";

	$sql = "UPDATE question SET A = '$answer1', B = '$answer2', C = '$answer3', D = '$answer4', TrueAnswer = '$trueanswer', Approval = '$status' WHERE Q_No = ".$id.";";
	mysqli_query($conn, $sql);
	
	if (mysqli_affected_rows($conn) <= 0)
	{
		echo "<script>alert('Update Failed!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}
	else
	{

		echo "<script>alert('Question Updated!');</script>";
		if($role == 'teacher'){
			echo "<script>window.location.href='/website/teacher/teacher_menu.php';</script>";
		}

		elseif($role == 'corporate'){
			echo "<script>window.location.href='/website/corporate/corporate_main_menu.php';</script>";
		}
	}
?>