<?php
	$conn = mysqli_connect('localhost','root','','educo');

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
	
	$chapter = $_POST['chapter'];
	$format = $_POST['format'];
	$difficulty = $_POST['difficulty'];
	$question = $_POST['question'];
	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];
	$answer4 = $_POST['answer4'];
	$trueanswer = $_POST['trueanswer'];

	/*echo "$question";
	echo "$chapter";
	echo "$format";
	echo "$category";
	echo "$difficulty";
	echo "$mark";
	echo "$answer1";
	echo "$answer2";
	echo "$answer3";
	echo "$answer4";*/

	$sql = "INSERT INTO question (Chapter, Format, Difficulty, QuestionContent, Image, Answer1, Answer2, Answer3, Answer4) VALUES ('$chapter', '$format', '$difficulty', '$question', '$getimageobj', '$answer1', '$answer2', '$answer3', '$answer4');";

	//$sql = "INSERT INTO question (Image, Imagepath) VALUES ('$getimageobj', '$destination');";
	
	mysqli_query($conn, $sql);
	
	if (mysqli_affected_rows($conn) <= 0)
	{
		echo "<script>alert('Insert Failed!');</script>";
	//	die ("<script>window.history.go(-1);</script>");
	}

//	echo "<script>alert('New question added into database!');</script>";
//	echo ("<script>window.location.href='teacher_main_menu.php';</script>");*/
?>