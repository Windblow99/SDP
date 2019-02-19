<?php
	
	$id = $_GET['id'];
	$role = $_SESSION['role'];
	$conn = mysqli_connect('localhost','root','','educo');

	$sql = "DELETE from question WHERE $id = Q_No";
	
	mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('No data was updated.');</script>";
		echo $sql;
		die;
	}


	
	echo "<script>alert('Question was successfully deleted.');</script>";
	die ("<script>window.history.go(-1);</script>");
	//	die("<script>window.location.href='view_questions.php?role=".$role."'</script>");
?>