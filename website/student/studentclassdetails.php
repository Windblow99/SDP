<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>
<title>Class Details</title>
  <style>
  	body{
  		background-image: url("/Pictures/11.png");
  		background-repeat: no-repeat;
  		background-size: 100%;
  	}
  </style>
</head>

<body>

		<?php include($_SERVER["DOCUMENT_ROOT"].'/template/studentnavbar.php'); ?>


			<div class="container">		
	
				<div class="row">

				<div class="col-sm" style="font-size: 36px; color: #953031; font-weight: bold;"><br/>
				CLASS DETAILS
				</div>

				<div class="col-sm" style="color: #CC2865; font-size: 22px;"><br/><br/>
				<?php
				$conn = mysqli_connect('localhost','root','','educo');
				$username = $_SESSION['user'];
				
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$sql = "SELECT C_Name FROM class WHERE C_no = 
					(SELECT C_ID FROM student_class WHERE S_Name = '$username')";

				$result = mysqli_query($conn, $sql);

				while($row = mysqli_fetch_array($result))
				{
				  echo "<tr>";
				  echo "<td>" . $row['C_Name'] . "</td>";

				  echo "</tr>";
				  }
				  echo "</table>";

				mysqli_close($conn);
				?>
				</div>
				
		</div>

		<hr>

			<div class="row">

				<div class="col-sm">
				<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>Teacher in-charge:</center></h5>
				</div>

				<div class="col-sm" style="color: #CC2865; font-size: 25px; margin-right: 40px;"><br/>
				<?php
				$conn = mysqli_connect('localhost','root','','educo');
				$username = $_SESSION['user'];
				
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$sql = "SELECT Name FROM users WHERE U_ID = 
					(SELECT T_ID FROM class WHERE C_Name = 
					(SELECT C_Name FROM class WHERE C_no = 
					(SELECT C_ID FROM student_class WHERE S_Name = '$username')))";

				$result = mysqli_query($conn, $sql);

				while($row = mysqli_fetch_array($result))
				{
				  echo "<tr>";
				  echo "<td>" . $row['Name'] . "</td>";

				  echo "</tr>";
				  }
				  echo "</table>";

				mysqli_close($conn);
				?>
				</div>
				
			</div>		

		<hr>

		<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>Current in-class students</center></h5><br/>

			<table class="table table-hover" style="margin-left: 25%; width: 60%;">
  <tbody style="color: #F7478A; font-size: 18px; font-weight: bold; text-align: center;">

<?php

$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT S_Name FROM student_class WHERE C_ID = 
		(SELECT C_ID FROM student_class WHERE S_Name = '$username')";

$result = mysqli_query($conn, $sql);



while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['S_Name'] . "</td>";
  }
  echo "</table>";

mysqli_close($conn);
?>

</table>


		<hr>

		<div class="row">
			<div class="col-sm"><br/>
				<h5 style="box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>Top Scores</center></h5>
			</div>

		</div>
		<br/>
		<div style="color: #F7478A; font-size: 18px; font-weight: bold;">
		Top Scorers Place Higher On This List.
		</div>
		<br/><br/>

		
<table class="table table-hover" style="width: 90%;">
  <thead>
    <tr style="background-color: #CC2865; color: white;">
      <th>Student</th>
      <th>Score</th>

    </tr>
  </thead>
  <tbody style="color: #F7478A; font-size: 18px; font-weight: bold;">

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql = "SELECT ROUND(AVG(E_Result)),S_Name FROM result R 
		INNER JOIN student_class S ON R.U_ID = S.S_ID 
		AND S.C_ID = (SELECT C_ID FROM student_class WHERE S_Name = '$username')
		ORDER BY E_Result DESC";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['S_Name'] . "</td>";
  echo "<td>" . $row['ROUND(AVG(E_Result))'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";

mysqli_close($conn);
?>

</table>

</body>

</html>