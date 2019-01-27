<?php
	
	session_start();
	//i want to the basename from the file path e.g. C:/wamp64/image1.jpg
	//from there i will get image1.jpg
	$filename = basename($_FILES['fileupload']['name']);
	
	//to get the filesize
	$getfilesize = $_FILES['fileupload']['size'];
	
	//to get the filetype
	$getFileType = pathinfo($filename,PATHINFO_EXTENSION);

	$username = $_SESSION['user'];
	
	//mediumblob max size = 16777215
	if($getfilesize > 16777215)
	{
		echo "<script>alert('Sorry file size is too big.";
		echo " Please choose others pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}

	//check for the file type
	if($getFileType != "jpg" && $getFileType != "jpeg"
	&& $getFileType != "png" && $getFileType !="gif")
	{
		echo "<script>alert('Wrong file type.";
		echo " Please choose others pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
	
	//all the testing was passed then go to the tmp folder to get the file
	//and straight upload to the database	
	$fileobjectpath = $_FILES['fileupload']['tmp_name'];
	
	//connection to db
	$conn = mysqli_connect('localhost','root','','educo')
	or die("<script>alert('error in db connection');</script>");
	
	//insert to the database
	$sql = "INSERT INTO certificate (Corp_ID,Cert_File) VALUES 
		((SELECT U_ID FROM users WHERE Name = '$username'),'$fileobjectpath')";

	mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) <=0)
	{
		die("<script>alert('Fail: Unable To Upload File!');window.history.go(-1);</script>");
	}

	echo "<script>alert('New Certificate Added!')</script>";
	echo "<script>window.location.href='corporate_main_menu.php';</script>";
