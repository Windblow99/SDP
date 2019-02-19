<?php
	
	$id = $_GET['id'];
	$conn = mysqli_connect('localhost','root','','educo');

	$sql = "DELETE question WHERE $id = Q_No";
	
	mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('No data was updated.');</script>";
		echo $sql;
	}
	
	echo "<script>alert('Question was successfully deleted.');</script>";
	die("<script>window.location.href='admin_panel.php'</script>");
?>