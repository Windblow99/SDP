<?php

session_start();
$conn = mysqli_connect('localhost','root','','educo');

$class = $_POST['class_name'];
$username = $_SESSION['user'];

$sql = "INSERT INTO class (T_ID,C_Name) VALUES 
		((SELECT U_ID FROM users WHERE Name = '$username'),'$class')";

mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn) <=0)
{
	die("<script>alert('Fail: unable to create new class!');window.history.go(0);</script>");
}

echo "<script>alert('New class created!')</script>";
echo "<script>window.location.href='teacher_menu.php';</script>";

?>
