<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>
<title>Exams</title>
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
				<?php echo $_SESSION['user']; ?>'s Exam Details
				</div>

				<div class="col-sm" style="color: #CC2865; font-size: 18px;"><br/><br/>
				<br/>ASIA PACIFIC UNIVERSITY | STUDENT
				</div>
				
		</div>


		<hr>

			<div class="row">

				<div class="col-sm">
				<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>EXAM DETAILED RESULTS</center></h5>
				</div>

				<div class="col-sm" style="padding-top: 18px;">
				<a href="#"><center>View marks for grade</center></a>
				</div>
				
			</div>
<table class="table table-hover" style="width: 95%;">
  <thead>
    <tr style="background-color: #CC2865; color: white;">
      <th>Question Number</th>
      <th>Question Content</th>
      <th>Option A</th>
      <th>Option B</th>
      <th>Option C</th>
      <th>Option D</th>
      <th>Your Answer</th>
      <th>Correct Answer</th>
      <th></th>
    </tr>
  </thead>
  <tbody style="color: #F7478A; font-size: 18px; font-weight: bold;">
			<?php 
          $id = $_GET['id'];
          $conn = mysqli_connect('localhost','root','','educo');
          if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          $sql = "SELECT S_Q_No,S_QAnswer,TrueAnswer,QuestionContent,A,B,C,D FROM student_question
          JOIN question USING (Q_No,TrueAnswer)
          WHERE E_No = '$id'";

          $result = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_array($result))
          {
          	echo "<tr>";
            echo "<td>" . $row['S_Q_No'] . "</td>";
            echo "<td>" . $row['QuestionContent'] . "</td>";
            echo "<td>" . $row['A'] . "</td>";
            echo "<td>" . $row['B'] . "</td>";
            echo "<td>" . $row['C'] . "</td>";
            echo "<td>" . $row['D'] . "</td>";
            echo "<td>" . $row['S_QAnswer'] . "</td>";
            echo "<td>" . $row['TrueAnswer'] . "</td>";
            echo "</tr>";
          }

          mysqli_close($conn);
        ?>
	</tbody>
</table>	
</body>

</html>