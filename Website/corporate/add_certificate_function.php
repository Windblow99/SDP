<?php
	
	session_start();
	//obtain basename from filepath eg. C:/wamp64/image.jpg
	$filename = basename($_FILES['fileupload']['name']);
	
	//to obtain file size
	$getfilesize = $_FILES['fileupload']['size'];
	
	//to obatin file type
	$getFileType = pathinfo($filename,PATHINFO_EXTENSION);

	$certname = $_POST['certname'];

	$username = $_SESSION['user'];
	
	if($getfilesize > 16777215)
	{
		echo "<script>alert('Sorry file size is too big.";
		echo " Please choose others pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}

	//checking the file type
	if($getFileType != "jpg" && $getFileType != "jpeg"
	&& $getFileType != "png" && $getFileType !="gif")
	{
		echo "<script>alert('Wrong file type.";
		echo " Please choose others pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
	
	//testing completed then is sent to tmp
	//followed by upload to database	
	$fileobjectpath = $_FILES['fileupload']['tmp_name'];
	
	$conn = mysqli_connect('localhost','root','','educo')
	or die("<script>alert('error in db connection');</script>");
	
	$sql = "INSERT INTO certificate (Corp_ID,Cert_File,Cert_Name) VALUES 
		((SELECT U_ID FROM users WHERE Name = '$username'),'$fileobjectpath','$certname')";

	mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) <=0)
	{
		die("<script>alert('Fail: Unable To Upload File!');window.history.go(-1);</script>");
	}

	echo "<script>alert('New Certificate Added!')</script>";
	echo "<script>window.location.href='corporate_main_menu.php';</script>";
