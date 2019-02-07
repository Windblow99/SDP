<?php

session_start();
$conn = mysqli_connect('localhost','root','','educo');

$student = $_POST['student_name'];

$sql = "DELETE FROM student_class WHERE (S_Name = '$student')";

mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn) <=0)
{
	die("<script>alert('Fail: unable to remove student!');window.history.go(-1);</script>");
}

echo "<script>alert('Student removed from class!')</script>";
echo "<script>window.location.href='manage_students.php';</script>";

?>