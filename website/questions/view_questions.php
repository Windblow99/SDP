<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>View Questions</title>

</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/teachernavbar.php'); ?>

<br/>
<div class="container">
  <div class="row">
    <div class="col-sm-5">
      <p class="text-center" style="font-size: 35px; color: maroon; float: left; font-weight: bold;">
      SUBMITTED QUESTIONS
      </p>
    </div>
  </div>
</div>

<hr/>
<br/>

<center>

<table class="table table-hover" style="width: 80%;">
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

//$sql = "SELECT * FROM question q INNER JOIN users u ON q.U_D = u.U_ID WHERE Name = '$username';";
$select = "SELECT * FROM question q INNER JOIN users u ON q.U_ID = u.U_ID WHERE Name = '$username' order by Q_No;";
$result = mysqli_query($conn,$select)
or die("<script>alert('Maybe select wrong table / columns');</script>");
      
$count = (mysqli_num_rows($result)>=1? true:
die("<script>alert('No data available in the table!');</script>"));

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
        background-color:#333333;' onclick=\"window.location.href='edit_question.php?id=".$row['Q_No']."'\">Modify</button></td>";
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

</center>
</body>
</html>