<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>View Questions</title>

  <style>
    body{
      background-image: url("/pictures/6.jpg");
      background-repeat: no-repeat;
      background-size: 100%;
    }
  </style>
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
<br/><br/>

<center>
<div class="row" style="margin-left: 10%;">
  <div class="dropdown col-sm-2">
    <button class="btn btn-secondary dropdown-toggle"type="button" id="questionapproval" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by status</button>
      <div class="dropdown-menu" aria-labelledby="questionapproval">
        <a class="dropdown-item" href="#!">Approved</a>
        <a class="dropdown-item" href="#!">Pending</a>
      </div>
  </div>
  <div class="dropdown col-sm-3">
    <button class="btn btn-secondary dropdown-toggle"type="button" id="chapters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by chapter</button>
      <div class="dropdown-menu" aria-labelledby="chapters">
        <a class="dropdown-item" href="#!">Chapter 1</a>
        <a class="dropdown-item" href="#!">Chapter 2</a>
      </div>
  </div>
  <div class="dropdown col-sm-2">
    <button class="btn btn-secondary dropdown-toggle"type="button" id="questiontype" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by type</button>
      <div class="dropdown-menu" aria-labelledby="questiontype">
        <a class="dropdown-item" href="#!">Exam</a>
        <a class="dropdown-item" href="#!">Lab Session</a>
      </div>
  </div>
  <div class="dropdown col-sm-3">
    <button class="btn btn-secondary dropdown-toggle"type="button" id="questiondifficulty" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by difficulty</button>
      <div class="dropdown-menu" aria-labelledby="questiondifficulty">
        <a class="dropdown-item" href="#!">Beginner</a>
        <a class="dropdown-item" href="#!">Intermediate</a>
        <a class="dropdown-item" href="#!">Expert</a>
      </div>
  </div>
</div>

<br/><br/>

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

$sql = "SELECT Q_No,Approval,Chapter,Format,Difficulty FROM question";
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

</center>
</body>
</html>