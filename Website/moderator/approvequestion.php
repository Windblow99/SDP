<?php
	
	$id = $_GET['id'];
	$conn = mysqli_connect('localhost','root','','educo');

	$sql = "Update question SET Approval = 'Approved' WHERE $id = Q_No";
	
	mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('No data was updated.');</script>";
		echo $sql;
		die;
	}
	
	echo "<script>alert('Question was approved.');</script>";
	die("<script>window.location.href='moderator_panel.php'</script>");
?>