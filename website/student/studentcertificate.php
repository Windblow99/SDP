<!DOCTYPE html>
<html>

<head>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>
<title>Certificates</title>
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
				<?php echo $_SESSION['user']; ?>'s Obtained Certificates
				</div>

				<div class="col-sm" style="color: #CC2865; font-size: 18px;"><br/><br/>
				<br/>ASIA PACIFIC UNIVERSITY | STUDENT
				</div>
				
		</div>

		<hr>

			<div class="row">

				<div class="col-sm" >
				<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>CERTIFICATE PROGRESS</center></h5>
				</div>

				<div class="col-sm">
				
				</div>

				<div class="col-sm">
			
				</div>				
				
			</div><br/>
		 
			<div class="row">

				<div class="col-sm">
				<h5 style="color: #CC2865; font-weight: bold;">Certificate Obtained</h5>
				</div>

				<div class="col-sm" style="font-size: 30px;">
				<?php
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
					/ 
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
					?>
				</div>

				<div class="col-sm">
				Each certificate grading may vary. For more information, please visit the respective websites.
				</div>				
				
			</div>

		<hr>
		<div class="row">

			<div class="col-sm">
			<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>RESULTS</center></h5>
			</div>
				
		</div>
		<br/>
		<table class="table table-hover" style="width: 90%;">
		  <thead>
		    <tr style="background-color: #CC2865; color: white;">
		      <th>Certificate No</th>
		      <th>Certificate Result</th>
		      <th>Chapter</th>
		      <th></th>
		      <th></th>
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

		$sql = "SELECT E_No,E_Result,Chapter FROM result
				WHERE U_ID = (SELECT U_ID FROM users WHERE Name = '$username') 
				AND Difficulty = 'Certificate' ";

		$result = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_array($result))
		{
		  echo "<tr>";
		  echo "<td>" . $row['E_No'] . "</td>";
		  echo "<td>" . $row['E_Result'] . "</td>";
		  echo "<td>" . $row['Chapter'] . "</td>";
		  echo "<td>";
		  echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
		        background-color:#333333;' onclick=\"window.location.href='detailed_result.php?id=".$row['E_No']."'\">View Detailed Result</button></td>";
		  echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='#'\">Official Website</button></td>";
		  echo "</tr>";
		  }
		  echo "</table>";

		mysqli_close($conn);
		?>

</table>
<hr>
	<div class="row">

		<div class="col-sm">
		<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>PENDING CERTIFICATES</center></h5>
		</div>
				
			</div>
			<br/>
	<table class="table table-hover" style="width: 90%;">
	  <thead>
	    <tr style="background-color: #CC2865; color: white;">
	      <th>Certificate</th>
	      <th></th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody style="color: #F7478A; font-size: 18px; font-weight: bold;">

	<?php
	$conn = mysqli_connect('localhost','root','','educo');
	$username = $_SESSION['user'];
	$certificate = "Physics 1";
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql = "SELECT Chapter FROM result
			WHERE Chapter = 'Physics 1' AND U_ID = (SELECT U_ID FROM users WHERE Name = '$username')	
			AND Difficulty = 'Certificate'";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
				{	
					echo "<tr>";
					echo "<td>".$certificate."</td>";
					echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Certificate&chapter=".$certificate."'\">Take Certificate Exam</button></td>";
	        		echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='#'\">Official Website</button></td>";
					echo "</tr>";
				}

	mysqli_close($conn);
	?>
	<?php
	$conn = mysqli_connect('localhost','root','','educo');
	$username = $_SESSION['user'];
	$certificate = "Physics 2";
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql = "SELECT Chapter FROM result
			WHERE Chapter = 'Physics 2' AND U_ID = (SELECT U_ID FROM users WHERE Name = '$username')	
			AND Difficulty = 'Certificate'";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
				{	
					echo "<tr>";
					echo "<td>".$certificate."</td>";
					echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Certificate&chapter=".$certificate."'\">Take Certificate Exam</button></td>";
	        		echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='#'\">Official Website</button></td>";
					echo "</tr>";
				}

	mysqli_close($conn);
	?>
	<?php
	$conn = mysqli_connect('localhost','root','','educo');
	$username = $_SESSION['user'];
	$certificate = "Physics 3";
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql = "SELECT Chapter FROM result
			WHERE Chapter = 'Physics 3' AND U_ID = (SELECT U_ID FROM users WHERE Name = '$username')	
			AND Difficulty = 'Certificate'";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
				{	
					echo "<tr>";
					echo "<td>".$certificate."</td>";
					echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Certificate&chapter=".$certificate."'\">Take Certificate Exam</button></td>";
	        		echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='#'\">Official Website</button></td>";
					echo "</tr>";
				}

	mysqli_close($conn);
	?>
	<?php
	$conn = mysqli_connect('localhost','root','','educo');
	$username = $_SESSION['user'];
	$certificate = "Physics 4";
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql = "SELECT Chapter FROM result
			WHERE Chapter = 'Physics 4' AND U_ID = (SELECT U_ID FROM users WHERE Name = '$username')	
			AND Difficulty = 'Certificate'";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
				{	
					echo "<tr>";
					echo "<td>".$certificate."</td>";
					echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Certificate&chapter=".$certificate."'\">Take Certificate Exam</button></td>";
	        		echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='#'\">Official Website</button></td>";
					echo "</tr>";
				}

	mysqli_close($conn);
	?>
	<?php
	$conn = mysqli_connect('localhost','root','','educo');
	$username = $_SESSION['user'];
	$certificate = "Chapter 3";
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql = "SELECT Chapter FROM result
			WHERE Chapter = 'Chapter 3' AND U_ID = (SELECT U_ID FROM users WHERE Name = '$username')	
			AND Difficulty = 'Certificate'";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
				{	
					echo "<tr>";
					echo "<td>".$certificate."</td>";
					echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Certificate&chapter=".$certificate."'\">Take Certificate Exam</button></td>";
	        		echo "<td>";
					echo "<button class= 'btn btn-primary' style='width: 200px; height: 40px; color: white; 
	        			 background-color:#333333;' onclick=\"window.location.href='#'\">Official Website</button></td>";
					echo "</tr>";
				}

	mysqli_close($conn);
	?>

				
</div>
</body>

</html>