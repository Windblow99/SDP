<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>
<title>Student</title>
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

			<div class="row" style="margin-top: 20px;">

				<div class="col-sm" style="font-size: 36px; color: #953031; font-weight: bold;">
				<?php echo $_SESSION["user"]; ?>
				</div>

				<div class="col-sm" style="color: #CC2865; font-size: 18px; padding-top: 18px;">
 				ASIA PACIFIC UNIVERSITY | STUDENT 
				</div>

				<div class="col-sm">
				<a href="studentclassdetails.php" ><center><button class="btn btn-secondary" style="box-sizing: border-box; padding: 10px 40px; border-style: solid; background-color: #333333; color:white;">Class Details</button></center></a>
				</div>


			</div>

		<hr>


		<h5 style="box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>ACADEMIC PERFORMANCE</center></h5><br/>
			<div class="row">
				

					<div class="col-sm">
					<h4 style="font-size: 20px;">Overall Performance</h4><br/>
					<center style="font-size: 50px;">
					<?php
					$conn = mysqli_connect('localhost','root','','educo');
					$username = $_SESSION['user'];
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$sql = "SELECT ROUND(AVG(E_Result)) AS E_Result FROM result
							WHERE U_ID = (SELECT U_ID FROM users WHERE Name = '$username')
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
					$conn = mysqli_connect('localhost','root','','educo');
					$username = $_SESSION['user'];
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$sql = "SELECT ROUND(AVG(E_Result)) AS E_Result FROM result
							WHERE U_ID = (SELECT U_ID FROM users WHERE Name = '$username')
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
					<center style="padding-top: 40px;"><button onclick="window.location.href='studentexamperformance.php'" class="btn btn-secondary">View Details</button></center>
					</div>
				

					<div class="col-sm">
					<h4 style="font-size: 20px;">Lab Performance</h4><br/>
					<center style="font-size: 50px;">
					<?php
					$conn = mysqli_connect('localhost','root','','educo');
					$username = $_SESSION['user'];
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$sql = "SELECT ROUND(AVG(E_Result)) AS E_Result FROM result
							WHERE U_ID = (SELECT U_ID FROM users WHERE Name = '$username')
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
					<center style="padding-top: 40px;"><button onclick="window.location.href='studentlabperformance.php'" class="btn btn-secondary">View Details</button></center>
					</div>
				

			</div>


		<hr>



				<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>CORPORATE PERFORMANCE</center></h5>

				<div class="row">

				<div class="col-sm">
				</div>

				<div class="col-sm" style="font-size: 50px;">
				<center><?php
					$conn = mysqli_connect('localhost','root','','educo');
					$username = $_SESSION['user'];
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$sql = "SELECT COUNT(E_Result) AS E_Result FROM result
							WHERE U_ID = (SELECT U_ID FROM users WHERE Name = '$username')
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
					$username = $_SESSION['user'];
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

				<div class="col-sm" style="padding-top: 40px;">
				<button onclick="window.location.href='studentcertificate.php'" class="btn btn-secondary">View Details</button>
				</div>

			</div>



		

	
			</div>
		
		



</body>

</html>