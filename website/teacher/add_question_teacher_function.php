<?php
	session_start(); 

	$conn = mysqli_connect('localhost','root','','educo');

	/*$filename = basename($_FILES['fileupload']['name']);
	
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
	}*/
	$name = $_SESSION['user'];

    $select = "SELECT * FROM users WHERE Name = '$name';";
    $result = mysqli_query($conn,$select)
    or die("<script>alert('Maybe select wrong table / columns');</script>");
      
    $count = (mysqli_num_rows($result)>=1? true:
    die("<script>alert('No data available in the table!');</script>"));
    $rows = mysqli_fetch_array($result);
    $uid = $rows['U_ID'];  
	
	$chapter = $_POST['chapter'];
	$format = "MCQ";
	$difficulty = $_POST['difficulty'];
	$question = $_POST['question'];
	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];
	$answer4 = $_POST['answer4'];
	$trueanswer = $_POST['trueanswer'];

	$sql = "INSERT INTO question (Chapter, U_ID, Format, Difficulty, Mark, QuestionContent, A, B, C, D, TrueAnswer) VALUES ('$chapter', '$uid', '$format', '$difficulty', 5, '$question', '$answer1', '$answer2', '$answer3', '$answer4', '$trueanswer');";

	//$sql = "INSERT INTO question (Image, Imagepath) VALUES ('$getimageobj', '$destination');";
	
	mysqli_query($conn, $sql);
	
	if (mysqli_affected_rows($conn) <= 0)
	{
		echo "<script>alert('Insert Failed!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}

	echo "<script>alert('New question added into database!');</script>";
	echo ("<script>window.location.href='teacher_menu.php';</script>");
?>