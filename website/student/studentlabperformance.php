<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>
<title>Lab Exams</title>
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
				<?php echo $_SESSION['user']; ?>'s Lab Performance
				</div>

				<div class="col-sm" style="color: #CC2865; font-size: 18px;"><br/><br/>
				<br/>ASIA PACIFIC UNIVERSITY | STUDENT
				</div>
				
		</div>


		<hr>

			<div class="row">

				<div class="col-sm">
				<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>LAB PERFORMANCE</center></h5>
				</div>

				<div class="col-sm" style="padding-top: 18px;">
				<a href="#"><center>View marks for grade</center></a>
				</div>
				
			</div>
		 
			<div class="row">

				<div class="col-sm" ><br/>
				<h5 style="color: #CC2865; font-weight: bold;">Overall Performance</h5>
				</div>

				<div class="col-sm" style="font-size: 30px;"><br/>
				<center>
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
				</div>

				<div class="col-sm">
				
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
      <th>Lab Exam No</th>
      <th>Lab Exam Result</th>
      <th>Chapter</th>
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
		AND Difficulty = 'Lab' ";

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
  echo "</tr>";
  }
  echo "</table>";

mysqli_close($conn);
?>

</table>
<hr>

<div class="row">

				<div class="col-sm">
				<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>PENDING LAB EXAMS</center></h5>
				</div>
				
			</div>
			<br/>
<table class="table table-hover" style="width: 90%;">
  <thead>
    <tr style="background-color: #CC2865; color: white;">
      <th>Chapter</th>
      <th></th>
    </tr>
  </thead>
  <tbody style="color: #F7478A; font-size: 18px; font-weight: bold;">

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$chapter = "Chapter 1";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Chapter FROM result
		WHERE Chapter = 'Chapter 1' AND (SELECT U_ID FROM users WHERE Name = '$username')	
		AND Difficulty = 'Lab'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
			{	
				echo "<tr>";
				echo "<td>".$chapter."</td>";
				echo "<td>";
				echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
        			 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Lab&chapter=".$chapter."'\">Take Lab Exam</button></td>";
				echo "</tr>";
			}

mysqli_close($conn);
?>
<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$chapter = "Chapter 2";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Chapter FROM result
		WHERE Chapter = 'Chapter 2' AND (SELECT U_ID FROM users WHERE Name = '$username')
		AND Difficulty = 'Lab'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
			{	
				echo "<tr>";
				echo "<td>".$chapter."</td>";
				echo "<td>";
				echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
       				 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Lab&chapter=".$chapter."'\">Take Lab Exam</button></td>";
				echo "</tr>";
			}

mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$chapter = "Chapter 3";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Chapter FROM result
		WHERE Chapter = 'Chapter 3' AND (SELECT U_ID FROM users WHERE Name = '$username')
		AND Difficulty = 'Lab'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
			{	
				echo "<tr>";
				echo "<td>".$chapter."</td>";
				echo "<td>";
				echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
       				 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Lab&chapter=".$chapter."'\">Take Lab Exam</button></td>";
				echo "</tr>";
			}

mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$chapter = "Chapter 4";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Chapter FROM result
		WHERE Chapter = 'Chapter 4' AND (SELECT U_ID FROM users WHERE Name = '$username')
		AND Difficulty = 'Lab'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
			{	
				echo "<tr>";
				echo "<td>".$chapter."</td>";
				echo "<td>";
				echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
       				 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Lab&chapter=".$chapter."'\">Take Lab Exam</button></td>";
				echo "</tr>";
			}

mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$chapter = "Chapter 5";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Chapter FROM result
		WHERE Chapter = 'Chapter 5' AND (SELECT U_ID FROM users WHERE Name = '$username')
		AND Difficulty = 'Lab'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
			{	
				echo "<tr>";
				echo "<td>".$chapter."</td>";
				echo "<td>";
				echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
       				 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Lab&chapter=".$chapter."'\">Take Lab Exam</button></td>";
				echo "</tr>";
			}

mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$chapter = "Chapter 6";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Chapter FROM result
		WHERE Chapter = 'Chapter 6' AND (SELECT U_ID FROM users WHERE Name = '$username')
		AND Difficulty = 'Lab'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
			{	
				echo "<tr>";
				echo "<td>".$chapter."</td>";
				echo "<td>";
				echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
       				 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Lab&chapter=".$chapter."'\">Take Lab Exam</button></td>";
				echo "</tr>";
			}

mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$chapter = "Chapter 7";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Chapter FROM result
		WHERE Chapter = 'Chapter 7' AND (SELECT U_ID FROM users WHERE Name = '$username')
		AND Difficulty = 'Lab'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
			{	
				echo "<tr>";
				echo "<td>".$chapter."</td>";
				echo "<td>";
				echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
       				 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Lab&chapter=".$chapter."'\">Take Lab Exam</button></td>";
				echo "</tr>";
			}

mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$chapter = "Chapter 8";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Chapter FROM result
		WHERE Chapter = 'Chapter 8' AND (SELECT U_ID FROM users WHERE Name = '$username')
		AND Difficulty = 'Lab'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
			{	
				echo "<tr>";
				echo "<td>".$chapter."</td>";
				echo "<td>";
				echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
       				 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Lab&chapter=".$chapter."'\">Take Lab Exam</button></td>";
				echo "</tr>";
			}

mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$chapter = "Chapter 9";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Chapter FROM result
		WHERE Chapter = 'Chapter 9' AND (SELECT U_ID FROM users WHERE Name = '$username')
		AND Difficulty = 'Lab'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
			{	
				echo "<tr>";
				echo "<td>".$chapter."</td>";
				echo "<td>";
				echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
       				 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Lab&chapter=".$chapter."'\">Take Lab Exam</button></td>";
				echo "</tr>";
			}

mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$chapter = "Chapter 10";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Chapter FROM result
		WHERE Chapter = 'Chapter 10' AND (SELECT U_ID FROM users WHERE Name = '$username')
		AND Difficulty = 'Lab'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0) // if num rows less than = 0, means no result
			{	
				echo "<tr>";
				echo "<td>".$chapter."</td>";
				echo "<td>";
				echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
       				 background-color:#333333;' onclick=\"window.location.href='/Website/questions/exam_function.php?difficulty=Lab&chapter=".$chapter."'\">Take Lab Exam</button></td>";
				echo "</tr>";
			}

mysqli_close($conn);
?>
			
</body>

</html>