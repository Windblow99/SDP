<?php
	session_start();
	
	echo "<script>alert('".$_SESSION['user'].", You are logged out!');</script>";
	
	session_destroy();
	
	echo "<script>window.location.href='/website/general/';</script>";
?>