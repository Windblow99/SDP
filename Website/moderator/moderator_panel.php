<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Admin Panel</title>

<style>
  body{
    background-image: url("/Pictures/5.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
  }
</style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/moderatornavbar.php'); ?>

<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <h4 class="float-left" style="font-size: 2.5em; color: #953031; font-weight: bold;">
      MODERATOR PANEL&nbsp;&nbsp;&nbsp;
      </h4>
      <p class="float-left" style="font-size: 1em; color: #CC2865; padding-top: 18px;float: left;">
      Manage Submitted Questions
      </p>
    </div>
  </div>
</div>

<hr/><br/>

<center>
<table class="table table-hover" style="width: 80%;">
  <thead>
    <tr style="background-color: #CC2865; color: white;">
      <th>Question</th>
      <th>Chapter</th>
      <th>Type</th>
      <th>Difficulty</th>
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
$select = "SELECT * FROM question q WHERE Approval = 'Pending' order by Q_No;";
$result = mysqli_query($conn,$select)
or die("<script>alert('Maybe select wrong table / columns');</script>");
      
$count = (mysqli_num_rows($result)>=1? true:
die("<script>alert('No pending questions found!');</script>"));

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['Q_No'] . "</td>";
  echo "<td>" . $row['Chapter'] . "</td>";
  echo "<td>" . $row['Format'] . "</td>";
  echo "<td>" . $row['Difficulty'] . "</td>";
  echo "<td>";
  echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
        background-color:#333333;' onclick=\"window.location.href='moderator_question.php?id=".$row['Q_No']."'\">View Details</button></td>";
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