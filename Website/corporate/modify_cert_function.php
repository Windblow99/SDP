<?php
	
	session_start();
	//obtain basename from filepath eg. C:/wamp64/image.jpg
	$filename = basename($_FILES['fileupload']['name']);
	
	//to obtain file size
	$getfilesize = $_FILES['fileupload']['size'];
	
	//to obatin file type
	$getFileType = pathinfo($filename,PATHINFO_EXTENSION);

	$certno = $_POST['cert_no'];

	$certname = $_POST['cert_name'];
	
	if($getfilesize > 16777215)
	{
		echo "<script>alert('Sorry file size is too big.";
		echo " Please choose other pics!');</script>";
		die("<script>window.history.go(-1);</script>");
	}

	//checking the file type
	if($getFileType != "jpg" && $getFileType != "jpeg"
	&& $getFileType != "png" && $getFileType !="gif")
	{
		echo "<script>alert('Wrong file type!";
		echo " Please choose other pics!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
	
	//testing completed then is sent to tmp
	//followed by upload to database	
	$fileobjectpath = $_FILES['fileupload']['tmp_name'];
	
	$conn = mysqli_connect('localhost','root','','educo')
	or die("<script>alert('error in db connection');</script>");
	
	$sql = "UPDATE certificate SET (Cert_File = '$fileobjectpath', Cert_Name ='$certname') 
			WHERE Cert_No ='$certno'";

	mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) <=0)
	{
		/*echo $sql;*/
		die("<script>alert('Fail: Unable To Upload File!');window.history.go(-1);</script>");
	}
	
	echo "<script>alert('Certificate Updated!')</script>";
	echo "<script>window.history.go(-1);</script>";