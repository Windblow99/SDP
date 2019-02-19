<?php
	
	$id = $_GET['id'];
	$conn = mysqli_connect('localhost','root','','educo');

	$sql = "Update users SET Status = '0' WHERE $id = U_ID";
	
	mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('No data was updated.');</script>";
		echo $sql;
	}
	
	echo "<script>alert('User was successfully unbanned.');</script>";
	die("<script>window.location.href='admin_panel.php'</script>");
?>