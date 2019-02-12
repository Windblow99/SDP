<?php
	$conn = mysqli_connect('localhost','root','','educo');

	$sql = "Select * from question where Format='MCQ' order by rand() limit 1";

	$insert = "INSERT INTO question (Chapter, Format, Difficulty, Mark, QuestionContent, Image, Imagepath, Answer1, Answer2, Answer3, Answer4, TrueAnswer) VALUES ('$chapter', '$format', '$difficulty', '$mark', '$question', '$getimageobj', '$destination', '$answer1', '$answer2', '$answer3', '$answer4', '$trueanswer');";
	
	mysqli_query($conn, $insert);
	
	if (mysqli_affected_rows($conn) <= 0)
	{
		echo "<script>alert('Insert Failed!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}

	echo "<script>alert('New question added into database!');</script>";
	echo ("<script>window.location.href='teacher_menu.php';</script>");
?>