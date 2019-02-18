<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Corporate Main Menu</title>

</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/corporatenavbar.php'); ?>

<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <h4 class="float-left" style="font-size: 2.5em; color: #953031; font-weight: bold;">
      SUBMITTED QUESTIONS&nbsp;&nbsp;&nbsp;
      </h4>
    </div>
  </div>
</div>

<hr/><br/>

<div class="container">
  
<table class="table table-hover" style="margin-left: 10%; width: 80%;">
  <thead>
    <tr style="background-color: #CC2865; color: white;">
      <th>Question</th>
      <th>Status</th>
      <th>Chapter</th>
      <th>Type</th>
      <th>Difficulty</th>
      <th></th>
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

$sql = "SELECT Q_No,Approval,Chapter,Format,Difficulty FROM question WHERE Difficulty = 'Certificate'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['Q_No'] . "</td>";
  echo "<td>" . $row['Approval'] . "</td>";
  echo "<td>" . $row['Chapter'] . "</td>";
  echo "<td>" . $row['Format'] . "</td>";
  echo "<td>" . $row['Difficulty'] . "</td>";
  echo "<td>";
  echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
        background-color:#333333;' onclick=\"window.location.href='edit_question_teacher.php?id=".$row['Q_No']."'\">Modify</button></td>";
  echo "<td>";
  echo "<td>";
  echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
        background-color:#333333;'>Remove</button></td>";
  echo "<td>";
  echo "</tr>";
  }
  echo "</table>";

mysqli_close($conn);
?>

</table>

</div>

</body>
</html>