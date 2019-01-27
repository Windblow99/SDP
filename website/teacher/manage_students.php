<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Manage Students</title>

  <style>
    body{
      background-image: url("/Pictures/6.jpg");
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
    <div class="col-sm-3">
      <p class="text-center" style="font-size: 35px; color: maroon; float: left; font-weight: bold;">
      STUDENTS LIST
      </p>
    </div>
    <div class="col-sm-8">
      <p class="text-center" style="font-size: 18px; color: fuchsia; padding-top: 18px; float: left;">
      CLASS 1
      </p>
    </div>
  </div>
</div>

<hr/>

  <div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p>CURRENT IN-CLASS STUDENTS</p>
    </div>
  </div>
</div>

<br/>

<table class="table table-hover" style="margin-left: 25%; max-width: 500px;">

  <tbody style="color: #F7478A; font-size: 18px; font-weight: bold;">
<?php
  $conn = mysqli_connect('localhost','root','','educo');

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT S_Name FROM student_class";

  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>" . $row['S_Name'] . "</td>";
    echo "<td>";
    echo "<button class= btn btn-primary style='width: 165px; height: 40px; color: white; background-color: #333333; type='submit'>Remove</button></td>";
    echo "</tr>";
    }
    echo "</table>";

  mysqli_close($conn);
?>
  </tbody> <br/>
  
</table>
</body>
</html>