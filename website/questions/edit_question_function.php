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
    $uid = $rows['U_ID'];  	

	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];
	$answer4 = $_POST['answer4'];
	$trueanswer = $_POST['trueanswer'];
	$status = "Pending";

	echo $answer1."<br>";
	echo $answer2."<br>";
	echo $answer3."<br>";
	echo $answer4."<br>";
	echo $trueanswer."<br>";
	echo $status."<br>";

	$update = "UPDATE question SET A = '$answer1' WHERE Q_No = '$id';";
	mysqli_query($conn, $update);
	
	if (mysqli_affected_rows($conn) <= 0)
	{
		echo "<script>alert('Update Failed!');</script>";
		//die ("<script>window.history.go(-1);</script>");
	}
	else
	{

	echo "<script>alert('Question Updated!');</script>";
	//if($row['Role'] == 'teacher'){
		//echo "<script>window.location.href='/website/teacher/teacher_menu.php';</script>";
	//}

	//elseif($row['Role'] == 'corporate'){
		//echo "<script>window.location.href='/website/corporate/corporate_main_menu.php';</script>";
	//}
	}
?>