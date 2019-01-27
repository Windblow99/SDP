<?php

$conn = mysqli_connect('localhost','root','','educo');

$chapter = $_POST['chapter'];
$year = $_POST['year'];

$sql = "INSERT INTO chapter (Chap_Name,Year_No) VALUES ('$chapter','$year')";

mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn) <=0)
{
	die("<script>alert('Fail: unable to enter new chapter!');window.history.go(-1);</script>");
}

echo "<script>alert('New chapter created!')</script>";
echo "<script>window.location.href='teacher_menu.php';</script>";

?>