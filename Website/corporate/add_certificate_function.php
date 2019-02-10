<?php
	session_start();

	$conn = mysqli_connect('localhost','root','','educo');

	$certname = $_POST['certname'];

	$username = $_SESSION['user'];

	$filename = basename($_FILES['fileupload']['name']);
	
	$getfilesize = $_FILES['fileupload']['size'];
	
	$getFileType = pathinfo($filename,PATHINFO_EXTENSION);
	
	if($getfilesize > 16777215)
	{
		echo "<script>alert('Sorry file size is too big.";
		echo " Please choose others pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}

	if($getFileType != "jpg" && $getFileType != "jpeg" && $getFileType != "png" && $getFileType != "gif")
	{
		echo "<script>alert('Wrong file type.";
		echo "Please choose others pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
	
	$fileobjectpath = $_FILES['fileupload']['tmp_name'];
	$getimageobj = base64_encode(file_get_contents($fileobjectpath));
	
	$destination = "Pictures/".$filename; 
				
	if(!move_uploaded_file($_FILES['fileupload']['tmp_name'], $destination))
	{
		echo "<script>alert('Technical Problem: File not uploaded!');</script>";
		die("<script>window.history.go(-1);</script>");
	}

	$sql = "INSERT INTO certificate (Corp_ID, Cert_Image, Cert_File, Cert_Name) VALUES 
			((SELECT U_ID FROM users WHERE Name = '$username'),'$getimageobj', '$destination', '$certname');";
	
	mysqli_query($conn, $sql);
	
	if (mysqli_affected_rows($conn) <= 0)
	{
		echo "<script>alert('Insert Failed!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}

	echo "<script>alert('New certificate added!');</script>";
	echo ("<script>window.location.href='corporate_main_menu.php';</script>");
?>