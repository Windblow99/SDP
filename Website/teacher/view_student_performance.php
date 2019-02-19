<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>
<title>Student Performance</title>
<style>
  	body{
  		background-image: url("/Pictures/6.png");
  		background-repeat: no-repeat;
  		background-size: 100%;
  	}
</style>
</head>

<body>	
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/teachernavbar.php'); ?>

			<div class="container">

			<div class="row" style="margin-top: 20px;">

				<div class="col-sm" style="font-size: 36px; color: #953031; font-weight: bold;">
				<?php 
					$id = $_GET['id'];
					$conn = mysqli_connect('localhost','root','','educo');

				  if (mysqli_connect_errno())
				  {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  }

				  $sql = "SELECT S_Name FROM student_class WHERE S_ID = '$id'";

				  $result = mysqli_query($conn, $sql);

				  while($row = mysqli_fetch_array($result))
				  {
				    echo "<tr>";
				    echo "<td>" . $row['S_Name'] . "</td>";
				    echo "</tr>";
				    }
				    echo "</table>";

				  mysqli_close($conn);
				?>
				
				</div>

				<div class="col-sm" style="color: #CC2865; font-size: 18px; padding-top: 18px;">
 				ASIA PACIFIC UNIVERSITY | STUDENT 
				</div>


			</div>

		<hr>


		<h5 style="box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>ACADEMIC PERFORMANCE</center></h5><br/>
			<div class="row">
				

					<div class="col-sm">
					<h4 style="font-size: 20px;">Overall Performance</h4><br/>
					<center style="font-size: 50px;">
					<?php
					$id = $_GET['id'];
					$conn = mysqli_connect('localhost','root','','educo');
					
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$sql = "SELECT ROUND(AVG(E_Result)) AS E_Result FROM result
							WHERE U_ID = '$id'
							AND Difficulty = 'Exam' OR Difficulty = 'Lab'";

					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($result))
					{
					  echo "<tr>";
					  echo "<td>" . $row['E_Result'] . "</td>";
					  echo "</tr>";
					  }
					  echo "</table>";

					mysqli_close($conn);
					?>/100 </center>
					</div>

					<div class="col-sm">
					<h4 style="font-size: 20px;">Exam Overall Performance</h4><br/>
					<center style="font-size: 50px;">
					<?php
					$id = $_GET['id'];
					$conn = mysqli_connect('localhost','root','','educo');
					
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$sql = "SELECT ROUND(AVG(E_Result)) AS E_Result FROM result
							WHERE U_ID = '$id'
							AND Difficulty = 'Exam'";

					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($result))
					{
					  echo "<tr>";
					  echo "<td>" . $row['E_Result'] . "</td>";
					  echo "</tr>";
					  }
					  echo "</table>";

					mysqli_close($conn);
					?>
					/100
					</center>

					</div>
				

					<div class="col-sm">
					<h4 style="font-size: 20px;">Lab Performance</h4><br/>
					<center style="font-size: 50px;">
					<?php
					$id = $_GET['id'];
					$conn = mysqli_connect('localhost','root','','educo');
					
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$sql = "SELECT ROUND(AVG(E_Result)) AS E_Result FROM result
							WHERE U_ID = '$id'
							AND Difficulty = 'Lab'";

					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($result))
					{
					  echo "<tr>";
					  echo "<td>" . $row['E_Result'] . "</td>";
					  echo "</tr>";
					  }
					  echo "</table>";

					mysqli_close($conn);
					?>
					/100
					</center>

					</div>
				

			</div>

		<br/>
		<hr>		
		<br/>



				<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>CORPORATE PERFORMANCE</center></h5>

				<div class="row">

				<div class="col-sm">
				</div>

				<div class="col-sm" style="font-size: 50px;">
				<center>
					<?php
					$id = $_GET['id'];
					$conn = mysqli_connect('localhost','root','','educo');
					
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$sql = "SELECT COUNT(E_Result) AS E_Result FROM result
							WHERE U_ID = '$id'
							AND Difficulty = 'Certificate'";

					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($result))
					{
					  echo "<tr>";
					  echo "<td>" . $row['E_Result'] . "</td>";
					  echo "</tr>";
					  }
					  echo "</table>";

					mysqli_close($conn);
					?> 
					&nbsp; / &nbsp;
					<?php
					$conn = mysqli_connect('localhost','root','','educo');

					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$sql = "SELECT COUNT(Cert_No) AS Cert_No FROM certificate";

					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($result))
					{
					  echo "<tr>";
					  echo "<td>" . $row['Cert_No'] . "</td>";
					  echo "</tr>";
					  }
					  echo "</table>";

					mysqli_close($conn);
					?></center>
				</div>

				<div class="col-sm" style="color: #ff1a8c; font-size: 20px; font-weight: bold;"><br/>
					Certificates Obtained
				</div>

			</div>

			<div class="row">

				<div class="col-sm">
				</div>

				<div class="col-sm">
				</div>

			</div>
	
			</div>


</body>

</html>