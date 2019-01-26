<?php

session_start();
$conn = mysqli_connect('localhost','root','','educo');

$class = $_POST['class_select'];
$student = $_POST['student_name'];

$sql = "INSERT INTO student_class (C_ID,S_ID,S_Name) VALUES 
		((SELECT C_No FROM class WHERE C_Name = '$class'),
		 (SELECT U_ID FROM users WHERE Name = '$student'),'$student')";

mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn) <=0)
{
	die("<script>alert('Fail: unable to add student!');window.history.go(-1);</script>");
}

echo "<script>alert('New student added!')</script>";
echo "<script>window.location.href='class_details.php';</script>";

?>